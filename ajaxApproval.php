<?php

if(isset($_POST["sw_id"])) {
   	include 'ajaxConfig.php';
    $companyId = $_POST['sw_id'];
    $checked = $_POST['sw_value'];
    if($checked==1){	
		$select_query = "UPDATE companies SET companyDeleted = '$checked' WHERE companyId = '$companyId'";
		$result = mysqli_query($connect, $select_query);
		if ($result) {
			echo "<script type='text/javascript'>alert('Approved')</script>";
		}
	} else {
		$select_query = "UPDATE companies SET companyDeleted = '$checked' WHERE companyId = '$companyId'";
		$result = mysqli_query($connect, $select_query);
		if ($result) {
			echo "<script type='text/javascript'>alert('Not Approved')</script>";
		}
	}
}
?>