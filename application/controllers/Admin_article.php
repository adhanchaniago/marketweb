<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_article extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->load->model('load_setting');

			}
// ---------------------------------------------index -----------------------------------------------------------//
			public function index()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'article';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_article()->result();
				$data['all_catagori']		= $this->admin_models->get_catagori()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'Article';
				$data['sub_judul'] 			= 'Home';
				$data['content'] 			= 'admin/article';
				$data['graph_vs'] 			= 'admin/grafik_visitor';
				$this->load->view('admin/home', $data);
			}

			public function add_article()
			{
				$this->security_models->get_security();
				$config =  array(
                  'upload_path'     => "./assets/img/article/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin_article');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];

                                $catagori 		=$this->input->post('catagori');
                                $judul 			=$this->input->post('judul');
                                $isi 			=$this->input->post('isi');

                                $keywords		=$this->input->post('keywords');
                                $description	=$this->input->post('description');
                                $author			='infranetsystem.com';
                                $tanggal 		=date('d-M-y, g:i a');

                                // rezize image
                                $config['image_library']  = 'gd2';
								$config['source_image']   = $upload_data['full_path'];
								$config['create_thumb']   = FALSE;
								$config['maintain_ratio'] = TRUE;
								// $config['width']          = 800;
								// $config['height']         = 600;
	                            $config['quality']        = '80%';
	                            $this->image_lib->initialize($config);

	                            if (!$this->image_lib->resize())
                                {
                                  $this->session->set_flashdata('info','kesalahan mengupload foto');
	                              redirect('admin_article');
                                }
                          		
                                $this->admin_models->add_article($nama_file, $catagori, $judul, $isi, $keywords, $description, $author, $tanggal); 
                                $this->session->set_flashdata('info','data berhasil di tambah');
                                redirect('admin_article');
    		         		}
			}
			public function edit_article($id)
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'article';
				$id2 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id2))->row();
				$data['table']				= $this->admin_models->get_article()->result();
				$data['all_catagori']		= $this->admin_models->get_catagori()->result();
				$data['article_edit']		= $this->db->get_where('article', array('id' => $id))->row();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'Article';
				$data['sub_judul'] 			= 'Home';
				$data['content'] 			= 'admin/action/edit_article';
				$data['graph_vs'] 			= 'admin/grafik_visitor';
				$this->load->view('admin/home', $data);
			}

			public function edit_article_pro()
			{
				$this->security_models->get_security();
				$catagori 		=$this->input->post('catagori');
                $judul 			=$this->input->post('judul');
                $isi 			=$this->input->post('isi');
				$id 			=$this->input->post('id');
				$keywords		=$this->input->post('keywords');
                $description	=$this->input->post('description');
				$this->admin_models->update_article($catagori, $judul, $isi, $id, $keywords, $description);
				$this->session->set_flashdata('info', 'data berhasil di update!');				
				redirect('admin_article');
			}

			public function edit_gambar_article()
			{
				$this->security_models->get_security();
				$config =  array(
                  'upload_path'     => "./assets/img/article/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
	       				 		 $this->session->set_flashdata('info','gambar gagal di Update');
	                              redirect('admin/partners');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $gambar2 		=$this->input->post('gambar2');
                                $id 			=$this->input->post('id');

                                // rezize image
                                $config['image_library']  = 'gd2';
								$config['source_image']   = $upload_data['full_path'];
								$config['create_thumb']   = FALSE;
								$config['maintain_ratio'] = TRUE;
								$config['width']          = 300;
								$config['height']         = 300;
	                            $config['quality']        = '80%';
	                            $this->image_lib->initialize($config);

	                            if (!$this->image_lib->resize())
                                {
                                  $this->session->set_flashdata('info','kesalahan mengupload foto');
	                              redirect('admin_article');
                                }
                          		
                                $this->admin_models->update_img_article($nama_file, $id);
                                unlink('assets/img/article/'.$gambar2); 
                                $this->session->set_flashdata('info','data berhasil di update');
                                redirect('admin_article');
    		         		}
			}

			public function del_article($id, $foto)
			{
				$this->security_models->get_security();
				$this->admin_models->del_article($id);
				unlink('assets/img/article/'.$foto); 
				$this->session->set_flashdata('info','data berhasil di hapus');
				redirect('admin_article');
			}

			public function katagori()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'article';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_catagori()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'katagori article';
				$data['sub_judul'] 			= 'Home';
				$data['content'] 			= 'admin/catagori';
				$data['graph_vs'] 			= 'admin/grafik_visitor';
				$this->load->view('admin/home', $data);
			}

			public function add_catagori()
			{
				$this->security_models->get_security();
				$catagori 		=$this->input->post('catagori');
				$this->admin_models->add_catagori($catagori);
				$this->session->set_flashdata('info', 'data berhasil di tambah!');				
				redirect('admin_article/katagori');
			}

			public function del_catagori($id)
			{
				$this->security_models->get_security();
				$this->admin_models->del_catagori($id);
				$this->session->set_flashdata('info','data berhasil di hapus');
				redirect('admin_article/katagori');
			}

			public function komentar()
			{
				$this->security_models->get_security();
				$data['nav_top']			= 'article';
				$id 						= 1;
				$data['admin']				= $this->db->get_where('admin', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_komentar()->result();
				$data['script_top']    		= 'admin/script_top';
				$data['script_bottom']  	= 'admin/script_btm';
				$data['admin_nav']			= 'admin/admin_nav';
				$data['judul'] 				= 'komentar article';
				$data['sub_judul'] 			= 'Home';
				$data['content'] 			= 'admin/komentar';
				$this->load->view('admin/home', $data);
			}

			public function del_komentar($id)
			{
				$this->security_models->get_security();
				$this->admin_models->del_komentar($id);
				$this->session->set_flashdata('info','data berhasil di hapus');
				redirect('admin_article/komentar');
			}
		}
