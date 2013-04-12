<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Official Website of Troy United Soccer Club - Blog</title>

<?php include('../header.php') ?>
<!-- Begin Main Content -->
	<div class="sixteen columns maincontent row">
		<section id="blog">
        	<?php
					require('../blog/wp-blog-header.php');
			?>

			<?php
            $posts = get_posts('numberposts=3&order=ASC&orderby=post_title');
            foreach ($posts as $post) : start_wp(); ?>
            <?php the_date(); echo "<br />"; ?>
            <?php the_title(); ?>    
            <?php the_content(); ?> 
            <?php
            endforeach;
            ?>
            
        	<br class="clear" />
        
        </section>
	</div>
	<br class="clear" />
<!-- End Main Content -->
<?php include('../footer.php') ?>
