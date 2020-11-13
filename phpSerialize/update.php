<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$emp_name = serialize($_POST['emp_name']);
		$emp_dept = serialize($_POST['emp_dept']);
		$emp_salary = $_POST['emp_salary'];
		
		$stmt = $db_con->prepare("UPDATE tbl_employees SET emp_name=:en, emp_dept=:ed, emp_salary=:es WHERE emp_id=:id");
		$stmt->bindParam(":en", $emp_name);
		$stmt->bindParam(":ed", $emp_dept);
		$stmt->bindParam(":es", $emp_salary);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{	
			echo $emp_name;
			echo $emp_dept;
			echo "Successfully updated";	
			setcookie($id,$emp_name,$emp_dept,$emp_salary);
		}
		else{
			echo "Query Problem";
		}
	}

?>
