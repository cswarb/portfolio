<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick - Web Designer and Developer</title>
	<link rel="stylesheet" href="css/main.css" data-all-devices>
</head>
<body>
	<div id="container">

		<div id="hero" role="banner">
			
			<?php include("templates/nav.php"); ?>

		</div>

		<section id="posts" class="content-section" role="section">
			<div class="row flex-row">
				<div class="col-12">
					<h2 class="content-section-heading">Blog posts</h2>
				</div>
			</div>
			<div class="card-list col-offset-right-4">
				<div class="row flex-column">
					<a href="/posts/post-1/post.php" class="card row">
						<div class="col-6">
							<h1 class="card-row-title">Any time and for any amount of time</h1>
						</div>
						<div class="col-4">
							<h2 class="card-row-description">Tilr can be used to fill short-term unexpected openings.</h2>
						</div>
						<div class="col-2">
							<h2 class="card-row-meta">OCT 5.</h2>
							<h2 class="card-row-meta">2016</h2>
						</div>
					</a>
					<a href="/posts/post-2/post.php" class="card row">
						<div class="col-6">
							<h1 class="card-row-title">Skills, meet opportunity</h1>
						</div>
						<div class="col-4">
							<h2 class="card-row-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
						</div>
						<div class="col-2">
							<h2 class="card-row-meta">JUNE 4.</h2>
							<h2 class="card-row-meta">2016</h2>
						</div>
					</a>
					<a href="/posts/post-3/post.php" class="card row">
						<div class="col-6">
							<h1 class="card-row-title">Work that works for you</h1>
						</div>
						<div class="col-4">
							<h2 class="card-row-description">Provides on-demand opportunities.</h2>
						</div>
						<div class="col-2">
							<h2 class="card-row-meta">JAN 20.</h2>
							<h2 class="card-row-meta">2016</h2>
						</div>
					</a>
				</div>
			</div>
		</section>

	</div>

<script src="js/showads.js"></script>
<script>
window.onload = function() {
    var heroUnderlayImage = document.querySelector("#intro .content-section-underlay-image"),
        heroContentArea = document.querySelector(".content-section-content--hero"),
        mobileMenu = document.querySelector(".mobile-menu"),
        mobileMenuClose = document.querySelector(".navigation .close-nav"),
        nav = document.getElementsByTagName("nav")[0],
        body = document.getElementsByTagName("body")[0];

    heroContentArea.addEventListener("mouseover", function(){
         heroUnderlayImage.classList.remove("fadeOutUp");
         heroUnderlayImage.classList.add("fadeInDown");
    });

    heroContentArea.addEventListener("mouseout", function(){
         heroUnderlayImage.classList.remove("fadeInDown");
         heroUnderlayImage.classList.add("fadeOutUp");
    });

    mobileMenu.addEventListener("click", function(){
        nav.style.display = "flex";
        body.classList.add("fixed");
    });

    mobileMenuClose.addEventListener("click", function(){
        nav.style.display = "none";
        body.classList.remove("fixed");
    });

    function setHtml(elem, data, classes) {
        var i = 0,
            classArrayLength = classes.length || null;
        
        elem.innerHTML = data;

        if(classArrayLength) {
            for (i; i < classArrayLength; i++) {
                elem.classList.add(classes[i]);
            };
        };

        return elem;
    };

    //Determine if the user has an adblocker by adding a window variable in a script with the word 'ad', and test for it after load.
    // if(!window.canSeeAds) {
    //     body.appendChild(setHtml(document.createElement("div"), "Please allow ads on this website and refresh to view my social profiles.", ["alert-msg-bar", "adblocker"]));
    // };

    //Display a message based off the query var
    <?php if(isset($_GET["ref"])) :
        if($_GET["ref"] === "developer") { ?>

            body.appendChild(setHtml(document.createElement("div"), "Because you were referred with a special link, you can view my code samples page!", ["alert-msg-bar", "queryvars", "queryvars-developer"]));

        <?php } elseif($_GET["ref"] === "designer") { ?>

        <?php } else { ?>

        <?php }; ?>
        setTimeout(function(){
            document.querySelector(".alert-msg-bar.queryvars").style.opacity = 0;
            document.querySelector(".alert-msg-bar.queryvars").remove();
        }, 4000);
    <?php endif; ?>
    
};
</script>
</body>
</html>