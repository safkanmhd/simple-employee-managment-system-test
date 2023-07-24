<?php include('./nav2.php');?>

    <form class="p-2 m-2" method="post" action="scrpt.php" >

        <h1 class="text-center fw-bold">Add Student</h1>

        <label class="form-label fw-bold p-2">Name</label>
        <input type="text" class="form-control p-2" name="name" placeholder="enetr your name " required>
        <label class="form-label fw-bold p-3">Reg No</label>
        <input type="text" class="form-control p-2" name="regno" placeholder="enetr your reg no " required>
        <label class="form-label fw-bold p-3">City</label>
        <input type="text" class="form-control p-2" name="city" placeholder="enetr your city " required>
        

        <input type="submit" class="btn btn-success mt-3" name="addstu" value="Add Student"> 
        <a class="btn btn-danger mt-3" href="home.php">Back</a> 
    </form>

<?php include('./ftr.php');?>