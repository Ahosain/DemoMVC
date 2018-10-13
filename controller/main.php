<?php
	model('m_result_model');

	if(!isset($_GET['page'])) {
		getindex();
	}
	else {
		$page = $_GET['page'];

		switch ($page) {
			case 'about':
				about();
				break;
			case 'view_result':
				view_result();
				break;
			default:
				four_zero_four();
				break;
		}

	}


	function getindex(){
		view('startpage');
	}

	function about() {
		view('about');
	}


	function view_result() {
		if (isset($_POST["roll"]))
		 view("view_result", m_getData($_POST["roll"]));
		
		else view('view_result', -1);
	}

	function four_zero_four() {
		echo "404 not found. :/ :D ";

	}
?>