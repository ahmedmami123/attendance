<?php
$title='Success';
require_once 'includes/header.php' ;
?>
<h1 class="text-center text-success">You Have Been Rigstered</h1>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_GET['firstname'] .' '. $_GET['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $_GET['select'];?>
        </h6>
        <p class="card-text"> <?php echo 'Date of birth: '. $_GET['dob'];?></p>
        <p class="card-text"> <?php echo 'Email: '. $_GET['email'];?></p>
        <p class="card-text"> <?php echo 'Phone: '. $_GET['Number'];?></p>


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