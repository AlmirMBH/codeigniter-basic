<?php
// This line is required to prevent this file from being accessed directly from the browser
// e.g. as base URL /application/controllers/PageController.php
// If the direct access is attempted the message will be displayed ('No direct script access allowed').
// In addition, if the following URL is used: base URL /application/controllers/PageController
// a message will appear ('Directory access is forbidden').
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller
{

	// this function can be called from the browser e.g.
	// http://localhost:8000/PageController/
	// http://localhost:8000/PageController/index
	public function index()
	{
		echo "Index method - PageController";
	}


	// this function can be called from the browser e.g.
	// http://localhost:8000/PageController/about
	public function about()
	{
		echo "About method - PageController";
	}



	public function blog($blog = '')
	{
		echo "Blog method - Parameter: " . $blog;
		$this->load->view($blog);
	}


}
