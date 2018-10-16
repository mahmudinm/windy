<?php  

// Tambah span data-hover pada sebelum a href pada menu
// turn it on
add_filter( 'wp_nav_menu_objects', function( $items )
{
    add_filter( 'the_title', 'change_nav_title' );
    return $items;
});
// turn it off
add_filter( 'wp_nav_menu', function( $nav_menu )
{
    remove_filter( 'the_title', 'change_nav_title' );
    return $nav_menu;
});

// change the title
function change_nav_title( $title )
{
    return sprintf(
        '<span data-hover="%1$s">%2$s</span>',
        esc_attr( $title ),
        $title
    );
}
?>