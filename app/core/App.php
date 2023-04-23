<?php

/**
 * main app file
 */
class App
{
	protected $controller = "home";
	protected $method = "index";
	protected $params = array();

	public function __construct()
	{
		// code...
		$URL = $this->getURL();
		if(file_exists("../app/controllers/".$URL[0].".php"))
		{
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}

		require "../app/controllers/".$this->controller.".php";
		
		// create a new App version or class
		$this->controller = new $this->controller();

		//kiem tra method co ton tai khong? xem method này có chạy được trong controller ko
		if(isset($URL[1]))
		{
			if(method_exists($this->controller, $URL[1]))
			{
				// set method thành 1 item
				$this->method = ucfirst($URL[1]);
				unset($URL[1]);
			}
		}

		// create new array cho value
		$URL = array_values($URL);
		$this->params = $URL;
		
		call_user_func_array([$this->controller,$this->method], $this->params);
						//require function and params run
	}

	private function getURL()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
	}
}