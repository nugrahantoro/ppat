<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function testing(){
        $this->load->model('m_login', 'mlogin');
        $sessData = $this->mlogin->getSessionData();
        $this->mlogin->openLoginScreen();
    }
    function index(){
        
        $this->load->model('m_login', 'mlogin');
        $sessData = $this->mlogin->getSessionData();
        //if ($sessData===false){
            $this->mlogin->openLoginScreen();
        //} else {
        //    echo "sudah login";
        //}
        //$data = $this->getDefaultData();
        
//        $data = array();
//        $data['assetdir'] = base_url().'themes/'.$this->themeName.'/';
//        $data['basedir'] = base_url();
//        $data['libsurl'] = base_url().'libs/';
//        $data['mainurl'] = $this->getMainUrl();
//        $data['brandicon'] = $this->brandIcon;
//        $this->load->view('vlogin', $data);
    }
    
    private function decryptdata($encrypted, $keyid){
        //$key = 
    }
    
//    public function svlogin($username, $password, $keyid){
//        $decpass = decryptdata($pasword, $keyid);
//        echo $username."-".$decpass;
//    }
    
    public function svgetkey(){
        //echo "***";
        $this->load->model('m_login', 'mlogin');
        $result = $this->mlogin->getRandomKey();
        //print_r($result);
        echo json_encode($result);
        
    }

    public function svlogin($username='', $password='', $key=0){
        // result sukses
        // {"success": 1}
        // result error
        // {"success": 0, "error": 1, "message": "Error"}
        $this->load->model('m_login', 'mlogin');
        
        try {
            $result = $this->mlogin->serviceLogin($username, $password, $key);
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
            //$result = array("success"=>0, "error"=>1, "message"=>$e->getMessage());
        }
        echo json_encode($result);
    }
    
    public function svlogout(){
        // result sukses
        // {"success": 1}
        // result error
        // {"success": 0, "error": 1, "message": "Error"}
        
        $this->load->model('m_login', 'mlogin');
        
        try {
            $this->mlogin->doLogout();
            $result = array("success"=>1);
        } catch (Exception $e) {
            $result = array("success"=>0, "error"=>1, "message"=>$e->getMessage());
        }
        echo json_encode($result);
    }
        
    public function logout(){
        
        $this->load->model('m_login', 'mlogin');
        $this->mlogin->doLogout();
        $redirect = site_url().'/menu/home';
        redirect($redirect);
        
    }
	
	function ambil_password()
	{
		$this->load->model('m_login', 'mlogin');
		$this->SysConfig = $this->ci->config->item('sysconfig');
		$vcode = $this->SysConfig['enccode'];
		$user = $this->input->post('s_user');
		$telp = $this->input->post('s_telp');
		$sql = $this->db->query("select * from sys_users where binary(username)='".$user."' and telepon='".$telp."'");
		if($sql->num_rows() > 0){
			$field = $sql->row();
			//$decpass = $this->rc4($vcode, $this->hexToStr($field->password));
			$base="0123456789";
			$max=strlen($base)-1;
			$acakpass="";
			mt_srand((double)microtime()*1000000);
			while (strlen($acakpass)<5)
			$acakpass .= $base{mt_rand(0,$max)};
					
			$this->db_sms = $this->load->database('smsd', TRUE);
			$message = "Password Baru Anda  : ".$acakpass;
			$sql = "insert into outbox (DestinationNumber,TextDecoded,CreatorID,SenderID) 
					values ('".$telp."','".$message."','itegno','itegno')";
			$this->db_sms->query($sql);
		
			$data['status'] = 'sukses';
			$data['acak'] = base64_encode($acakpass);
		}else{
			$data['status'] = 'error';
			$data['msg'] = 'Username atau Telepon tidak ada dalam database!!';
		}
		echo json_encode($data);
	}
	
	function cek_password()
	{
		$this->load->model('m_login', 'mlogin');
		$this->SysConfig = $this->ci->config->item('sysconfig');
		$vcode = $this->SysConfig['enccode'];
		$user = $this->input->post('s_user');
		$pass = $this->input->post('s_pass');
		$pass2 = $this->input->post('s_pass2');
		if($pass!=base64_decode($pass2)){
			$data['status'] = 'error';
			$data['msg'] = 'Password yang anda masukkan salah!';
		}else{
			$encpass = $this->mlogin->strToHex($this->mlogin->rc4($vcode, $pass));
			$dataIn = array(
						'password' =>  $encpass
					  );
			$this->db->where('username',$user);
			$this->db->update('sys_users',$dataIn);
			$data['status'] = 'sukses';
		}
		
		echo json_encode($data);
	}
    
    
}



?>
