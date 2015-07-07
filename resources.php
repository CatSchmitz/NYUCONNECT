<!doctype html>
<html>
<head>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64837526-1', 'auto');
  ga('send', 'pageview');

</script>

<meta charset="utf-8">

<title> NYU Connect | Resources </title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>

<body>
		<header> 

			 <span  class="nyu_title_heading"> <img src="img/NYU_torch.jpg"> <h1 style= "display:inline-block;">NYU-CONNECT</h1> </span>

			
			</header> 
			
				<div class="week_nav_title_holder">
					<div class="weekly_heading_holder weekly_heading_holder_week_1">
					 	<span class="week_heading">
					 		<h2>REFLECT</h2>
					 	</span>

					 	<span class="weekly_topic_heading weekly_topic_heading_week_1">
					 		<h2>RESOURCES TO GET US THERE </h2>
					 	</span>
				 	</div>
				

				 	<hr class="header_underline">
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
			$sql = "INSERT INTO resources (text_added, date_added) VALUES ('$post', NOW())";
			$result = @mysqli_query($db, $sql) or die('Query failed: ' . mysqli_error($db));
			
			//display confirmation 
			echo "<p class=\"alert_message\">Your post has been added! Thanks for contributing!</p>";
			
		}else{
			foreach($error as $value){
			echo "<div class=\"alert_message\">{$value}</div>";	
				
			}
			
		}
	}
	?>
    <p class="daily_heading"> How We're Getting Where We Want To Go </p> 
    <form method="post" action="resources.php"> 
    	
        	<textarea name="text_added" class="user_input_forms" placeholder="Post all of the resources that you've found helpful to your learning process! There are so many resources out there to help you accomplish what you want. Please include a short snippet of what the link will help others with."></textarea>
        <div class="button_holder"> 
		<input name="submit" type="submit" value="Post" class="btn" /> 
		</div> 
    </form>
    
    <?php
		$sql = "SELECT text_added, DATE_FORMAT(date_added,'%M %d, %Y') AS formatted_date FROM resources ORDER BY date_added DESC";
		$result = mysqli_query($db, $sql) or die('Query failed: ' . mysqli_error($db));
		while ($row = mysqli_fetch_assoc($result)) 
		{
			// Display shout
			echo "<div>";
			echo "<div>";
			
			echo "<p class=\"user_post\">{$row['text_added']}";
			echo "<span style=\"font-size:8px;\"><br>{$row['formatted_date']}<span>";
			echo " </p></div>";
			echo "</div>";
		}
	
	?>
    
    
</div>
			<div class="bottom_nyu_line">
					<div class="bottom_nav_holder">
						<ul>
						<li class="footer_nav"><a href="about.html">WHO WE ARE</a></li>
						<li class="footer_nav"><a href="index.html">COURSE HOME</a> | <a href="https://newclasses.nyu.edu/">CLASSES</a></li>
					
						
						<li class="footer_nav"><a href="dayOne.html">WEEK 1</a> | <a href="dayFour.html">WEEK 2</a> | <a href="daySeven.html">WEEK 3</a> | <a href="siteOverview.html">COURSE MAP</a></li>
						<li class="footer_nav"><a href="whatWeWantToLearn.php">WHAT WE WANT TO LEARN</a> | <a href="whereWeWantToGo.php">WHERE WE WANT TO GO</a> |  <a href="resources.php">RESOURCES TO GET US THERE</a></li>
						</ul>
					</div>

				</div>
				
				

</body>
</html>