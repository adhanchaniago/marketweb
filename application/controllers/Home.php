<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
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
				$data['heading']			= $this->db->get_where('heading', array('id' => $id))->row();
				$data['des1']				= $this->db->get_where('deskripsi1', array('id' => $id))->row();
				$data['work_h']				= $this->db->get_where('work_h', array('id' => $id))->row();
				$data['work']				= $this->admin_models->get_work()->result();
				$data['des2']				= $this->db->get_where('deksripsi2', array('id' => $id))->row();
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_product()->result();
				$data['table2']				= $this->home_models->get_faq()->result();
				$data['table3']				= $this->admin_models->get_partners()->result();
				$data['mockup']				= $this->db->get_where('mockup', array('id' => $id))->row();
				$data['gambar']				= $this->home_models->get_gambar()->result();
				$data['event_tb']			= $this->home_models->get_event()->result();
				// des mockup
				$id_m1						= 1;
				$id_m2						= 2;
				$id_m3						= 3;
				$id_m4						= 4;
				$id_m5						= 5;
				$id_m6						= 6;

				$data['mockup_des1']		= $this->db->get_where('mockup_des', array('id' => $id_m1))->row();
				$data['mockup_des2']		= $this->db->get_where('mockup_des', array('id' => $id_m2))->row();
				$data['mockup_des3']		= $this->db->get_where('mockup_des', array('id' => $id_m3))->row();
				$data['mockup_des4']		= $this->db->get_where('mockup_des', array('id' => $id_m4))->row();
				$data['mockup_des5']		= $this->db->get_where('mockup_des', array('id' => $id_m5))->row();
				$data['mockup_des6']		= $this->db->get_where('mockup_des', array('id' => $id_m6))->row();

				// apps detail 2
				$data['contoh']				= $this->home_models->get_contoh()->result();
				// link download
				$data['download']			= $this->db->get_where('download', array('id' => $id_m1))->row();
				$data['download2']			= $this->db->get_where('download', array('id' => $id_m2))->row();


				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['slideshow'] 			= 'home_navigasi/slideshow';
				$data['about'] 				= 'home_navigasi/about';
				$data['product'] 			= 'home_navigasi/product';
				$data['faq'] 				= 'home_navigasi/faq';
				$data['client'] 			= 'home_navigasi/client';
				$data['apps_detail']		= 'home_navigasi/apps_detail';
				$data['apps_detail2']		= 'home_navigasi/apps_detail2';
				$data['download_link']		= 'home_navigasi/download_link';
				$data['nav']		 		= 'home';
				$data['event']				= 'home_navigasi/event';
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$this->load->view('home', $data);
			}

			public function error_page()
			{
					$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				$data['heading']			= $this->db->get_where('heading', array('id' => $id))->row();
				


				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
					
				$data['nav']		 		= 'home';
				$data['event']				= 'home_navigasi/event';
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$this->load->view('error_page', $data);
			}

			public function kirim_pesan()
			{
				$nama 		= xss_clean($this->input->post('nama'));
				$email 		= xss_clean($this->input->post('email'));
				$hp 		= xss_clean($this->input->post('hp'));
				$company 	= xss_clean($this->input->post('company'));
				$pesan 		= xss_clean($this->input->post('pesan'));
				$waktu 		= date('d-M-y, g:i a');
				$this->home_models->kirim_pesan($nama, $email, $hp, $company, $pesan, $waktu);
				$this->session->set_flashdata('info', 'berhasil mengirim pesan');				
				redirect('home');

			}

			public function order()
			{
				$nama 		= xss_clean($this->input->post('nama'));
				$email 		= xss_clean($this->input->post('email'));
				$hp 		= xss_clean($this->input->post('hp'));
				$compro1 	= xss_clean($this->input->post('compro1'));
				$compro2 	= xss_clean($this->input->post('compro2'));
				$compro3 	= xss_clean($this->input->post('compro3'));
				$website 	= 1;
				$logo 		= 2;
				$detail 	= xss_clean($this->input->post('detail'));
				$waktu 		= date('d-M-y, g:i a');

				$orderan	= $compro1.' '.$compro2.' '.$compro3.' '.$website.' '.$logo;
				$this->home_models->kirim_order($nama, $email, $hp, $orderan, $detail, $waktu);
				//$this->home_models->send_email($nama, $email, $hp, $orderan, $detail, $waktu);
				$this->session->set_flashdata('info', 'Hallo '.$nama.' Tunggu tim kami untuk menghubungi dan memproses pesanan anda!');
				redirect('home/success');


				
			}

			public function success()
			{
				$id 						= 1;
				$data['info']				= $this->db->get_where('info', array('id' => $id))->row();
				$data['seo']				= $this->db->get_where('seo', array('id' => $id))->row();
				
			

				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				
				$this->load->view('success', $data);
			}

			public function daftar_sub()
			{
				$nama 			= xss_clean($this->input->post('nama'));
				$email 			= xss_clean($this->input->post('email'));
				$hp 			= xss_clean($this->input->post('hp'));
				$compro1 		= xss_clean($this->input->post('compro1'));
				$compro2 		= xss_clean($this->input->post('compro2'));
				$compro3 		= xss_clean($this->input->post('compro3'));
				$website 		= xss_clean($this->input->post('website'));
				$logo 			= xss_clean($this->input->post('logo'));
				$detail 		= xss_clean($this->input->post('detail'));
				$waktu 			= date('d-M-y, g:i a');
				$member 		= xss_clean($this->input->post('member'));
				$email_member 	= xss_clean($this->input->post('email_member'));

				$orderan	= $compro1.' '.$compro2.' '.$compro3.' '.$website.' '.$logo;
				$this->home_models->kirim_order_member($nama, $email, $hp, $orderan, $detail, $waktu, $member);
				$this->home_models->send_email_member($nama, $email, $hp, $orderan, $detail, $waktu, $email_member);
				$this->session->set_flashdata('info', 'Hallo '.$nama.' Tunggu tim kami untuk menghubungi dan memproses pesanan anda!');
				redirect('home/success');
			}

			public function jasa_website()
			{
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$id2 						= 1;
				$id 						= 1;
				$website 					= 'website';
				$data['info']				= $this->db->get_where('info', array('id' => $id2))->row();
				$data['seo']				= $this->db->get_where('article', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id2))->row();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['nav']		 		= 'jasa-website';
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id))->row();
				$data['table']				= $this->admin_models->get_product_website($website)->result();
				$data['product'] 			= 'home_navigasi/product';

				$this->load->view('jasa_website', $data);
			}

			public function google_ads()
			{
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$id2 						= 1;
				$id 						= 2;
				$google 					= 'google seo';
				$data['info']				= $this->db->get_where('info', array('id' => $id2))->row();
				$data['seo']				= $this->db->get_where('article', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id2))->row();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['nav']		 		= 'jasa-google-ads';
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id2))->row();
				$data['table']				= $this->admin_models->get_product_google($google)->result();
				$data['product'] 			= 'home_navigasi/product';

				$this->load->view('jasa_website', $data);
			}

			public function sosial_media_ads()
			{
				$data['counter']			= $this->pengunjung->get_pengunjung();
				$id2 						= 1;
				$id 						= 3;
				$sosial 					= 'sosial ads';
				$data['info']				= $this->db->get_where('info', array('id' => $id2))->row();
				$data['seo']				= $this->db->get_where('article', array('id' => $id))->row();
				$data['heading2']			= $this->db->get_where('heading', array('id' => $id2))->row();
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_top']    		= 'home_navigasi/script_top';
				$data['script_bottom']  	= 'home_navigasi/script_bottom';
				$data['header'] 			= 'home_navigasi/header';
				$data['footer'] 			= 'home_navigasi/footer';
				$data['heading'] 			= 'article/heading';
				$data['nav']		 		= 'jasa-sosial-media-ads';
				$data['product_h']			= $this->db->get_where('product_h', array('id' => $id2))->row();
				$data['table']				= $this->admin_models->get_product_sosial($sosial)->result();
				$data['product'] 			= 'home_navigasi/product';

				$this->load->view('jasa_website', $data);
			}

		
		}