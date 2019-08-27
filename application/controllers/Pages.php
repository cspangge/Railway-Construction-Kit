<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('template/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer', $data);
	}

	public function online()
	{
		$data['title'] = "Play Online"; // Capitalize the first letter
		$this->load->view('template/empty', $data);
		$this->load->view('pages/online', $data);
		$this->load->view('template/footer', $data);
	}
}
