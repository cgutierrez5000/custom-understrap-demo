<?php
/**
 * The template for displaying all Project Posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/tsd3qan.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action( 'wp_body_open' ); 

	$project_image = get_field('project_image');
	$text_field    = get_field('text_field');

	?>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action( 'wp_body_open' ); ?>

<div class="single-project">
	<div class="inner d-flex flex-wrap">
		<div class="left-panel w-50">
			<img src="<?php echo $project_image['url']; ?>" 
			     alt="<?php echo $project_image['alt']; ?>"
				 class="">
		</div>
		<div class="right-panel w-50">
			<?php echo $text_field; ?>
		</div>
	</div>
</div>

</body>
	<?php wp_footer(); ?>   
</html>

