<?php include('./nav2.php');
        include('./dbconn.php');?>

    <form class="p-2 m-2" method="post" action="scrpt.php" >

        <h1 class="text-center fw-bold">Update Student</h1>

        <?php
            $id=$_GET['id'];
            $sql="SELECT * FROM student WHERE id='$id'";
            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0)
            {
                $row=mysqli_fetch_assoc($res);
                
                ?>
                    <label class="form-label fw-bold p-2">Id</label>
                    <input type="text" class="form-control p-2" name="id"  readonly value="<?php echo $row['id'];?>">
                    <label class="form-label fw-bold p-2">Name</label>
                    <input type="text" class="form-control p-2" name="name" placeholder="enetr your name " required value="<?php echo $row['name'];?>">
                    <label class="form-label fw-bold p-3">Reg No</label>
                    <input type="text" class="form-control p-2" name="regno" placeholder="enetr your reg no " required value="<?php echo $row['regno'];?>">
                    <label class="form-label fw-bold p-3">City</label>
                    <input type="text" class="form-control p-2" name="city" placeholder="enetr your city " required value="<?php echo $row['city'];?>">
        

                    <input type="submit" class="btn btn-success mt-3" name="updt" value="Update"> 
                    <a class="btn btn-danger mt-3" href="home.php">Back</a> 
                <?php
            }
        ?>
        
        
    </form>

<?php include('./ftr.php');?>