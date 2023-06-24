<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Login extends CI_Controller {

		function index()
		{
			$this->load->view('halaman/view_login');
		}
		function aksi_login()
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$role = $this->input->post('role');
			$query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' AND role='$role'");
			if($query->num_rows() > 0){
				foreach($query->result() as $data)
					$this->session->set_userdata('id',$data->id_user);
					$this->session->set_userdata('nama',$data->nama_user);
					$this->session->set_userdata('role',$data->role);
					$role = $this->session->userdata('role');
				if($role =='admin'){
					echo $this->session->set_userdata('status','login');
					redirect('admin');
				}else{
					$this->session->set_userdata('status','loged');
					redirect('user');
				}

			}else{
				$this->session->set_userdata('gagal','gagal');
				redirect('login');
			}
		}
		function logout()
		{
			session_destroy();
			redirect('login');
  			//echo "<script>window.close();</script>";

		}
	}
?>