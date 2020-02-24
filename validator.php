<!-- Akhil Goyal 8622612 -->
<?php

if(!empty($_POST['firstname'])){ 
	
	$firstname = $_POST['firstname']; //if firstname is not empty
     echo '<p>Firstname is ' .$firstname.'</p>';  //Display the data

}
	else{
		
	echo '<p>Please Enter  firstname</p>'; // if firstname is not entered
	}
	
 if(!empty($_POST['lastname'])){
	 
	 $lastname = $_POST['lastname']; //if lastname is not empty
      echo '<p>Lastname  is ' .$lastname.'</p>' ;  //Display the data
	 }

	 else
     {
		 echo '<p>Please Enter  last name</p>';}   // if lstname is not entered
	 
	 if(!empty($_POST['age']))
     {
		 
		$age = $_POST['age']; //if age is not empty
             echo '<p>Age  is ' .$age.'</p>' ;  //Display the data
	 } 
	 else
     {
		 echo '<p>Please Enter  Age</p>'; // if age is not entered
	 }
	 
	 if(isset($_POST['newsletter']))
     {
		 
		 $newsletter = $_POST['newsletter']; 
         echo '<p>Selected newsletter  is ' .$newsletter.'</p>' ;  //Display the data
	 }
	 else
     {
		echo  '<p>Please Select a button</p>'; // if radio button is not selected
	 }



?>