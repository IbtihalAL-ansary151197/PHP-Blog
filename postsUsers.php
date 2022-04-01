 
<?php
session_start();
 
$id_P = $_SESSION['id']; 

include 'db.php';

  $sql = " select * from posts ";
  $query = mysqli_query($con, $sql);

 
?>

<!DOCTYPE html>
<html lang="en">


<head> 

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	


<br><br><br>
 <?php
 
//  include 'header.php';
 ?>
                <div class="col-lg-12">
                    <div class="card mg-b-20">
            
						<form action="<?php $_PHP_SELF?>" method="post" class="contact-bx">
                        <div class="card-body" class="col-lg-12">
                            <div class="table-responsive">
                            
                                <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                                    <thead>
                                      
                                        <tr>
                                            
                                            <th class="border-bottom-0" colspan="4">Title </th>
                                            <th class="border-bottom-0" colspan="6"> Action </th>
                                            
                                           
                                        </tr>
                                    </thead> 
                                    <tbody>
                            
                                        <tr>
												<?php 
												
												while($data = mysqli_fetch_assoc($query)){
												
												?>
                                            <td colspan="4"><?php echo $data['title'];?></td>

                                            <td colspan="6">
                                        
												<div class="col-lg-6 m-b10">
					
												<a href='CommentUser.php?id=<?php echo $data["id_P"];?>' name="View" class="btn button-md"> View</a>
												<a href='Update.php?id=<?php echo $data["id_P"];?>' name="Update" class="btn button-md"> Update</a>
												<a href="Delete.php?id=<?php echo $data["id_P"];?>" name="delete"  class="btn button-md"> Delete</a>
										
									        	</div>
					
                                            </td>
                                        
                                           
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						</form>
                    </div>
                </div>


			