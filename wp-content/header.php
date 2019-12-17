<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php boldthemes_theme_data(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151905398-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151905398-1');
</script>

<?php
if(is_front_page()){
	
}else{
	?>
	<style>
		.btLightAlternateHeader.btMenuHorizontal:not(.btBelowMenu) .mainHeader{
    background-image: url(https://evisa-esta.us.com/wp-content/uploads/2019/11/bginnerpge.png);
}
	</style>
	<?php
}
	boldthemes_set_override();
	boldthemes_header_init();
	boldthemes_header_meta();

	$body_style = '';

	$page_background = boldthemes_get_option( 'page_background' );
	if ( $page_background ) {
		if ( is_numeric( $page_background ) ) {
			$page_background = wp_get_attachment_image_src( $page_background, 'full' );
			$page_background = $page_background[0];
		}
		$body_style = ' style="background-image:url(' . $page_background . ')"';
	}

	$header_extra_class = ''; 

	if ( boldthemes_get_option( 'boxed_menu' ) ) {
		$header_extra_class .= 'gutter ';
	}

	wp_head(); ?>
	
</head>

<body <?php body_class(); ?> data-autoplay="<?php echo intval( boldthemes_get_option( 'autoplay_interval' ) ); ?>" <?php echo wp_kses_post( $body_style ); ?>>

	<?php 

echo boldthemes_preloader_html(); ?>

<div class="btPageWrap" id="top">

<style type="text/css">
/* The alert message box */
.alert {
    padding: 5px;
    background-color: #000000; /* Black */
    color: white;
    margin-bottom: 1px;
      text-align: center;
}
</style>
	
<?php if (is_front_page()) { ?>
    <header class="mainHeader btClear <?php echo esc_attr( $header_extra_class ); ?>">
		
        <div class="port">
			<?php if ( ! boldthemes_get_option( 'top_tools_in_menu' ) ) echo boldthemes_top_bar_html( 'top' ); ?>
			<div class="btLogoArea menuHolder btClear">
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<span class="btVerticalMenuTrigger">&nbsp;<?php echo boldthemes_get_icon_html( 'fa_f0c9', '#', '', 'btIcoDefaultType' ); ?></span>
					<span class="btHorizontalMenuTrigger">&nbsp;<?php echo boldthemes_get_icon_html( 'fa_f0c9', '#', '', 'btIcoDefaultType' ); ?></span>
				<?php } ?>
<div class="alert">
  		<b>Please Note:</b> evisa-esta.us.com is a private service, and not associated with the US Government.
</div>
				<div class="logo">
					<span>
						<?php // boldthemes_logo( 'header' ); ?>
						<a href="https://evisa-esta.us.com/"><img class="logoimg" src="https://evisa-esta.us.com/wp-content/uploads/2019/11/esta.png"></a>
					</span>
				</div><!-- /logo -->
				<?php 
					if ( boldthemes_get_option( 'menu_type' ) == 'hLeftBelow' || boldthemes_get_option( 'menu_type' ) == 'hRightBelow' ) {
						echo boldthemes_top_bar_html( 'menu-half' );
						echo '</div><!-- /menuHolder -->';
						echo '<div class="btBelowLogoArea btClear">';
					}
				?>
				<div class="menuPort">
						<?php if ( boldthemes_get_option( 'top_tools_in_menu' ) ) echo boldthemes_top_bar_html( 'menu' ); ?>
					<nav>
						<?php boldthemes_nav_menu(); ?>
					</nav>
				</div><!-- .menuPort -->
			</div><!-- /menuHolder / btBelowLogoArea -->
		</div><!-- /port -->
	</header><!-- /.mainHeader -->
	<?php } else { ?>
		<header class="non-menu-header">
		<div class="alert">
  			<b>Please Note:</b> evisa-esta.us.com is a private service, and not associated with the US Government.
		</div>
			<div class="header-content">
				<div class="logo">
					<span>
						<?php // boldthemes_logo( 'header' ); ?>
						<a href="https://evisa-esta.us.com/"><img class="logoimg" src="https://evisa-esta.us.com/wp-content/uploads/2019/11/esta.png" ></a>
					</span>
				</div><!-- /logo -->
				<div class="links">
					<a href="<?php echo site_url('/'); ?>" class="header-links">Home</a>
					<a href="<?php echo site_url('/'); ?>" class="header-links">About ESTA</a>
					<a href="<?php echo site_url('/'); ?>" class="header-links">FAQ</a>
					<a href="<?php echo site_url('/'); ?>" class="header-links">Support</a>
					<a href="<?php echo site_url('/'); ?>" class="header-links">Services</a>
					<a href="" class="header-applyButton">Apply for ESTA</a>
				</div>
			</div>
		</header>	
	<?php } ?>
	<div class="btContentWrap btClear">
		<?php boldthemes_header_headline( array( 'breadcrumbs' => true ) ); ?>
		<?php if ( BoldThemesFramework::$page_for_header_id != '' && ! is_search() ) { ?>
			<?php
				$content = get_post( BoldThemesFramework::$page_for_header_id );
				$top_content = $content->post_content;
				if ( $top_content != '' ) {
					$top_content = do_shortcode( $top_content );
				}
				echo '<div class = "btBlogHeaderContent">' . $top_content . '</div>';
			?>
		<?php } ?>
		<div class="btContentHolder">
			
			<div class="btContent">
			