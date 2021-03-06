<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="viewport" content="width=640,user-scalable=no, minimal-ui">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href=http://www.juliedu.com/wp-content/themes/computer/article2.css?v=1">


</head>
<body>
<?php include("nav.php") ?>
<div class="main_content">
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			 <h2 class="biaoti"><?php the_title(); ?></h2>
			 <div class="entry"><?php the_content(); ?>
			 </div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php include('footer.php'); ?>
</body>
</html>
