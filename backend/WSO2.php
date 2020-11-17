<?php
class WSO2{

	public function insert($sql){
		require 'connect.php';
		$result=mysqli_query($sql,$link);
		if($result){
			echo "Entry saved successfully";
		}
		else{
			echo mysqli_error($link);
		}
	}
	public function update($sql){
		require 'connect.php';
		$result=mysqli_query($sql,$link);
		if($result){
			echo "Entry updated successfully";
		}
		else{
			echo mysqli_error($link);
		}
	}
	
}