<?php
$title='Success';
require_once 'includes/header.php' ;
require_once 'db/conn.php' ;
if(isset($_POST['submit'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $specialty=$_POST['specialty'];
    $email=$_POST['email'];
    $contact=$_POST['Number'];

    $isSuccess=$crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);
    if($isSuccess){
        include 'includes/successmessage.php';

    }
    else{
        include 'includes/error.php';


    }
}
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] .' '. $_POST['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $_POST['specialty'];?>
        </h6>
        <p class="card-text"> <?php echo 'Date of birth: '. $_POST['dob'];?></p>
        <p class="card-text"> <?php echo 'Email: '. $_POST['email'];?></p>
        <p class="card-text"> <?php echo 'Phone: '. $_POST['Number'];?></p>


    </div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<?php
require_once 'includes/footer.php' ;
?>