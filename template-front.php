<?php
/*
Template Name: Front
*/

//if ( !has_action( 'shoestrap_page_header_override' ) )
//  get_template_part('templates/page', 'header');
//else
//  do_action( 'shoestrap_page_header_override' );
//
//if ( !has_action( 'shoestrap_content_page_override' ) )
//  get_template_part('templates/content', 'page');
//else
//  do_action( 'shoestrap_content_page_override' );


//  get_template_part('templates/page', 'header');
?>
 
<?php /*?><div class="hidden-md hidden-lg">
<?php get_template_part('templates/content', 'page'); ?>
</div>
<div class="hidden-xs hidden-sm">
<?php get_template_part('parts/tabber_2'); ?>
</div>
<?php */?>

<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/tabber_2'); ?>
