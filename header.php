<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divergeai-22
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'divergeai-22' ); ?></a>

	<header>
      <div class="container">
        <nav class="nav-bar">
          <div class="nav-brand">
            <a href="index.html"
              ><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt=""
            /></a>
          </div>
          <ul class="nav-items">
            <li class="nav-item">
              <a href="index.html" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="services.html" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="projects.html" class="nav-link">Projects</a>
            </li>
            <li class="nav-item" id="dropdown-toggle">
              <a href="#" class="nav-link"
                >Pages <i class="fa-solid fa-caret-up"></i
              ></a>
              <div class="dropdown">
                <a href="faq.html" class="dd-link">FAQ</a>
                <a href="our-team.html" class="dd-link">Our Team</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="contacts.html" class="nav-link">Contact</a>
            </li>
            <a href="#" class="btn btn-dark header-btn px-5"
              >Let's Talk
              <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            </a>
          </ul>
          <i
            class="fa fa-bars"
            aria-hidden="true"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample"
          ></i>
          <i class="fa fa-times" aria-hidden="true"></i>
        </nav>

        <!-- Mobile menu -->
        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <div class="mobile-nav">
              <li class="mobile-nav-item">
                <a href="index.html" class="nav-link active">Home</a>
              </li>
              <li class="mobile-nav-item">
                <a href="about.html" class="nav-link">About</a>
              </li>
              <li class="mobile-nav-item">
                <a href="services.html" class="nav-link">Services</a>
              </li>
              <li class="mobile-nav-item">
                <a href="projects.html" class="nav-link">Projects</a>
              </li>
              <li class="mobile-nav-item">
                <a href="#" class="nav-link">Pages</a>
              </li>
              <li class="mobile-nav-item">
                <a href="contacts.html" class="nav-link">Contact</a>
              </li>
              <a href="#" class="btn btn-dark mobile-btn px-5"
                >Let's Talk
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Hero content -->
        <div class="hero row">
          <div class="hero-left col-md-6 col-12 mx-auto mb-4">
            <div class="hero-content-wrapper">
              <h6 class="hero-sub">Artificial intelligence & robotics</h6>
              <h2 class="hero-heading" style="font-size: 3vw">
                Get closer look how business develop in AI data analysis
              </h2>
              <p class="hero-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                nostrum consectetur iure reiciendis unde ipsa similique
                possimus.
              </p>
              <a
                href="#"
                class="btn header-btn px-5 btn-dark"
                style="max-width: 300px"
                >Discover more
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i
              ></a>
            </div>
          </div>
          <div class="hero-right col-md-6 col-12 mx-auto mb-4">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/images/hero-ai.png"
              alt=""
              class="img-fluid hero-img"
            />
          </div>
        </div>
      </div>
    </header>
