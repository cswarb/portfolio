<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick</title>
	<link rel="stylesheet" href="../../css/main.css">
</head>
<body>
	<div id="container" class="inverse">

		<div id="hero" class="inverse">
			
			<?php include("../../templates/nav.php"); ?>

			<div id="intro" class="content-section project-page">
				<div class="">
					<div class="col-12 center">
						<div class="project-title-art-container">
							<div class="project-title-art tight-line-height">
								<h2 class="super">Elliott &amp; Cooper</h2>
								<p class="project-floating-text">Elliott &amp; Cooper — 2016</p>
							</div>
						</div>
					</div>
				</div>
				<div class="details">
					<div class="row flex-row">
						<div class="col-4 center">
							<header>Description</header>
							<p>E&amp;C is a property management business based in Cheshire.</p>
						</div>
						<div class="col-4 center">
							<header>Technology</header>
							<p>It has been created using Laravel 4, jQuery, Blade HTML and CSS3. It is an adaptive design built from scratch.</p>
						</div>
						<div class="col-4 center">
							<header>Time</header>
							<p>Ut ullam, velit dolorem necessitatibus.</p>
						</div>
					</div>
				</div>
				<!-- <div id="social-links" class="project-page">
					<a href="#" class="btn-social btn-social-inverse twitter">Share on Twitter</a>
					<a href="#" class="btn-social btn-social-inverse facebook">Share on Facebook</a>
				</div> -->		
			</div>
		</div>

		<div id="about" class="post content-container-inverse">

			<div class="centered-row constrained-row">
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title">The Problem</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-row">
							<div class="col-12 no-margin">
								<div class="cards-list no-margin">
									<div class="row flex-column">
										<p class="content">E &amp; C's existing system was ad-hoc, and required a lot of time and effort to maintain. They required a stable and reliable solution that would allow them to develop their business.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>

			<figure class="project-image">
				<picture>
					<source
						media="(max-width: 1024px)"
						srcset="ec-1-small.jpg 1x,
								ec-1-small.jpg 2x">
					<source
						media="(min-width: 1024px)"
						srcset="ec-1.jpg 1x,
								ec-1-retina.jpg 2x">
					<img
						src="ec-1.jpg" alt="An example house"
						srcset="ec-1-retina.jpg 2x">
				</picture>
				<figcaption class="project-image-image-caption">Credit: Vita Vilcina</figcaption>
			</figure>

			<div class="centered-row constrained-row">
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title">The Solution</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-row">
							<div class="col-12 no-margin">
								<div class="cards-list no-margin">
									<div class="row flex-column">
										<p class="content">Our solution was to develop a custom administrative dashboard system which allowed them to manage and track properties through a strict aquisition, management and sales process.</p>

										<p class="content">There are several modules to the application, including the management screen, where a property ('case') can be created and updated. Other modules have been created to help the user of the system through the administration of different parts of the management process. The main goal is the application is to make the user fully aware of every aspect of each case, and allow them to be reminded and prompted of things in an order in which they define.</p>

										<p class="content">I created the UI design using Photoshop CC, based off a set of wireframes. I iterated back and forth on certain elements, and also used design in browser techniques to help speed up the workflow of some of these problem items, such as tabs. I also helped define the user experience of some of the screens of the application - this included understanding the needs of the user in relation to a specific module, mapping the user flow, getting user feedback and iterating the design.</p>

										<p class="content">Most of the front end animations, network requests and event behaviour were handled by jQuery. Due to the amount of AJAX requests put through jQuery, it was very important to keep in mind the performance of the JavaScript. We cached elements where necessary, minified, and abstracted methods when needed.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>

			

			<figure class="project-image">
				<picture>
					<source
						media="(max-width: 1024px)"
						srcset="ec-2-small.jpg 1x,
								ec-2-small.jpg 2x">
					<source
						media="(min-width: 1024px)"
						srcset="ec-2.jpg 1x,
								ec-2-retina.jpg 2x">
					<img
						src="ec-2.jpg" alt="An example house"
						srcset="ec-2-retina.jpg 2x">
				</picture>
				<figcaption class="project-image-image-caption">Credit: Siddharth Kothari</figcaption>
			</figure>

			<div class="centered-row constrained-row">
				<div class="row flex-row content-block">
					<div class="col-12 no-margin-top">
						<p class="content-separator-text" data-pullquote="">We’re defined by ambition, restlessness, resilience, unity, innovation, warmth and respect; for ourselves and for others. We don’t stand on ceremony and certainly don’t stand and wait for things to happen. We’re influential, in touch, intrepid and incomparable. And on a good day, we’re untouchable.</p>
					</div>
				</div>
			</div>


		</div>

		<div class="project-meta">
			<a href="/#posts" class="btn btn-text text-grey btn-text-large inverse">View All Projects</a>
		</div>

	</div>


</body>
</html>