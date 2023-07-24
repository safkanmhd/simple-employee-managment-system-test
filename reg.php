<?php include('./nav.php');?>

    <form class="p-2 m-2" method="post" action="scrpt.php" >
        <h1 class="text-center fw-bold">Register</h1>
        <label class="form-label fw-bold p-2">User Name</label>
        <input type="text" class="form-control p-2" name="un" placeholder="enetr your name " required>
        <label class="form-label fw-bold p-3">Password</label>
        <input type="text" class="form-control p-2" name="pwd" placeholder="enetr your password " required>
        <label class="form-label fw-bold p-3">Email</label>
        <input type="text" class="form-control p-2" name="email" placeholder="enetr your email " required>
        <label class="form-label fw-bold p-3">Telephone</label>
        <input type="text" class="form-control p-2" name="contact" placeholder="enetr your telephone number " required>

        <input type="submit" class="btn btn-success mt-3" name="regi" value="Register"> 
    </form>

<?php include('./ftr.php');?>