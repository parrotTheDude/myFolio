<?php
	$blogID = $_GET['blog-number'];

  // Import variables and functions for accessing db:
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  // SQL gets the number of records
  $sql_statement = "
  SELECT title, pageTitle, description, link, content, image, author, dateCreated, category, tag
  FROM blog 
  WHERE postId = $blogID";
  $blogs = $db_link->query($sql_statement) or die($db_link->error);
  $blog_row = $blogs->fetch_assoc();

  // Stores the events information
  $title = $blog_row['title'];
  $page_title = $blog_row['pageTitle'];
  $page_decription = $blog_row['description'];
  $content = $blog_row['content'];
  $image = $blog_row['image'];
  $link = $blog_row['link'];
  $author = $blog_row['author'];
  $dateCreated = substr($blog_row['dateCreated'], 0, 11);
  $category = $blog_row['category'];
  $tag = $blog_row['tag'];

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
	    $page_name = "/ . $link";
	    include ('inc/head.php');
	    include ('inc/schema.php');
  	?>
	</head>
	
	<body>
		<header>
			
		</header>

		<main>
			<div id="progress-bar"></div>
			<section class="blogTestContainer" id="noPad">
				<section class="mainBlogTitleContainer">
					<section class="imgBlogContainer">
						<img src="img/<?php echo $image; ?>">
					</section>
					<section class="blogMainTitleDiv">
						<h1 class="blogTitle"><?php echo $title; ?></h1>
						<p><?php echo $author . " | " . $dateCreated; ?></p>
					</section>
				</section>
				<section class="blogContentContainer">
					<section class="mainBlog">
						<section class="paragraphSection">
							<h2>Disability Day Programs: What are they and how can I get involved?</h2>
							<p>If you’re someone with a disability or supporting a loved one, you’ve probably heard about disability day programs. For individuals with disabilities, finding meaningful ways to connect, grow, and thrive is essential. That is why it is important to find programs that focus on helping people grow, make friends, and feel included in their community.</p>
							<p>Day programs should provide fun activities for disabled adults. They aim to help improve practical and social skills. While also encouraging independence and supporting mental well-being. Let’s explore what these programs are, why they matter, and how they make a lasting difference.</p>
						</section>
						<section class="paragraphSection">
							<h2>What Are Disability Day Programs?</h2>
							<p>Disability day programs are services that help people with disabilities live more independent and fulfilling lives. These programs focus on fostering personal growth through engaging activities and skill-building opportunities.</p>
							<p>Participants can expect a wide range of experiences, from <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/lifeskills">life skills</a> training to <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/group-activities">social outings</a> and creative workshops. By adding fun activities into the daily schedule, these programs create a balance of enjoyment and learning.</p>
							<p>For those in Victoria, our disability day programs in Melbourne provide tailored, local solutions for NDIS participants. We've designed out programs to work with NDIS plans to ensure our activites are fun and accessable to all.</p>
						</section>

						<section class="imgContainerArticle">
							<img src="img/<?php echo $image; ?>">
							<p class="imgLabel">Day trip in Melbourne</p>
						</section>

						<section class="paragraphSection">
							<h2>Why Are Day Programs Important?</h2>
							<p>Disability day services do more than just offer activities. They create a safe and welcoming space for individuals to thrive. The programs are essential for:</p>
							<h3>Promoting Personal Growth:</h3>
							<p>Promoting Personal Growth: Participants learn important <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/lifeskills">life skills</a> like cooking, budgeting, and using public transport. These skills help them become more independent.<p>
							<h3>Building Social Skills:</h3>
							<p>Through <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/group-activities">group activities</a>, individuals develop communication and skills that foster lasting relationships.</p>
							<h3>Supporting Mental Health:</h3>
							<p>Engaging in creative and fun activities boosts emotional well-being and helps participants feel more connected to their community.</p>
							<h3>Encouraging Community Engagement:</h3>
							<p>Outings to parks, cultural events, and other attractions allow participants to interact with their surroundings, <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/one-to-one">breaking down barriers to inclusion.</a></p>
							<p>By focusing on these areas, inclusive day programs for disabilities provide a holistic approach to improving quality of life.</p>
						</section>


						<section class="paragraphSection">
							<h2>What Activities Are Included in Day Programs?</h2>
					    <p>The heart of any great program lies in its activities. Day programs for adults with disabilities provide many fun and useful activities. These programs aim to meet the different needs of each participant.</p>
					    <p>Skill Development Workshops are a key component, teaching practical skills like meal preparation, financial management, and gardening. These activities empower participants to take charge of their daily lives and build confidence in their abilities.</p>
					    <p>Fun activities like sports, group games, and fitness sessions help people stay active and healthy. They also provide fun and enjoyment.</p>
					    <p>Creative Arts sessions offer a way for people to express themselves. Participants can explore art, music, and drama in a friendly environment.</p>
					    <p>If you enjoy exploring, community outings to local attractions or cultural events let you connect with others. These outings are essential for building confidence and independence.</p>
					    <p>Finally, social groups encourage interaction, friendship-building, and a sense of belonging, ensuring participants feel valued and included.</p>
					  </section>

					  <section class="imgContainerArticle">
							<img src="img/<?php echo $image; ?>">
							<p class="imgLabel">Snow trip</p>
						</section>

						<section class="paragraphSection">
					    <h2>Choosing the Best Day Program for You</h2>
					    <p>Finding the right day program can feel overwhelming, but focusing on a few key factors can help you make the best choice. This could be improving independence, building social skills, or joining activities for adults with disabilities.</p>

					    <p>Consider the variety of activities offered. A program that combines fun activities with skill development ensures participants enjoy their time while learning valuable lessons.</p>

					    <p>The program’s environment is equally important. Look for a welcoming, inclusive space with experienced support workers who provide personalized care and guidance.</p>

					    <p>Finally, make sure that your NDIS funding is eligible to ensure it is affordable and that it aligns with your NDIS plan.</p>
					  </section>


						<section class="paragraphSection">
					    <h2>The Role of Support Workers</h2>
					    <p>Our programs would be nothing without our amazing team of support workers who ensure each participant feels supported. These professionals work closely with individuals to facilitate activities, provide guidance, and celebrate every achievement, no matter how small.</p>

					    <p>Support workers are super important for providing a sense of safety and encouragement, making them a vital part of the success of disability day programs Melbourne and beyond.</p>
				  	</section>

				  	<section class="imgContainerArticle">
							<img src="img/<?php echo $image; ?>">
							<p class="imgLabel">iFly Day Trip</p>
						</section>

						<section class="paragraphSection">
					    <h2>A Lasting Impact</h2>
					    <p>The benefits of disability day programs extend far beyond the participants themselves. These services contribute to a more inclusive society by promoting understanding and acceptance within the local community. They empower individuals to break down barriers, embrace new opportunities, and build fulfilling lives.</p>

					    <p>Whether you’re exploring NDIS day programs, searching for activities for disabled adults, or looking to improve mental health and <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/one-to-one">independence</a>, these programs provide a supportive path forward.</p>

					    <p>At TDAC, we believe in creating opportunities for growth, connection, and empowerment. We are trying to provide the best disability day programs in Victoria. If you're interested in exploring our programs, <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/group-activities">check out our group activities today!</a></p>
					    <p>For more information, <a class="articleLink" href="https://thatdisabilityadventurecompany.com.au/contact">head over to our contact page to get in touch today!</a></p>
					  </section>
					</section>
					<section class="sideChannel">
						<p>Section for the contents and the authors? </p>
					</section>
				</section>
			</section>
			<button class="scrollToTopBtn">☝️</button>
		</main>

		<footer>
			
		</footer>

	</body>
	<script type="text/javascript">
		// Progress bar JS
		let processScroll = () => {
		  let docElem = document.documentElement, 
		    docBody = document.body,
		    scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
		      scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) - window.innerHeight,
		    scrollPercent = scrollTop / scrollBottom * 100 + '%';
		  
		  // console.log(scrollTop + ' / ' + scrollBottom + ' / ' + scrollPercent);
		  
		    document.getElementById("progress-bar").style.setProperty("--scrollAmount", scrollPercent); 
		}
		document.addEventListener('scroll', processScroll);


		// We select the element we want to target
		var target = document.querySelector("footer");

		var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
		var rootElement = document.documentElement;

		// Next we want to create a function that will be called when that element is intersected
		function callback(entries, observer) {
		  // The callback will return an array of entries, even if you are only observing a single item
		  entries.forEach((entry) => {
		    if (entry.isIntersecting) {
		      // Show button
		      scrollToTopBtn.classList.add("showBtn");
		    } else {
		      // Hide button
		      scrollToTopBtn.classList.remove("showBtn");
		    }
		  });
		}

		function scrollToTop() {
		  rootElement.scrollTo({
		    top: 0,
		    behavior: "smooth"
		  });
		}
		scrollToTopBtn.addEventListener("click", scrollToTop);

		// Next we instantiate the observer with the function we created above. This takes an optional configuration
		// object that we will use in the other examples.
		let observer = new IntersectionObserver(callback);
		// Finally start observing the target element
		observer.observe(target);

	</script>
</html>