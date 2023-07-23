<?php 
require_once 'db/conn.php' ;

//Get Values from Post Operation
if(isset($_POST['submit'])){
    $id=$_POST['id'];
 
   $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $contact=$_POST['Number'];
    $specialty=$_POST['specialty'];




// Call Crud Function
$result=$crud->EditAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);

//Redirct TO index.php
if($result){
    header("location:viewrecord.php");}
    else
    {
    echo 'error';}}
    else{
        echo 'error';
    }
?>