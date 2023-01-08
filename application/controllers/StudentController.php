<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller
{

	public function index()
	{
		// first way
		$this->load->model('StudentModel');
		$student = $this->StudentModel->studentData();
		echo "Student name: " . $student;

		// second way
		$student1 = new StudentModel();
		echo "Student name: " . $student1->studentData();		
	}
}
