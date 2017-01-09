<?php 
	if(isset($_SERVER["REQUEST_URI"])){
		$current_page = $_SERVER["REQUEST_URI"]; 
	};
?>

<div class="row flex-row navigation-area">
	<div class="col-4">
		<a href="/" class="site-icon" role="logo">
			<span>chris swarbrick</span>
		</a>
		<!-- <h1 class="site-title">Title</h1> -->
	</div>
	<div class="col-8">
		<div class="mobile-menu" role="menu"></div>
		<!-- Icon by Pixel Buddha from flaticon.com -->
		<nav class="navigation" role="navigation">
			<div class="close-nav" role="button">X</div>
			<ul class="nav-list" role="list">
				<li class="nav-list-item" role="listitem"><a class="<?php echo $current_page === "/" ? "active" : ""; ?>" href="/">Home</a></li>
				<li class="nav-list-item" role="listitem"><a class="<?php echo $current_page === "/projects" ? "active" : ""; ?>" href="/projects">Projects</a></li>
				<li class="nav-list-item" role="listitem"><a class="<?php echo $current_page === "/blog" ? "active" : ""; ?>" href="/blog">Blog</a></li>
				<li class="nav-list-item" role="listitem"><a class="<?php echo $current_page === "/about" ? "active" : ""; ?>" href="/about">About &amp; Contact</a></li>
				<?php if(isset($_GET["ref"]) && $_GET["ref"] === "developer") : ?>
					<li class="nav-list-item" role="listitem"><a class="<?php echo $current_page === "/code-samples" ? "active" : ""; ?>" href="/code-samples">Code Samples</a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</div>
</div>