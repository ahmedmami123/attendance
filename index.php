<?php
$title='Index';
require_once 'includes/header.php' ;
require_once 'db/conn.php' ;
$results=$crud->GetSpecialties();


?>
<form method="post" action="success1.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
            placeholder="Enter FirstName" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="name"
            placeholder="Enter Lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date Of Birthday</label>
        <input type="date" class="form-control" id="dob" name="dob" aria-describedby="dob"
            placeholder="Date Of Birthday ">
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Area of expertise</label>
        <select class="form-control" aria-label=".form-select-sm example" id="select" name="specialty">


            <option selected>Open this select menu</option>
            <?php 
    while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
            <option value=<?php echo $r['specialty_id']?>><?php echo $r['name']?></option>

            <?php   } ?>

        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
            placeholder=" Enter Email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputNumber1" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="Number" name="Number" aria-describedby="NumberHelp"
            placeholder=" Enter Number">
        <div id="emailHelp" class="form-text">We'll never share your Number with anyone else.</div>

    </div>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
require_once 'includes/footer.php' ;
?>