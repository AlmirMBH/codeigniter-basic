<?php
// DB interaction
// Business logic
// Authentication


class StudentModel extends CI_Model
{

	public function studentData()
	{
		$studentClass = $this->studentClass();
		return $studentName = "Almir" . " Class: " . $studentClass;
	}

	private function studentClass()
	{
		return $studentClass = "BCA";
	}


	public function studentShow($id)
	{
		if ($id == '1') {
			return $result = "User 1";
		} elseif ($id == '2') {
			return $result = "User 2";
		}
	}
}
