<?php

	function m_getData($roll){
		$db_name = $_SESSION["db_name"];
		$sql = "SELECT * FROM student_info WHERE roll=$roll ";
		$result = mysqli_query($db_name,$sql);
		if(mysqli_num_rows($result)>0){
          return $row=mysqli_fetch_assoc($result);
		}
		else return -1;
	}
?>
