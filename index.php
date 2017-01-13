<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick - Web Designer and Developer</title>
	<link rel="stylesheet" href="css/main.css" data-all-devices>
</head>
<body>

<?php include("analyticstracking.php"); ?>

	<div id="container">

		<div id="hero" role="banner">
			
			<?php include("templates/nav.php"); ?>

			<div id="intro" class="content-section content-section--hero" role="section">
				<div class="row flex-row">
					<div class="col-9">
						<div class="content-section-content content-section-content--hero">
							<h2 class="content-section-item featured-project">Developing property business E&amp;C revolutionised their ability to manage and develop their portfolio of properties.</h2>
							<a href="/projects/eandc/eandc.php" class="btn btn-text text-grey btn-inline" role="button">View the E&amp;C Project to see how</a>
						</div>
					</div>
					<div class="col-4"></div>
					<div class="content-section-underlay">
						<img class="content-section-underlay-image in-viewport" src="ec.svg" alt="portfolio helper text"/>
					</div>
				</div>
				<!-- <div id="social-links">
                    <a href="https://dribbble.com/chris-swarbrick" role="button" target="_BLANK" class="btn-social dribbble">Dribbble Shots</a>
                    <a href="https://uk.linkedin.com/in/christopherswarbrick" role="button" target="_BLANK" class="btn-social linkedin">LinkedIn Profile</a>
                </div> -->      
            </div>
        </div>

        <?php include("templates/projects.php"); ?>

    </div>

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