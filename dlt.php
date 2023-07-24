<?php 
    include('./dbconn.php');

    $id=$_GET['id'];

    $sql="DELETE FROM student WHERE id='$id'";
    $res=mysqli_query($conn,$sql);

    if($res)
    {
        header('location:home.php');
    }
    else
    {
        echo "delete not success";
    }



?>
