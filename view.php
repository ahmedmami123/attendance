<?php
$title='View Records';
require_once 'includes/header.php' ;
require_once 'db/conn.php' ;
if(!isset($_GET['id'])){
    echo "<h1 class='text-danger'>Please check details and tray again</h1>";

}
else{
$id=$_GET['id'];
$result=$crud->getAttendeeDetails($id);


?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $result['firstname'] .' '. $result['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $result['name'];?>
        </h6>
        <p class="card-text"> <?php echo 'Date of birth: '. $result['dateofbirth'];?></p>
        <p class="card-text"> <?php echo 'Email: '. $result['emailaddress'];?></p>
        <p class="card-text"> <?php echo 'Phone: '. $result['contactnumber'];?></p>


    </div>
</div>
<?php } ?>
<br>
<br>
<br>
<br>
<br>
<?php
require_once 'includes/footer.php' ;
?>