<?php 

/**
 * main controller class
 */
class Controller
{
	
	public function view($view,$data = array())
	{
		//giải nén và đặt dữ liệu vào đó
		extract($data);
		// code...

		if(file_exists("../app/views/" . $view . ".view.php"))
		{
			// load file
			require ("../app/views/" . $view . ".view.php");
		}else{
			// if file doesn't exist
			require ("../app/views/404.view.php");
		}
	}

	public function load_model($model)
	{

		if(file_exists("../app/models/".ucfirst($model).".php"))
		{
			require("../app/models/".ucfirst($model).".php");
			return $model = new $model();
		}
		
		return false;
	}
}