<?php

include 'db.php';

 echo "<br>";

// $id_P = $_SESSION['id'];





$id=$_GET['id'];
if (isset($_POST['UpdateComment'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
 
    $edit ="UPDATE posts SET  title='$title', Description='$description'  where id=$id";
    $edit2 ="UPDATE comment SET  Comment='$UpdateComment'  where id_P=$id";

    if(mysqli_query($con, $edit)){
        echo "Data UPDATE Successfully ";
       }else{
           echo "Error UPDATE Data :" .mysqli_error($con);
       }
    if(mysqli_query($con, $edit2)){
        echo "Data UPDATE Successfully ";
       }else{
           echo "Error UPDATE Data :" .mysqli_error($con);
       }
}

?>   

 <!DOCTYPE html>
<html lang="en">

<head>
<title>Update</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<br> <br> <br>




<div class="container">
     
        <form action="<?php $_PHP_SELF?>" method="post" enctype="multipart/form-data">

      

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title"  class="form-control" id="exampleInputName" 
                placeholder="Title">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description"  class="form-control" id="exampleInputPassword1"
                    placeholder="Description">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">UpdateComment</label>
                <input type="text" name="UpdateComment"  class="form-control" id="exampleInputPassword1"
                    placeholder="UpdateComment">
            </div>


            <button type="submit" name="UpdateComment" class="btn btn-primary">UPDATE</button>
          
        </form>
    </div>

</body>

</html>


</body>
</html>
<!-- ///   Updated Profile //// -->


<?php
