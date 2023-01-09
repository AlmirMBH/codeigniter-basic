<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller
{

	public function index()
	{
		// first way
		$this->load->model('StudentModel');
		$student = $this->StudentModel->studentData();
		echo "Student name: " . $student . "<br>";

		// second way
		$this->load->model('StudentModel', 'student'); // alias
		$student = $this->student->studentData();
		// $studentClass = $this->student->studentClass(); // private methods cannot be accessed
		echo "Student name: " . $student . "<br>";

		// third way
		$student1 = new StudentModel();
		echo "Student name: " . $student1->studentData() . "<br>";
	}


	public function show($id)
	{		
		$this->load->model('StudentModel');
		echo $this->StudentModel->studentShow($id);
	}
}
