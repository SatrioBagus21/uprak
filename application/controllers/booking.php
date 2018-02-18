<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function prebooking()
	{	
		$rute_id = $_GET['rute_id'];
		// $passengers = $_GET['passengers'];

		$get_rute = $this->m_data->get_rute($rute_id);
		$data['rute'] = $get_rute;
		$this->load->view('v_booking_prebooking',$data);
	}

	public function booking(){
		$this->load->view('v_booking_booking');
	}

	public function seat(){
		echo "pilih kursi";
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		var_dump([$name,$address,$email,$gender]);
		die;
	}
}
