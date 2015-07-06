<!doctype html>
<html>
<head>
<meta charset="utf-8">


</head>

<body>

	<?php
	include('config.php');

	//connecting to the database and using credentials in the form of a variable
	$db = mysqli_connect (
	$db_host,
	$db_user,
	$db_password,
	$db_name) OR die ('could not connect to mySQL: ' . mysqli_connect_error());
	
	

	
	//check for a shout submission 
	if (isset($_POST['submit'])) {
		//empty error array
		$error=array();
		
		//check for a shout 
		if(empty($_POST['text_added']))
		{
			$error[] = 'Text is required.';
		}
		
	//if there are no other errors, insert shout into database. Otherwise display errors 
	
		if (sizeof($error) == 0)
		{
			//clean data
			$post = mysqli_real_escape_string($db, $_POST['text_added']);
			
			//insert post
			$sql = "INSERT INTO mood_post (text_added, date_added) VALUES (null, '$post', NOW())";
			$result = @mysqli_query($db, $sql) or die('Query failed: ' . mysqli_error($db));
			
			//display confirmation 
			echo "<p class=\"text-success\">Your post has been added</p>";
			
		}else{
			foreach($error as $value){
			echo "<div class=\"alert alert-danger\">{$value}</div>";	
				
			}
			
		}
	
		
	
	}
	
	?>
    
    <form method="post" action="index.php" style="margin-bottom: 25px"> 
    	<div class="form-group"> 
        	<textarea name="text_added" placeholder="What do you want to say?" class="form-control"></textarea>
        </div> 
		<input name="submit" type="submit" value="Post" class="btn btn-primary" /> 
    </form>
    
    <?php
		$sql = "SELECT text_added, DATE_FORMAT(date_added,'%M %d, %Y') AS formatted_date FROM mood_post ORDER BY post_date DESC";
		$result = mysqli_query($db, $sql) or die('Query failed: ' . mysqli_error($db));
		while ($row = mysqli_fetch_assoc($result)) 
		{
			// Display shout
			echo "<div class=\"panel panel-default\">";
			echo "<div class=\"panel-body\">";
			
			echo "<p>{$row['text_added']}</p>";
			echo "<span class=\"text-muted\">{$row['formatted_date']}<span>";
			echo "</div>";
			echo "</div>";
		}
	
	
	?>
    
    
</div>


</body>
</html>