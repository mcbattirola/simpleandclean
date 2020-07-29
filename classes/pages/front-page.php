<?php
namespace SNC\Pages;

use SNC\Pages\Base_Page;
use SNC\Components\Main_Component;
use SNC\Components\Component;
use SNC\Components\Panel;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Front_Page extends Base_Page {
    public function __construct() {
        
        $main_section = new Component( 'main', false, null, array( 'main-content' ) );

        $posts_section_heading = new Component( 'h2', false, null, array( 'posts-section-title' ) );
        $posts_section_heading->set_content( 'POSTS' ); 
        $main_section->append_child( $posts_section_heading );

        $main_section->append_child( $this->get_posts() );

        $pagination = new Component( 'div', false, null, [], get_the_posts_pagination( array( 
            'mid_size'  => 2 ,
            'prev_text' => __( 'Newer', 'SNC' ),
            'next_text' => __( 'Older', 'SNC' ),
            'screen_reader_text' => ' ',
            ) ) 
        );

        $main_section->append_child( $pagination );

        parent::__construct( $main_section );
    }

    private function get_posts() {
        $posts_container = new Component( 'div', false );
  
        $posts = get_posts( array(
            'post_type' => 'post',
            'numberposts' => -1
            )
        );

        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                $post_article = $this->get_post_article();
                $posts_container->append_child( $post_article );
            }
        }

        return $posts_container;
    }

    private function get_post_article() {
        $article = new Component( 'article', false, null, array( 'post-list-item' ) );

        $post_info = new Component( 'div', false, null, array( 'post-list-item-info' ) );

        $post_time = new Component( 'span', false, null, array( 'post-list-item-time' ), get_the_date() );
        $post_info->append_child( $post_time );

        $post_author = new Component( 'span', false, null, array( 'post-list-item-author' ), ', ' . get_the_author() );
        $post_info->append_child( $post_author );
        $article->append_child( $post_info );

        $title = new Component( 'h3', false, null, array( 'post-list-item-title' ) );
        $title_anchor = new Component( 'a', false, null, [], get_the_title() );
        $title_anchor->add_attribute( 'href', esc_url( get_permalink() ) );
        $title->append_child( $title_anchor );
        $article->append_child( $title );

        $post_excerpt = new Component( 'span', false, null, array( 'post-list-item-excerpt' ), get_the_excerpt() );
        $article->append_child( $post_excerpt );

        return $article;
    }
}