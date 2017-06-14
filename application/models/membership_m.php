<?php

class Membership_m extends CI_Model {
    
    public function validate() {
        
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('pass')));
        $query = $this->db->get('members');
        
        if($query->num_rows == 1){
            foreach($query->result_array() as $row){
                $data = array(
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'tel' => $row['tel'],
                    'is_logged_in' => true
                );
            }
            return $data;
        }else{
            return false;
        }
    }
    
    /////////// Generate a random string //////////////
    
    public function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
	$str = "";
	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }
		
	return $str;
    }
    
    public function remind_me() {
        
        $email_r = $this->input->post('email_r');
        
        $this->db->where('email', $email_r);
        $query = $this->db->get('members');
        
        if($query->num_rows == 1){
            
            $token = $this->rand_string( 15 );
            
            $data = array(
                'token' => $token,
                'expire' => date("Y-m-d")
            );

            $this->db->where('email', $email_r);
            $this->db->update('members', $data);
            
            $message = "لقد طلبت استرجاع كلمة السر الخاصة بتسجيل دخولك فى موقع عالم طه الإحترافى"."\n\r";
            $message .= "قم بالضغط على الرابط التالى ليتم توجيهك إلى صفحة تغيير كلمة السر مع العلم بأن هذ الرابط صالح للإستخدام حتى يوم ".date("Y-m-d")."\n\r";
            $message .= site_url('login/forget_pass')."/".$email_r."/".$token;
            
            $this->email->from('taha@tahaworld.com', 'Taha Hussein');
	    $this->email->to($email_r); 			    
	    $this->email->subject('From: TahaWorld.com');
	    $this->email->message($message);
	    $this->email->send();
            
            return true;
        }else{
            return false;
        }
        
    }
    
    /////////// Change the password /////////////
    
    public function change_pass() {
        
        $this->db->where('email', $this->uri->segment(3));
        $query = $this->db->get('members');
        
        if($query->num_rows == 1){
            $this->db->where('email', $this->uri->segment(3));
            $this->db->where('token', $this->uri->segment(4));
            $query = $this->db->get('members');
            
            if($query->num_rows == 1){
                foreach($query->result() as $row){
                    $expire = $row->expire;
                }
                
                if($expire == date("Y-m-d")){
                    $data = array(
                        'password' => md5($this->input->post('password')),
                        'token' => ""
                    );
                    
                    $this->db->where('email', $this->uri->segment(3));
                    $this->db->update('members', $data);
                    
                    $result = '<p class="boxes done_box">تم الحفظ ، شكراً لك</p>';
                    
                }else{
                    $result = '<p class="boxes error_box">لقد انتهت صلاحية الرابط !</p>';
                }
                
            }else{
                $result = '<p class="boxes error_box">خطأ فى الكود السرى !</p>';
            }
            
        }else{
            $result = '<p class="boxes error_box">خطأ فى البريد الإلكترونى !</p>';
        }
        return $result;
    }
    
    ////////////// Cpanel //////////////
    
    public function cpanel_validate() {
        
        $this->db->where('email', $this->input->post('login_name'));
        $this->db->where('pass', md5($this->input->post('login_pw')));
        $query = $this->db->get('site_admin');
        
        if($query->num_rows == 1){
            foreach($query->result_array() as $row){
                $data = array(
                    'adminname' => $row['name'],
                    'adminemail' => $row['email'],
                    'is_cplogged_in' => true
                );
            }
            return $data;
        }else{
            return false;
        }
    }
    
}