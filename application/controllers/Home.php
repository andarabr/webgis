<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function peta18lama()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 201,
					);

		$this->load->view('index',$data);
	}

	public function peta18()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 2018,
					);

		$this->load->view('index',$data);
	}

	public function peta17()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 2017,
					);

		$this->load->view('index',$data);
	}

	public function peta16()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 2016,
					);

		$this->load->view('index',$data);
	}

	public function peta15()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 2015,
					);

		$this->load->view('index',$data);
	}

	public function peta14()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/mainpage',
					'tahun'				=> 2014,
					);

		$this->load->view('index',$data);
	}

	public function chart()
	{
		$data=array('headscript'		=> 'template/headscript',
					'tailscript'		=> 'template/tailscript',
					'navbar'			=> 'template/navbar',
					'content'			=> 'template/chartpage',
					'tahun'				=> 2016,
					);

		$this->load->view('index',$data);
	}

	public function test(){
		$this->load->view('index2');
	}
	
}
