<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_1ti');
	}

	public function index() {
		$this->load->view('mainPage.php');
		//$this->load->view('input.php');
	}

	public function fetchData(){		
		$data = $this->m_1ti->test_sparql();
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function range(){
		$angka = $_POST["budget"];
		//var_dump((int)$angka);

		$data = $this->m_1ti->range_test((int)$angka);
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function testScreen(){
		$data = $this->m_1ti->test_sparql();

		$this->load->view('input.php', $data);	
	}

	public function filterBrand(){
		$brand = $_POST["brand"];
		var_dump("^$brand");

		$data = $this->m_1ti->filter_brand("^$brand");
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function filterBrandSamsung(){
		$brand = "^Samsung";

		$data = $this->m_1ti->filter_brand($brand);
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function filterBrandAsus(){
		$brand = "^A";

		$data = $this->m_1ti->filter_brand($brand);
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function filterBrandXiaomi(){
		$brand = "^Xiaomi";

		$data = $this->m_1ti->filter_brand($brand);
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function filterBrandGoogle(){
		$brand = "^Google";

		$data = $this->m_1ti->filter_brand($brand);
		
		$this->load->view('list_smartphones.php', $data);
	}

	public function filterBrandOnePlus(){
		$brand = "^OnePlus";

		$data = $this->m_1ti->filter_brand($brand);
		
		$this->load->view('list_smartphones.php', $data);
	}
	
}
