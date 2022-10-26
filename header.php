<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" class="img-responsive">
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            
            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu_principal',
                                    'menu_class' => 'nav d-flex justify-content-between',
                                )
                            );
                        ?>
        </div>
    </div>

    <div class="site-header">
        <nav class="navegacion">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col-md-8">
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

