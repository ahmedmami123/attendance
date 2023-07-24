<?php 
require_once 'includes/auth_check.php';

require_once 'db/conn.php' ;
if(!$_GET['id']){
    // echo 'error';
    include 'includes/error.php';
    header("location:viewrecord.php");

}else{
//get id values    
    $id=$_GET['id'];
// Call Crud Function
    $result=$crud->DeleteAttendee($id);
    //Redirct TO index.php
if($result){
    header("location:viewrecord.php");}
    else
    {
        include 'includes/error.php';
}
}
?>