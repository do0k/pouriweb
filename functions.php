<?php
// Attach Stylesheet
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap/bootstrap.css');
wp_enqueue_style('pw', get_stylesheet_directory_uri() . '/style.css');

// Attach Scripts
wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '3.2.1', 'false');
wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', '', '1.12.9', 'true');
wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', '', '4.1.1', 'true');
wp_enqueue_script('shards', get_stylesheet_directory_uri() . '/assets/js/shards.js', '', '1.0', 'true');
wp_enqueue_script('pw', get_stylesheet_directory_uri() . '/assets/js/pw.js', '', '1.0', 'true');