<?php
namespace SNC\Pages;

use SNC\Pages\Base_Page;
use SNC\Components\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Single_Page extends Base_Page {
    public function __construct() {        
        $main_section = new Component( 'main', false, null, array( 'main-content' ) );

        $content = $this->get_content();
        $main_section->append_child( $content );

        $pagination = new Component( 'div', false, null, array( 'single-navigation' ), get_the_post_navigation( array( 
            'mid_size'  => 2 ,
            'prev_text' => __( 'Next', 'SNC' ),
            'next_text' => __( 'Previous', 'SNC' ),
            'screen_reader_text' => ' ',
            ) ) 
        );
        $main_section->append_child( $pagination );

        parent::__construct( $main_section );
    }

    private function get_content() {
        $content_container = new Component( 'div', false, null, array( 'single-container' ) );
        while( have_posts() ) {
            the_post();
            $page_content = new Component( 'div', false, null );

            $title = new Component( 'h1', false, null, array( 'single-title' ), get_the_title() );
            $page_content->append_child( $title );

            $excerpt = new Component( 'div', false, null, array( 'single-excerpt' ), get_the_excerpt() );
            $page_content->append_child( $excerpt );

            $author_and_time = new Component( 'div', false, null, array( 'single-time' ), get_the_time('F j, Y') . ', ' . get_the_author() );
            $page_content->append_child( $author_and_time );

            $post_content = new Component( 'div', false, null, array( 'single-content' ), get_the_content() );
            $page_content->append_child( $post_content );
        }

        $content_container->append_child( $page_content );
        return $content_container;
    }

    
}