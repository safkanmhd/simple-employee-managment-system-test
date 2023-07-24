<?php include('./nav.php');?>
<form class="p-2 m-2" method="post" action="scrpt.php" >
    <h1 class="text-center fw-bold">Log in</h1>
    <label class="form-label fw-bold p-3">User Name</label>
    <input type="text" class="form-control p-2" name="un" placeholder="enetr your name " required>
    <label class="form-label fw-bold p-3">Password</label>
    <input type="text" class="form-control p-2" name="pwd" placeholder="enetr your password " required>
    <input type="submit" class="btn btn-danger mt-3" name="submit" value="login"> 
</form>
<?php include('./ftr.php');?>