<?php
	$blogID = $_GET['blog-number'];

  // Import variables and functions for accessing db:
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  // SQL gets the number of records
  $sql_statement = "
  SELECT title, description, content, image, author, dateCreated, lastModified, category, tag
  FROM blog 
  WHERE postId = $blogId";
  $blogs = $db_link->query($sql_statement) or die($db_link->error);
  $blog_row = $blogs->fetch_assoc();

  // Variable initalisation
  $id = $blog_row['postId'];

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
	    $page_title = 'Full Stack Developer | Jacob Bowerman';
	    $page_decription = "Welcome to my website! This is the place I keep all my projects and some fun things too!";
	    $page_name = '/';
	    include ('inc/head.php');
	    include ('inc/schema.php');
  	?>
	</head>
	
	<body>
		<header>
			
		</header>

		<main>
			<section class="blogTestContainer">
				<section class="blogTitleDiv">
					<h1><?php echo $foo; ?></h1>
					<p>this is just text to show how it might look when implimented onto a live website</p>
				</section>
				<!-- Displays all the panels -->
				<section class="blogDisplayPanel">

					<?php
						// SQL to fetch the events
		        $sql_statement = "
		        SELECT title, description, link, image, author, dateCreated
		        FROM blog 
		        ORDER BY postId ASC";

		        $users = $db_link->query($sql_statement) or die($db_link->error); 

						
	          while($user_row = $users->fetch_assoc()) {
        	?>

					<!-- Blog Panel -->
					<section class="blogPanel">
						<a class="blogLink" href="https://jbowerman.com/<?php echo $user_row['link'] ?>">
							<section class="blogImgContainer">
								<img src="img/<?php echo $user_row['image']; ?>">
							</section>
							<section class="blogText">
								<h2><?php echo $user_row['title']; ?></h2>
								<section class="blogDetails">
									<p>By <?php echo $user_row['author']; ?> | <?php echo substr($user_row['dateCreated'], 0, 11); ?></p>
								</section>
								<p><?php echo $user_row['description']; ?></p>
							</section>
						</a>
					</section>
					 <?php 
					 $dateVar = $user_row['dateCreated'];
					} ?>

				</section>
			</section>
		</main>

		<footer>

		</footer>

	</body>
</html>