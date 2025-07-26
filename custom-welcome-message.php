<?php
/*
Plugin Name: Custom Welcome Message
Description: A simple shortcode plugin to display a welcome message.
Version: 1.0
Author: Manasi Singh
*/

function cwm_register_shortcode() {
    return '<p>Welcome to our website! We\'re glad you\'re here.</p>';
}

add_shortcode('welcome_message', 'cwm_register_shortcode');
