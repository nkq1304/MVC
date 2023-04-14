<?php

/**
 * home controller
 */
class Employee extends Controller
{
	
	public function index()
	{
		// code...
		$this->view('employee/info_employee');

	}
}