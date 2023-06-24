<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Admin extends CI_Controller {

		function index()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'home';
			$data['content'] = 'halaman/admin/home';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$this->load->view('template/admin/header_footer',$data);
			
		}
//-------------------------------User------------------------------------------------
		function user()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'user';
			$data['content'] = 'halaman/admin/user';
			$data['menu'] = 'template/admin/menu';
			$data['data1'] = $this->db->get('user')->result();
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$this->load->view('template/admin/header_footer',$data);
		}
		function tambah_user()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/foto/';
	        	$config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG';
	        	$config['encrypt_name']     = TRUE;
        		$config['remove_spaces']    = TRUE;
	        	$config['max_size'] = '3000'; // kb
	        	$this->load->library('upload', $config);
	        	$this->upload->do_upload('foto');
	        	$hasil = $this->upload->data();
	        	$foto = $hasil['file_name'];
	        	if($foto == ""){
	        		$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c'),
						'password' => md5(12345)
					);
					$this->db->insert('user',$data);
					$this->session->set_userdata('pesan','tambah');
					redirect('admin/user');
	        	}else{
					$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c'),
						'password' => md5(12345),
						'foto' => $foto
					);
					$this->db->insert('user',$data);
					$this->session->set_userdata('pesan','tambah');
					redirect('admin/user');
				}
			}else{
				$data['title'] = 'Administrator';
				$data['button'] = 'user';
				$data['content'] = 'halaman/admin/tambah_user';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$this->load->view('template/admin/header_footer',$data);
			}
		}
		function edit_user()
		{
			if(isset($_POST['submit'])){
				$config['upload_path'] = 'assets/img/foto/';
	        	$config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG';
	        	$config['encrypt_name']     = TRUE;
        		$config['remove_spaces']    = TRUE;
	        	$config['max_size'] = '3000'; // kb
	        	$this->load->library('upload', $config);
	        	$this->upload->do_upload('foto');
	        	$hasil = $this->upload->data();
	        	$foto = $hasil['file_name'];
	        	$pss = $this->input->post('d');
	        	if($foto == ""){
	        		if($pss ==""){
	        			$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c')
					);
					$this->db->update('user',$data,array('id_user' => $this->input->post('id')));
					$this->session->set_userdata('pesan','update');
					redirect('admin/user');
	        		}else{
	        		$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c'),
						'password' => md5($pss)
					);
					$this->db->update('user',$data,array('id_user' => $this->input->post('id')));
					$this->session->set_userdata('pesan','update');
					redirect('admin/user');
				}
	        	}else{
	        	if($pss == ""){
	        		$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c'),
						'foto' => $foto
					);
					$this->db->update('user',$data,array('id_user' => $this->input->post('id')));
					$this->session->set_userdata('pesan','update');
					redirect('admin/user');
	        	}else{
					$data = array(
						'username' => $this->input->post('a'),
						'nama_user' => $this->input->post('b'),
						'role' => $this->input->post('c'),
						'password' => md5($pss),
						'foto' => $foto
					);
					$this->db->update('user',$data,array('id_user' => $this->input->post('id')));
					$this->session->set_userdata('pesan','update');
					redirect('admin/user');
				}
			}
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'Administrator';
				$data['button'] = 'user';
				$data['content'] = 'halaman/admin/edit_user';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['data1'] = $this->db->get_where('user',array('id_user' => $id))->result();
				$this->load->view('template/admin/header_footer',$data);
			}
		}
		function hapus_user()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('user',array('id_user' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('admin/user');
		}
			
//----------------------------------./user--------------------------------------------
//---------------------------------kategori-------------------------------------------
		function kategori()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'kategori';
			$data['content'] = 'halaman/admin/kategori';
			$data['menu'] = 'template/admin/menu';
			$data['data1'] = $this->db->get('kategori')->result();
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$this->load->view('template/admin/header_footer',$data);
		}
		function tambah_kategori()
		{
			if(isset($_POST['submit'])){
				$data = array('nama_kategori' => $this->input->post('a'));
				$this->db->insert('kategori',$data);
				$this->session->set_userdata('pesan','tambah');
				redirect('admin/kategori');
			}else{
			$data['title'] = 'Administrator';
			$data['button'] = 'kategori';
			$data['content'] = 'halaman/admin/tambah_kategori';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$this->load->view('template/admin/header_footer',$data);
			}
		}
		function edit_kategori()
		{
			if(isset($_POST['submit'])){
				$data = array('nama_kategori' => $this->input->post('a'));
				$this->db->update('kategori',$data,array('id_kategori' => $this->input->post('id')));
				$this->session->set_userdata('pesan','update');
				redirect('admin/kategori');
			}else{
			$id = $this->uri->segment('3');
			$data['title'] = 'Administrator';
			$data['button'] = 'kategori';
			$data['content'] = 'halaman/admin/edit_kategori';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['data1']= $this->db->get_where('kategori',array('id_kategori' => $id))->result();
			$this->load->view('template/admin/header_footer',$data);
			}
		}
		function hapus_kategori()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('kategori',array('id_kategori' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('admin/kategori');
		}
//-----------------------------arsip--------------------------------------------------
		function suratmasuk()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'suratmasuk';
			$data['content'] = 'halaman/admin/suratmasuk';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['suratmasuk'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori='Surat Masuk'")->result();
			$this->load->view('template/admin/header_footer',$data);
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
		        redirect('admin/suratmasuk');

			}else{
				$data['title'] = 'Administrator';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/admin/tambah_suratmasuk';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/admin/header_footer',$data);

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
		        redirect('admin/suratmasuk');
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
		        redirect('admin/suratmasuk');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'Administrator';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/admin/edit_suratmasuk';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['suratmasuk'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/admin/header_footer',$data);

			}
		}
		function hapus_suratmasuk()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('admin/suratmasuk');
		}
		function suratkeluar()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'suratkeluar';
			$data['content'] = 'halaman/admin/suratkeluar';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['suratkeluar'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori='Surat Keluar'")->result();
			$this->load->view('template/admin/header_footer',$data);
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
		        redirect('admin/suratkeluar');

			}else{
				$data['title'] = 'Administrator';
				$data['button'] = 'suratkeluar';
				$data['content'] = 'halaman/admin/tambah_suratkeluar';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/admin/header_footer',$data);

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
		        redirect('admin/suratkeluar');
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
		        redirect('admin/suratkeluar');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'Administrator';
				$data['button'] = 'suratmasuk';
				$data['content'] = 'halaman/admin/edit_suratkeluar';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['suratkeluar'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/admin/header_footer',$data);

			}
		}
		function hapus_suratkeluar()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('admin/suratkeluar');
		}
		function arsip()
		{
			$data['title'] = 'Administrator';
			$data['button'] = 'arsip';
			$data['content'] = 'halaman/admin/arsip';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['arsip'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON kategori.id_kategori=arsip.kode_kategori WHERE kategori.nama_kategori !='Surat Keluar' AND kategori.nama_kategori !='Surat Masuk'")->result();
			$this->load->view('template/admin/header_footer',$data);
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
		        redirect('admin/arsip');

			}else{
				$data['title'] = 'Administrator';
				$data['button'] = 'arsip';
				$data['content'] = 'halaman/admin/tambah_arsip';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$this->load->view('template/admin/header_footer',$data);

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
		        redirect('admin/arsip');
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
		        redirect('admin/arsip');
		        }
		        
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'Administrator';
				$data['button'] = 'arsip';
				$data['content'] = 'halaman/admin/edit_arsip';
				$data['menu'] = 'template/admin/menu';
				$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
				$data['kategori'] = $this->db->get('kategori')->result();
				$data['arsip'] = $this->db->query("SELECT * FROM arsip INNER JOIN kategori ON arsip.kode_kategori=kategori.id_kategori WHERE id_arsip='$id'")->result();
				$this->load->view('template/admin/header_footer',$data);

			}
		}
		function hapus_arsip()
		{
			$id = $this->uri->segment('3');
			$this->db->delete('arsip',array('id_arsip' => $id));
			$this->session->set_userdata('pesan','hapus');
			redirect('admin/arsip');
		}
//---------------------------------------Profil------------------------------------------------

		function user_profile()
		{
			$id = $this->session->userdata('id');
			$data['title'] = 'Administrator';
			$data['button'] = 'profil';
			$data['content'] = 'halaman/admin/user_profile';
			$data['menu'] = 'template/admin/menu';
			$data['data'] = $this->db->get_where('user',array('id_user' => $this->session->userdata('id')))->result();
			$data['profil'] = $this->db->get_where('user',array('id_user' => $id))->result();
			$this->load->view('template/admin/header_footer', $data);
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
			redirect('admin/user_profile');
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
			redirect('admin/user_profile');
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
					redirect('admin/user_profile');
				}else{
					$this->session->set_userdata('pesan','tidaksesuai');
				redirect('admin/user_profile');
				}
			}else{
				$this->session->set_userdata('pesan','salah');
				redirect('admin/user_profile');
			}
		}		
		
	}
?>