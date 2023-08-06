<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// Database connection
$conn = new mysqli('localhost:3306','root','','test');
if ($conn ->connect_error){
    die('Connection Failed : ' .$conn-> connect_erroe);
    }
    else{
        $stmt =$conn -> prepare("Insert into registration (firstname,lastname,email,password,cpassword)
        values(?,?,?,?,?)");
        $stmt -> bind_param("sssss",$firstname,$lastname,$email,$passworrd,$cpassword);
        $stmt -> execute();
        $echo ->"registration succefull...";
        $stmt -> close();
        $conn -> close();
        

    }
?>
