//[mrclimited]

function mrclimited_func( $atts ){
    return "<p>Edizione Limitata!</p>";
}
add_shortcode( 'mrclimited', 'mrclimited_func' );




//[textfoo]

function textfoo_func( $atts, $content = null ) {
    return '<h1>' . $content . '</h1>';
}
add_shortcode( 'textfoo', 'textfoo_func' );





//[textfoo2]

function textfoo2_func( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'class' => 'caption',
        'param' => 'val'
    ), $atts );

    return '<span class="' . esc_attr($a['class']) . '" param="' . esc_attr($a['param']) . '">' . $content . '</span>';
}
add_shortcode( 'textfoo2', 'textfoo2_func' );
