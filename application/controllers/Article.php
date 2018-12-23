<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('home_models');
				$this->load->model('admin_models');
				$this->load->model('pengunjung');

				
			}
			public function index()
			{

				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id))->row();
				$data['counter']			= $this->pengunjung->get_pengunjung();
				
				// page article
				$perpage 					= 3;
				$page						= isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$start						= ($page > 1) ? ($page * $perpage) - $perpage : 0;
				$data['list']				= $this->home_models->pagination($start, $perpage)->result();
				$total						= $this->home_models->total_list()->num_rows();
				$data['halaman'] 			= ceil($total/$perpage);
				$halaman 					= ceil($total/$perpage);
				$data['sebelum'] 			= $halaman -1;
				$data['next'] 				= $halaman +1;
				$data['article_populer']	= $this->home_models->article_populer()->result();
				// 

				$data['catagori_db']		= $this->home_models->get_catagori()->result();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['list_art'] 			= 'article/list_art';
				$data['catagori'] 			= 'article/catagori';
				$data['iklan'] 				= 'article/iklan';
				$data['content'] 			= 'article/content';
				$data['list_terbaru'] 		= 'article/list_terbaru';
				$data['searching'] 			= 'article/searching';
				$data['pagination'] 		= 'article/pagination';
				$data['nav']		 		= 'artikel';


				$this->load->view('article/article', $data);
			}

			public function single_art($id)
			{
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$id2 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id2))->row();
				$data['seo']				= $this->db->get_where('article', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id2))->row();
				$data['full']				= $this->db->get_where('article', array('id' => $id))->row();
				$data['article_populer']	= $this->home_models->article_populer()->result();
				$data['catagori_db']		= $this->home_models->get_catagori()->result();
				$data['komentar']			= $this->home_models->get_komentar($id)->result();

				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['list_art'] 			= 'article/list_art';
				$data['catagori'] 			= 'article/catagori';
				$data['iklan'] 				= 'article/iklan';
				$data['content'] 			= 'article/single_art';
				$data['list_terbaru'] 		= 'article/list_terbaru';
				$data['searching'] 			= 'article/searching';

				$data['isi_art'] 			= 'article/isi_art';
				$data['nav']		 		= 'artikel';

				$this->load->view('article/single_art', $data);
			}

			public function cari_catagori($catagori)
			{
				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id))->row();
				
				// page article
				$perpage 					= 3;
				$page						= isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$start						= ($page > 1) ? ($page * $perpage) - $perpage : 0;
				$data['list']				= $this->home_models->pagination_catagori($start, $perpage, $catagori)->result();
				$total						= $this->home_models->total_list()->num_rows();
				$data['halaman'] 			= ceil($total/$perpage);
				$halaman 					= ceil($total/$perpage);
				$data['sebelum'] 			= $halaman -1;
				$data['next'] 				= $halaman +1;
				$data['article_populer']	= $this->home_models->article_populer()->result();
				// 

				$data['catagori_db']		= $this->home_models->get_catagori()->result();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['list_art'] 			= 'article/list_art';
				$data['catagori'] 			= 'article/catagori';
				$data['iklan'] 				= 'article/iklan';
				$data['content'] 			= 'article/content';
				$data['list_terbaru'] 		= 'article/list_terbaru';
				$data['searching'] 			= 'article/searching';
				$data['pagination'] 		= 'article/pagination';
				$data['nav']		 		= 'artikel';


				$this->load->view('article/article', $data);
			}

			public function komentar()
			{
				$nama 	  = xss_clean($this->input->post('nama'));
				$email 	  = xss_clean($this->input->post('email'));
				$isi 	  = xss_clean($this->input->post('isi'));
				$id_forum = xss_clean($this->input->post('id_forum'));
				$judul	  = xss_clean($this->input->post('judul'));
				$foto_user= rand(1,9);
				
				$waktu 	  = date('d-M-y, g:i a');

				$this->home_models->add_komentar($nama, $email, $isi, $id_forum, $judul, $foto_user, $waktu);				
				redirect('article/single_art/'.$id_forum.'/'.$judul);
			}
		}
