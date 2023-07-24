<?php
    include('./dbconn.php');
    session_start();

    //log in 
    if(isset($_POST['submit']))
    {
        $un=mysqli_real_escape_string($conn,$_POST['un']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

        $sql="SELECT * FROM login WHERE un='$un' AND pwd='$pwd'";
        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)>0)
        {
            $_SESSION['login']=$un;
            header('location:./home.php');
        }
        else
        {
            echo"login not success ";
        }
    }

    //reg
    if(isset($_POST['regi']))
    {
        $un=mysqli_real_escape_string($conn,$_POST['un']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $contact=mysqli_real_escape_string($conn,$_POST['contact']);

        $sql="INSERT INTO login(un,pwd,email,contact) VALUES ('$un','$pwd','$email','$contact')";
        $res=mysqli_query($conn,$sql);

        if($res)
        {
            
            header('location:./login.php');
        }
        else
        {
            echo"register not success ";
        }
    }

    //add student
    if(isset($_POST['addstu']))
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $regno=mysqli_real_escape_string($conn,$_POST['regno']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        

        $sql="INSERT INTO student(name,regno,city) VALUES ('$name','$regno','$city')";
        $res=mysqli_query($conn,$sql);

        if($res)
        {
            
            header('location:./home.php');
        }
        else
        {
            echo"student add not success ";
        }
    }

    //update 
    if(isset($_POST['updt']))
    {
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $regno=mysqli_real_escape_string($conn,$_POST['regno']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        

        $sql="UPDATE student SET name='$name',regno='$regno',city='$city' WHERE id='$id'";
        $res=mysqli_query($conn,$sql);

        if($res)
        {
            
            header('location:./home.php');
        }
        else
        {
            echo"student add not success ";
        }
    }
?>