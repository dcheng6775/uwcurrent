<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="icon" type="image/x-icon" href="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>">
</head>
<body <?php body_class(); ?>>

<?php if ( is_front_page() ) : ?>
<div class="modal fade" id="welcomeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 shadow-lg" style="border-radius: 0;">
      <div class="modal-body text-center p-5">
        <h1 class="display-4 fw-bold mb-4">Welcome to UW Current</h1>
        <p class="lead mb-5">Your source for student-led health journalism at the University of Waterloo.</p>
        
        <div class="d-grid gap-3 d-md-block">

          <a href="<?php echo site_url('/about-us'); ?>" class="btn btn-primary btn-lg rounded-0 px-5 me-md-2">
            What is UW Current?
          </a>
          <button type="button" class="btn btn-outline-dark btn-lg rounded-0 px-5"  data-bs-dismiss="modal">
            Continue to Homepage
          </button>
          

        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!--Header part 1 - logo/title/etc -->
<nav class="navbar bg-body-tertiary py-3">
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center w-100">
            
            <a class="navbar-brand d-flex align-items-center text-center text-md-start mb-3 mb-md-0" href="<?php echo site_url(); ?>">
                <img src="<?php echo get_theme_file_uri('/assets/images/logo.png'); ?>" alt="Company Logo" width="60" height="auto" class="d-inline-block align-text-top">
                <div class="brand-text ms-2">
                    <div class="brand-title">
                        <span class="brand-title-first-half" style="font-weight: bold; font-size: clamp(1.2rem, 5vw, 2rem);">WATERLOO</span>
                        <span class="brand-title-second-half" style="font-style: italic; font-size: clamp(1.2rem, 5vw, 2rem);"> CURRENT </span>
                    </div>
                    <div class="brand-subtitle d-none d-sm-block">
                        <span class="brand-subtitle-first-half" style="font-size: 0.8rem;">The University of Waterloo’s first health-focused news publication &nbsp;&nbsp;&nbsp;</span>
                        <span class="brand-subtitle-second-half" style="font-size: 0.8rem;"> Est. 2025 </span>
                    </div>
                </div>
            </a>

            <div class="header-logos d-flex align-items-center justify-content-center">
              <a href="https://www.instagram.com/uwaterloocurrent" target="_blank" aria-label="Instagram" style="margin: 0 0.8rem;">
                <img src="<?php echo get_theme_file_uri('/assets/images/insta.png'); ?>" alt="Instagram"  style="height: 1.2rem;">
              </a>
              <a href="mailto:uwaterloocurrent@gmail.com" target="_blank" aria-label="Email" style="margin: 0 0.8rem;">
                <img src="<?php echo get_theme_file_uri('/assets/images/email.png'); ?>" alt="Email" style="height: 1.2rem;">
              </a>
              <a href="https://www.forms.google.com" target="_blank" class="btn btn-outline-dark btn-sm" style="margin-left: 0.5rem; border-radius: 20px; padding: 5px 15px; border-color: #ffffff; color: #ffffff; background-color: transparent;"> Subscribe </a>        
            </div>

        </div>
    </div>
</nav>

<!-- Header part 2 - Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-top: 0.3rem;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-around w-100">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="<?php echo site_url('/category/news/'); ?>">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/category/opinion/'); ?>">Opinion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/category/feature/'); ?>">Feature</a>
        </li>
        <div class="vr d-none d-lg-block mx-3 my-2" style="font-size: 25px; width: 3px; background-color: #ffffff; opacity: 1;"></div>        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/meet-the-team'); ?>">Meet the Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/get-involved'); ?>">Get Involved</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
