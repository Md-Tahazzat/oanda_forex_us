<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ondaforexus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- SEO META TAGS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="OANDAFOREX US a crypto investment plateform" />
    <meta name="keywords" content="OANDAFOREX US a crypto investment plateform" />
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/yXmpbj5PdX0qQkFfmYLo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/yXmpbj5PdX0qQkFfmYLo.png" type="image/x-icon" />
    <!-- OG Tags -->
    <meta property="og:title" content="OANDAFOREX US a crypto investment plateform" />
    <meta property="og:description" content="OANDAFOREX US a crypto investment plateform" />
    <meta property="og:type" content="OANDAFOREX US a crypto investment plateform" />
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>images/yXmpbj5PdX0qQkFfmYLo.png" />
    <meta property="og:site_name" content="OANDAFOREX US a crypto investment plateform" />

	<!-- TODO: have to add this dynamically -->
	 <!-- BOOTSTRAP-REBOOT MIN CSS -->
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap-reboot.min.css" />
    <!-- BOOTSTRAP MIN CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" />
    <!-- ANIMATE MIN CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css" />
    <!-- LISTTOPIE CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/jquery.listtopie.css" />
    <!-- MAIN MIN CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.min.css" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <!-- PRELODER START -->
 <!-- <div id="preloder">
      <div class="preloder__ripple">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
</div> -->
    <!-- PRELODER END -->
    <div class="wrapper">
      <header class="header @bgColor" id="header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-10 col-md-3">
              <a href="https://oandaforexus.com/" class="logo">
                <img style="max-height:60px"
                  src="<?php echo get_template_directory_uri();?>/images/yXmpbj5PdX0qQkFfmYLo.png"
                  alt="CryptoCon"
                  class="logo__img"/>
              </a>
            </div>
            <div class="d-none d-md-block col-md-7">
              <nav class="menu">
                <ul class="menu__list d-flex justify-content-center">
                  <li class="menu__item">
                    <a href="#intro" class="menu__link"> Home </a>
                  </li>
                  <li class="menu__item">
                    <a href="#about" class="menu__link"> About </a>
                  </li>
                  <li class="menu__item">
                    <a href="#features" class="menu__link"> Features </a>
                  </li>
                  <li class="menu__item">
                    <a href="#blog" class="menu__link"> Blog </a>
                  </li>
                  <li class="menu__item">
                    <a href="#team" class="menu__link"> Team </a>
                  </li>
                  <li class="menu__item">
                    <a href="#questions" class="menu__link"> FAQ </a>
                  </li>
                  <li class="menu__item">
                    <a href="#connect" class="menu__link"> Contacts </a>
                  </li>
                                    <li class="menu__item">
                    <a href="register.html" class="menu__link"> Register </a>
                  </li>
                                  </ul>
              </nav>
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center">
                                            <a href="<?php echo get_home_url(); ?>/sign-in"  class="sign-in-open _btn d-none d-md-block">Sign In</a>
                                  <button class="hamburger d-md-none">
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <div class="mobile-menu">
          <div class="mobile-menu__body">
            <div class="mobile-menu__close"></div>
            <div class="mobile-menu__title">Menu</div>
            <nav class="mobile-menu__nav">
              <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                  <a href="#intro" class="mobile-menu__link"> Home </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#about" class="mobile-menu__link"> About </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#features" class="mobile-menu__link"> Features </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#blog" class="mobile-menu__link"> Blog </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#team" class="mobile-menu__link"> Team </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#questions" class="mobile-menu__link"> FAQ </a>
                </li>
                <li class="mobile-menu__item">
                  <a href="#connect" class="mobile-menu__link"> Contacts </a>
                </li>
                
                  <li class="mobile-menu__item">
                  <a href="register.html" class="mobile-menu__link"> Sign Up </a>
                </li>
                              </ul>
            </nav>
                                <a href="signin.html"  class="sign-in-open _btn ">Sign In</a>
                          </div>
        </div>
      </header>