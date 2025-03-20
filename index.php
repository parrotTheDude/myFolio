<?php
	//Start the session
	session_start();

	//Access your result variables
	if (isset($_SESSION['result'])) {
		$result = $_SESSION['result'];
	} else {
		$result = '';
	}

	//Unset the useless session variable
	unset($_SESSION['result']);
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
			<section>
				<div class="picture"></div>
				<h1 class="title">welcome to my portfolio website</h1>
			</section>

			<nav class="navBar">
				<ul class="navList">
					<li class="navItem"><a href="https://github.com/parrotTheDude" target="_blank">git</a></li>
					<li class="navItem"><a href="https://www.linkedin.com/in/jacob-bowerman-47180a337/" target="_blank">linkedin</a></li>
					<li class="navItem"><a href="mailto:hello@jbowerman.com?subject=Website Enquire">email</a></li>
					<li class="navItem"><a href="/basicEventsWebsite/index.html" target="_blank">eventsWebsite</a></li>
					<li class="navItem"><a href="https://eviebowerman.com" target="_blank">evie</a></li>
					<li class="navItem"><a href="https://thatdisabilityadventurecompany.com.au/" target="_blank">tdac</a></li>
					<li class="navItem"><a href="https://bowermandigital.com/" target="_blank">bowerman digital</a></li>
				</ul>
			</nav>

			<section>
				<p class="title">jbowerman... also known as parrotTheDude</p>
			</section>
		</main>

		<footer>

		</footer>

		<!-- 100% privacy-first analytics -->
		<script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

		<script type="text/javascript">
			let contact = document.getElementById('contactBtn');
			let contactForm = document.getElementById('contactForm');

			contact.addEventListener('click', function(e){
			  contactForm.classList.toggle('is-open');
			});

			function smoothScroll(){document.querySelector("#contactForm").scrollIntoView({behavior:"smooth"})}

		</script>

	</body>
</html>