<?php
 $error='';
	$warning='';
	$success='';

$link=mysqli_connect("localhost","root","","wildlife");
	   if($_POST){
		   if($_POST['tourist_id'] == ''){
			    $error="Fill all the fields";
		   }
		  else if($_POST['tourist_name'] == ''){
			   $error="Fill all the fields";
		   }
		 else if($_POST['visit_fare'] == ''){
			    $error="Fill all the fields";
		   }
		  else if($_POST['date'] == ''){
			    $error="Fill all the fields";
		   }
		   else if($_POST['guide_name'] == ''){
			    $error="Fill all the fields";
		   }else{
			   $query="select `tourist_id` from `tourist` where tourist_id='".$_POST['tourist_id']."'";
			   $result=mysqli_query($link,$query);
			   if(mysqli_num_rows($result) > 0){
				   $warning="This tourist is aleady registered";
			   }else{
			   $query="insert into `tourist` values('".$_POST['tourist_id']."','".$_POST['tourist_name']."','".$_POST['visit_fare']."','".$_POST['date']."','".$_POST['guide_name']."')";
				mysqli_query($link,$query);
				$success="Registered successfully";
			   }
	} 
	   }

?>

<!doctype html>

<html lang="en">
    

    <head>
    
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
    <title>Wildlife Sanctuary</title>
  </head>
  <style>
        .jumbotron {
        background-color: #cc4400;
            text-align: center
        }
    
      .card-title1{
          color: palegreen
      }
       .card-title2{
          color: brown
      } .card-title3{
          color: blueviolet
      } .card-title4{
          color: royalblue
      }

      #footer{
          width: auto;
          background-color: brown;
          padding-top: 50px;
          padding-bottom: 40px;
          text-align: center;
      }
      #bottombar{
          text-align: center; 
      }
      
    </style>
    
    <body>
        
        <nav class="navbar navbar-light bg-light">
 <a class="navbar-brand" href="index.php">Home</a>
</nav>
        <div class="jumbotron">
  <h1 class="display-4">Wildlife Sanctuary</h1>
  <p class="lead">A wildlife sanctuary, is a naturally occurring sanctuary, such as an island, that provides protection for species from hunting, predation, competition or poaching; it is a protected area, a geographic territory within which wildlife is protected. Refuges can preserve animals that are endangered.</p>
  
</div>
<div class="container">
      <form method="post">
	<div><?php
	if($error){
	echo'<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
	}
	if($warning){
		echo'<div class="alert alert-warning" role="alert">
  '.$warning.'
</div>';
	}
	if($success){
		echo'<div class="alert alert-success" role="alert">
  '.$success.'
</div>';
	}
	
	
	?></div>
 
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tourist ID</label>
    <div class="col-sm-10">
      <input type="text" name="tourist_id" class="form-control">
    </div>
  </div>
  
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tourist Name:</label>
    <div class="col-sm-10">
      <input type="text" name="tourist_name" class="form-control" id="inputPassword">
    </div>
  </div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Visit Fare</label>
    <div class="col-sm-10">
      <input type="text" name="visit_fare" class="form-control" id="inputPassword">
    </div>
  </div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Date:</label>
    <div class="col-sm-10">
      <input type="text" name="date" class="form-control" id="inputPassword">
    </div>
  </div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Guide Name:</label>
    <div class="col-sm-10">
      <input type="text" name="guide_name" class="form-control" id="inputPassword">
    </div>
  </div>


 <p><button type="submit" class="btn btn-primary">Submit</button></p>
 <p><a href="viewtourist.php"><button type="button" class="btn btn-success">View List</button></a></p>
</form>
     </div>    
               
        
        
        
        <div class="container">
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="ani.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title1"><a href="http://localhost/animal.php" style="color: #00FF00;">Animals</a></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="tour.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title2"><a href="http://localhost/tourist.php" style="color: #CC0033;">Tourists</a></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="staff.jfif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title3"><a href="http://localhost/staff.php" style="color: #33FFFF;">Staffs</a></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
           <div class="card">
    <img class="card-img-top" src="stock-vector-statistics-vector-icon-flat-soft-blue-symbol-pictogram-is-isolated-on-a-white-background-518317639.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title4"><a href="http://localhost/stats.php" style="color: #000066;">Statistics</a></h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div> 
</div>
            </div>
             
 <div class="container" id="footer">           
            
            <div id="bottombar">
			   <p><b>&copy; 2018 jimcorbettwildlifesanctuary.com. All rights reserved.</b></p>   
            </div>
                
            </div>



        
    
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>

</html>