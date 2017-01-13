<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chris Swarbrick</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="container">

		<div id="hero">
				
			<?php include("templates/nav.php"); ?>

			<div id="about" class="centered-row constrained-row">
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top introduction-info">
						<h3 class="title">Chris Swarbrick <span class="monospace block small-margin-top">Web Designer &amp; Developer.</span></h3>
						<a href="https://uk.linkedin.com/in/christopherswarbrick" role="button" target="_BLANK" class="btn btn-text text-grey inline-block linkedin">LinkedIn</a>
						<a href="https://dribbble.com/chris-swarbrick" role="button" target="_BLANK" class="btn btn-text text-grey inline-block dribbble">Dribbble</a>
					</div>
					<div class="col-8 no-margin-top">
						<div class="col-12 no-margin-top">
							<p class="grey"><span class="color-light">Senior Front-end Developer at <em>Localstars Ltd</em>.</span> Over 4 years experience in Web Design &amp; Development solutions working with Clients and Product Designers, for large and small businesses.</p>
						</div>
						<div class="col-6 no-margin">
							<h3 class="title light">Skills, Tools &amp; Framework Knowledge</h3>
						</div>
						<div class="row flex-row flex-column-small">
							<div class="col-6 small-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— HTML</li>
									<li class="info-list-item">— SASS, CSS &amp; methodologies</li>
									<li class="info-list-item">— JavaScript + TypeScript</li>
									<li class="info-list-item">— jQuery</li>
									<li class="info-list-item">— AngularJS 1.x</li>
									<li class="info-list-item">— Wordpress</li>
									<li class="info-list-item">— Photoshop/Illustrator CS + CC &amp; Lightroom 4+</li>
									<li class="info-list-item">— Cross Browser Compatibility &amp; testing</li>
								</ul>
							</div>
							<div class="col-6 small-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— Grunt + Gulp</li>
									<li class="info-list-item">— Git</li>
									<li class="info-list-item">— Sourcetree</li>
									<li class="info-list-item">— Agile Methodology</li>
									<li class="info-list-item">— Karma &amp; Jasmine testing</li>
									<li class="info-list-item">— UX Design (User testing, prototyping, analytics and analysis)</li>
									<li class="info-list-item">— UI Design (Typography, visual design, colour, layout, component based design)</li>
									<li class="info-list-item">— Style guides</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title light">Certifications &amp; Mentions</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-row">
							<div class="col-6 no-margin-top">
								<ul class="info-list">
									<li class="info-list-item">— Adobe Photoshop with Visual Communication</li>
								</ul>
							</div>
							<div class="col-6">
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-row staggered-row content-block">
					<div class="col-4 no-margin-top">
						<h3 class="title light">Contact</h3>
					</div>
					<div class="col-8 no-margin-top">
						<div class="row flex-column align-start">
							<!-- <form action="">							
								<div class="col-6 no-margin-top">
									<label for="name">Your Name</label>
									<input type="text" placeholder="e.g. Jeff S">

									<label for="Enquiry">Enquiry</label>
									<input type="text" placeholder="e.g. Web Design">
								</div>
								<div class="col-6">
									<label for="">Message</label>
									<div class="textarea">
										<textarea name="" id="" placeholder="e.g. How do I rotate 360 in CSS..."></textarea>
										<span class="resize-node"></span>
									</div>
								</div>
							</form> -->
							<div class="col-12 full-width">
								<div class="email-component">
									<input class="email-text-input inline-block" value="chris@chrismakesweb.co.uk">
									<button type="button" id="copy-btn" class="btn btn-inline-block btn-text text-white inline-block">Copy Email</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<script>
window.onload = function() {
	var copyButton = document.getElementById("copy-btn"),
		emailField = document.querySelector(".email-text-input"),
		emailCopyContainer = document.querySelector(".email-component");

	copyButton.addEventListener("click", function(){
		copyButton.setAttribute("disabled", "disabled");
		var emailText = emailField.select();
		
		try {
			var successful = document.execCommand('copy'),
				msg = successful ? 'Copied successfully' : 'Could not copy';

			emailCopyContainer.parentNode.appendChild(setHtml(document.createElement("p"), msg, ["copy-msg"]));

			setTimeout(function(){
				var para = findChildParagraph(emailCopyContainer.parentNode, "copy-msg");
				copyButton.setAttribute("disabled", false);
				emailCopyContainer.parentNode.removeChild(para);
			}, 1250);
		} catch (err) {
			emailCopyContainer.parentNode.appendChild(setHtml(document.createElement("p"), "Unable to Copy - Your browser does not support this action", []));
			setTimeout(function(){
				var para = findChildParagraph(emailCopyContainer.parentNode, "copy-msg");
				emailCopyContainer.parentNode.removeChild(para);
			}, 1250);
		};
	});

	function findChildParagraph(parent, classToFind) {
		var childNodes = parent.childNodes,
			i = 0;
		for(i; i < childNodes.length; i++) {
            if(childNodes[i].className == classToFind) {
            	return childNodes[i];
            };
        };
	};

    var mobileMenu = document.querySelector(".mobile-menu"),
        mobileMenuClose = document.querySelector(".navigation .close-nav"),
        nav = document.getElementsByTagName("nav")[0],
        body = document.getElementsByTagName("body")[0];

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