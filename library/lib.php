<?php
	function view($view_file, $data=NULL) {
		require($_SESSION['view_path'].$view_file.'.php');
	}
	function model($model_file) {
		require($_SESSION['model_path'].$model_file.'.php');
	}
?>