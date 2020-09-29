<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
	}
	public function index1()
	{
		$data = array(
			'Prefix' => $this->input->post("Prefix"),
			'F_name' => $this->input->post("Fname"),
            'L_name'=> $this->input->post("Lname"),
            'Sex'=> $this->input->post("Sex"),
            'Date_of_birth'=> $this->input->post("Dateofbirth"),
            'Studentcode'=> $this->input->post("Studentcode"),
            'House_number'=> $this->input->post("Housenumber"),
            'Swine'=> $this->input->post("Swine"),
            'District'=> $this->input->post("Studentcode"),
            'Canton'=> $this->input->post("Canton"),
            'Province'=> $this->input->post("Province"),
            'Postal_code'=> $this->input->post("Postalcode"),
            'Phone'=> $this->input->post("Phone"),
            'Email'=> $this->input->post("Email"),
        );
        $tko["d1"]=$data;
		$this->load->view('Ekhee',$tko);
	}
}
