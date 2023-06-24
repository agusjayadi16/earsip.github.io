<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class User extends CI_Controller {

		function index()
		{
			$data['title'] = 'User';
			$data['button'] = 'home';
			$data['content'] = 'halaman/user/home';
			$data['menu'] = 'template/user/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$this->load->view('template/user/header_footer',$data);
			
		}
//-----------------------------arsip--------------------------------------------------
		function suratmasuk()
		{
			$data['title'] = 'User';
			$data['button'] = 'suratmasuk';
			$data['content'] = 'halaman/user/suratmasuk';
			$data['menu'] = 'template/user/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['suratmasuk'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori='Surat Masuk'")->result();
			$this->load->view('template/user/header_footer',$data);
		}
		function tambah_suratmasuk()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        $data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'pengirim' => $this->input->post('c'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->insert('arsip',$data);
		        $this->session->set_userdata('pesan','tambah');
		        redirect('user/suratmasuk');

			}else{
				$data['title'] = 'User';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/user/tambah_suratmasuk';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function edit_suratmasuk()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        if($berkas == ""){
		        	$data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'pengirim' => $this->input->post('c'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h')
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/suratmasuk');
		        }else{
		        	$data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'pengirim' => $this->input->post('c'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/suratmasuk');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'User';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/user/edit_suratmasuk';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['suratmasuk'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function hapus_suratmasuk()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('user/suratmasuk');
		}
		function suratkeluar()
		{
			$data['title'] = 'User';
			$data['button'] = 'suratkeluar';
			$data['content'] = 'halaman/user/suratkeluar';
			$data['menu'] = 'template/user/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['suratkeluar'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori='Surat Keluar'")->result();
			$this->load->view('template/user/header_footer',$data);
		}
		function tambah_suratkeluar()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        $data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->insert('arsip',$data);
		        $this->session->set_userdata('pesan','tambah');
		        redirect('user/suratkeluar');

			}else{
				$data['title'] = 'User';
				$data['button'] = 'suratkeluar';
				$data['content'] = 'halaman/user/tambah_suratkeluar';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function edit_suratkeluar()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        if($berkas == ""){
		        	$data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'pengirim' => $this->input->post('c'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h')
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/suratkeluar');
		        }else{
		        	$data = array(
		        	'indeks' => $this->input->post('a'),
		        	'nomor' => $this->input->post('b'),
		        	'pengirim' => $this->input->post('c'),
		        	'tujuan' => $this->input->post('d'),
		        	'tgl_keluar_masuk' => $this->input->post('e'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/suratkeluar');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'User';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/user/edit_suratkeluar';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['suratkeluar'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function hapus_suratkeluar()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('user/suratkeluar');
		}
		function arsip()
		{
			$data['title'] = 'User';
			$data['button'] = 'arsip';
			$data['content'] = 'halaman/user/arsip';
			$data['menu'] = 'template/user/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['arsip'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori !='Surat Keluar' AND kategori.nama_kategori !='Surat Masuk'")->result();
			$this->load->view('template/user/header_footer',$data);
		}
		function tambah_arsip()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        $data = array(
		        	'nomor' => $this->input->post('b'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->insert('arsip',$data);
		        $this->session->set_userdata('pesan','tambah');
		        redirect('user/arsip');

			}else{
				$data['title'] = 'User';
				$data['button'] = 'arsip';
				$data['content'] = 'halaman/user/tambah_arsip';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function edit_arsip()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/berkas/';
		        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG|pdf|PDF';
		        $config['encrypt_name']     = TRUE;
	        	$config['remove_spaces']    = TRUE;
		        $config['max_size'] = '3000'; // kb
		        $this->load->library('upload', $config);
		        $this->upload->do_upload('berkas');
		        $hasil = $this->upload->data();
		        $berkas = $hasil['file_name'];
		        if($berkas == ""){
		        	$data = array(
		        	'nomor' => $this->input->post('b'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h')
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/arsip');
		        }else{
		        	$data = array(
		        	'nomor' => $this->input->post('b'),
		        	'tgl_surat' => $this->input->post('f'),
		        	'nama_perihal' => $this->input->post('g'),
		        	'kode_kategori' => $this->input->post('h'),
		        	'berkas' => $berkas,
		        );
		        $this->db->update('arsip',$data,array('id_arsip' => $this->input->post('id')));
		        $this->session->set_userdata('pesan','update');
		        redirect('user/arsip');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'User';
				$data['button'] = 'arsip';
				$data['content'] = 'halaman/user/edit_arsip';
				$data['menu'] = 'template/user/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['arsip'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/user/header_footer',$data);

			}
		}
		function hapus_arsip()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('user/arsip');
		}
//---------------------------------------Profil------------------------------------------------

		function user_profile()
		{
			$id = $this->session->userdata('id');
			$data['title'] = 'User';
			$data['button'] = 'profil';
			$data['content'] = 'halaman/user/user_profile';
			$data['menu'] = 'template/user/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['profil'] = $this->db->get_where('user',array('id_user' => $id))->result();
			$this->load->view('template/user/header_footer', $data);
		}

		function edit_profil()
		{
			$config['upload_path'] = 'assets/img/foto/';
	        $config['allowed_types'] = 'gif|jpg|jpeg|png|PNG|JPG|JPEG';
	        $config['encrypt_name']     = TRUE;
        	$config['remove_spaces']    = TRUE;
	        $config['max_size'] = '3000'; // kb
	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto');
	        $hasil=$this->upload->data();
	        $cc = $hasil['file_name'];
	        if($cc ==""){
	        	$data = array(
				'nama_user' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'role' => $this->input->post('role')
				);
			$where = array('id_user' => $this->session->userdata('id'));
			$this->db->update('user',$data,$where);
			$this->session->set_userdata('pesan','update');
			redirect('user/user_profile');
	        }else{
	        	$data = array(
				'foto' => $cc,
				'nama_user' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'role' => $this->input->post('role')
				);
			$where = array('id_user' => $this->session->userdata('id'));
			$this->db->update('user',$data,$where);
			$this->session->set_userdata('pesan','update');
			redirect('user/user_profile');
	        }
				
		}
		function ganti_password()
		{
			$password = md5($this->input->post('password'));
			$id = $this->session->userdata('id');
			$pss_baru = md5($this->input->post('password_baru'));
			$konfirmasi_password = md5($this->input->post('konfirmasi_password'));
			$query = $this->db->query("SELECT * FROM user WHERE id_user='$id'")->result();
			foreach($query as $q);
			$pss = $q->password;
			if($pss == $password){
				if($pss_baru == $konfirmasi_password){
					$where = array('id_user' => $id);
					$data = array(
						'password' => $pss_baru
					);
					$this->db->update('user',$data,$where);
					$this->session->set_userdata('pesan','sukses');
					redirect('user/user_profile');
				}else{
					$this->session->set_userdata('pesan','tidaksesuai');
				redirect('user/user_profile');
				}
			}else{
				$this->session->set_userdata('pesan','salah');
				redirect('user/user_profile');
			}
		}		
	}
?>