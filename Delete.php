<?php

session_start();

$id_P = $_SESSION['id'];

include 'db.php';

echo "<br>";

$id=$_GET['id'];

$delete ="DELETE FROM posts WHERE  id_P=$id";

if(mysqli_query($con, $delete)){
     echo "Record delete successfully ";
    }else{
        echo "Error:" .mysqli_error($con);
    }
    
echo "<br>";
لسه  موجود

اه طب اي الدنيا
جبربت مش بيعمل حاجه
جربى دويسى انتر
؟؟
// Delete My Profile User

$id=$_GET['id'];

$delete ="DELETE FROM users WHERE  id=$id";

if(mysqli_query($con, $delete)){
     echo " Delete My Profile successfully ";
    }else{
        echo "Error:" .mysqli_error($con);
    }

    // Delete My Profile Post


    $id=$_GET['id'];

    $delete2 ="DELETE FROM posts WHERE  id=$id";
    
    if(mysqli_query($con, $delete2)){
         echo " Delete My Profile successfully ";
        }else{
            echo "Error:" .mysqli_error($con);
        }
    
         //  deletedComment Post


    $id=$_GET['id'];

    $delete3 ="DELETE FROM comment WHERE  id=$id";
    
    if(mysqli_query($con, $delete3)){
         echo " Delete My Profile successfully ";
        }else{
            echo "Error:" .mysqli_error($con);
        }

?>