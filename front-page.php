<?php
/**
 * Front Page
 *
 * @package dcrcoffee
 */

get_header(); ?>
<?php global $more; $more = 0;  ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php 
					$args = array(
					'sort_order' => 'asc',
					'sort_column' => 'ID',
					'hierarchical' => 1,
				//	'exclude' => '',
					'include' => '9,12,62,70,15,18',
				//	'meta_key' => '',
				//	'meta_value' => '',
				//	'authors' => '',
				//	'child_of' => 0,
				//	'parent' => 0,
				//	'exclude_tree' => '',
				//	'number' => '',
				//	'offset' => 0,
					'post_type' => 'page',
					'post_status' => 'publish'
); 
$pages = get_pages($args);
foreach( $pages as $page ) {	
		
		$content = $page->post_content;
		// Get content parts
		$content_parts = get_extended( $content );
		if ( ! $content ) // Check for empty page
			continue;
		
	$content = apply_filters( 'the_content', $content );
	?>	<!-- <section id="<?php echo $page->ID; ?>" class="<?php echo $page->post_name; ?>"> <section class="<?php echo $page->post_name; ?>">
		<h1 class="section-header"><?php echo $page->post_title; ?></a></h1>
		<div class="section-entry"><?php echo $content_parts['main']; ?></div> THIS INCLUDES IDs and header, entry info -->
		<section class="<?php echo $page->post_name; ?>">
		<div class="<?php echo $page->post_name; ?>-content">
			<h1 class="section-title"><?php echo $page->post_title; ?></a></h1>
			<!-- <?php echo $content_parts['main']; ?> THIS DOESN'T WORK -->
			<?php echo $content; ?> 
		</div>
		</section>
	<?php
	}	
?> 
</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
