<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	function carirute(){
		// var_dump(isset($this->input->get('from'));
		// 	die
		// if ($this->input->get('from') !== null) {

			$from = $this->input->get('from');
			$to = $this->input->get('to');
			$departure = $this->input->get('departure');
			$passengers = $this->input->get('passengers');

			$departure = explode('/', $departure);
			$departure = $departure[2].'-'.$departure[1].'-'.$departure[0];
		// var_dump($departure);
		// die;

			$class = $this->input->get('class');
			$where = array(
				'date(depart_at)' => $departure,
				'rute_from' => $from,
				'rute_to' => $to,

				'class' => $class
				);

			$data['rute'] = $this->m_data->tampilrute($where,'tb_rute')->result();
			$data['passengers'] = $passengers;
			$this->load->view('v_tampil_rute',$data);

		// }
		// else{
		// 	redirect(base_url());
		// }
	}
}
