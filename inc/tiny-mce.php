<?php
/*------------------------------------*\
    TINY MCE
\*------------------------------------*/

function tiny_stylesheet() {
    add_editor_style('assets/dist/css/main.css');
}
function enable_style_select($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
function custom_tiny_styles($init_array) {
    // Define the style_formats array
    $style_formats = array(
        array( // XLARGE TITLE
            'title' => 'Titre xlarge',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -xlarge'
        ),
        array( // LARGE TITLE
            'title' => 'Titre large',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -large'
        ),
        array( // REGULAR TITLE
            'title' => 'Titre regular',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -regular'
        ),
        array( // SECTION TITLE
            'title' => 'Titre de Section',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -section'
        ),
        array( // SECTION SUBTITLE
            'title' => 'Sous-titre de Section',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -section-subtitle'
        ),
        array( // MEDIUM TITLE
            'title' => 'Titre medium',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -medium'
        ),
        array( // MEDIUM TITLE UNDERLINE
            'title' => 'Titre medium souligné',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -medium -underline'
        ),
        array( // NAME TITLE
            'title' => 'Titre Nom',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -name'
        ),
        array( // NAME SUBTITLE
            'title' => 'Sous-titre Nom',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',
            'classes' => 'title -name-subtitle'
        ),
        array( // btn
            'title' => 'Bouton',
            'selector' => 'a, button',
            'classes' => 'button'
        ),
        array( // btn blanc
            'title' => 'Bouton blanc',
            'selector' => 'a, button',
            'classes' => 'button -white'
        ),
        array( // btn accent
            'title' => 'Bouton accent',
            'selector' => 'a, button',
            'classes' => 'button -accent'
        )
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}

function enable_more_buttons($buttons) {
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';
    return $buttons;
}



// HOOKS
add_filter("mce_buttons", "enable_more_buttons");
add_filter('mce_buttons_2', 'enable_style_select');
add_filter('tiny_mce_before_init', 'custom_tiny_styles');
add_action('init', 'tiny_stylesheet');
