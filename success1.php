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
    $contact=$_POST['phone'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination = "$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);

    $isSuccess=$crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty,$destination);
    if($isSuccess){
        include 'includes/successmessage.php';

    }
    else{
        include 'includes/error.php';


    }
}
?>
<img src=<?php echo $destination ?> style="width: 26%;" />
<div class="card" style="width: 18rem;">


    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] .' '. $_POST['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $_POST['specialty'];?>
        </h6>
        <p class="card-text"> <?php echo 'Date of birth: '. $_POST['dob'];?></p>
        <p class="card-text"> <?php echo 'Email: '. $_POST['email'];?></p>
        <p class="card-text"> <?php echo 'Phone: '. $_POST['phone'];?></p>


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