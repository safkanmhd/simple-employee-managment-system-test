<?php include('./nav2.php');?>
<?php include('./dbconn.php');?>

<h1 class="text-center fw-bold m-3 text-light">Welcome to Home</h1>
<a class="btn btn-success m-3" href="addstudent.php">add student</a> 
<table class="table table-striped m-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>regno</th>
            <th>city</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql="SELECT * FROM student";
            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)){
                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['id'];
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['regno']."</td>";
                    echo "<td>".$row['city']."</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary m-2 btn-sm' href='updt.php?id=$id'>Update</a>";
                    echo "<a class='btn btn-danger m-2 btn-sm' href='dlt.php?id=$id''>delete</a>";
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>



<?php include('./ftr.php');?>