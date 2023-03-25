<?php
include("auth/security.php");
include("auth/databaseconnect.php");
require('auth/action.php');

$fetchUserData = mysqli_query($connect, "SELECT *FROM home_users WHERE email='".$_SESSION['loggedInUser']."'");
$row = mysqli_fetch_assoc($fetchUserData);
$user_fname = trim($row['fname']);
$user_lname = trim($row['lname']);
$user_username = trim($row['username']);
$user_email = trim($row['email']);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recipe App</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
</head>
<body>
	<div class="container">
		
		<div class="meal-wrapper">
			<div class="meal-search">

				<img src="images/cookup.png" alt="">

				<div class="meal-search-box">
					<input type="text" class="search-control" placeholder="Enter an ingredient" id="search-input">
					<button type="submit" class="search-btn btn" id="search-btn">
						<i class="fas fa-search">search</i>
					</button>
				</div>
			</div>


			<div class="meal-result">
                <!--Echo username of logged in user-->
				<h4 class="title">Search results for: </h4>
				<div id="meal">

					
					
<!-- 					<div class="meal-item">
						<div class="meal-img">
							<img src="" alt="food">
						</div>
						<div class="meal-name">
							<h5></h5>
							<a href="#" class="recipe-btn">Get Recipe</a>
						</div>
					</div> -->

		<!-- 			<div class="meal-item">
						<div class="meal-img">
							<img src="chips.jpeg" alt="food">
						</div>
						<div class="meal-name">
							<h5>Potatos Chips</h5>
							<a href="#" class="recipe-btn">Get Recipe</a>
						</div>	
                      </div> -->
<!-- 
					<div class="meal-item">
						<div class="meal-img">
							<img src="chips.jpeg" alt="food">
						</div>
						<div class="meal-name">
							<h5>Potatos Chips</h5>
							<a href="#" class="recipe-btn">Get Recipe</a>
				    	</div>
    		         </div> -->
    		    </div>


    		      <div class="meal-details">
    		      	<button type="button" class="btn recipe-close-btn" id="recipe-close-btn">
    		      		<i class="fas fa-times">X</i>
    		      	</button>   
    		      	<div class="meal-deatils-content" id="mealDetailsContent">
    		 <!--      		<h2 class="recipe-title">Meal Name Here</h2>
    		      		<p class="recipe-category">Category Name</p>    		  
    		      		<div class="recipe-instruct">
    		      			<h3>Insrucrions:</h3>
    		      			<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		      			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		      			</p> 
    		      				      			
    		      		</div>
    		      		<div class="recipe-meal-img">
    		      			<img src="chips.jpeg" alt="">
    		      		</div>
    		      		<div class="recipe-link">
    		      			<a href="#" target="_blank" >Watch Video</a>
    		      		</div> -->
    		      	</div> 		      	
    		      </div>								
					
				
		</div>		
	</div>
<script src="main.js" type="text/javascript"></script>
</body>
</html>
