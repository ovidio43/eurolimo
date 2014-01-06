<?php

function custom_post_type_init() {
    $post_types = array(
        array("slug" => "flet", "plural" => "Flet cars", "singular" => "Flet Cars", "rewrite" => "flet", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "services", "plural" => "Services", "singular" => "Service", "rewrite" => "song", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "testimonials", "plural" => "Testimonials", "singular" => "Testimonial", "rewrite" => "song", "public" => true, "archive" => true, "supports" => array('title', 'editor'))
        
    );

    foreach ($post_types as $pt) {

        $supports = array('title', 'editor', 'post_tags', 'thumbnail', 'excerpt', "comments");
        $public = isset($pt['public']) ? $pt['public'] : false;
        register_post_type($pt["slug"], array(
            'labels' => array(
                'name' => $pt["plural"],
                'singular_name' => $pt["singular"]
            ),
            'show_ui' => true,
            'publicly_queryable' => isset($pt["publicly_queryable"]) ? $pt["publicly_queryable"] : $public,
            'public' => isset($pt['public']) ? $pt['public'] : false,
            'has_archive' => isset($pt['archive']) ? $pt['archive'] : true,
            'rewrite' => array('hierarchical' => true, 'with_front' => true, 'slug' => isset($pt["rewrite"]) ? $pt["rewrite"] : $pt["slug"]),
            'supports' => isset($pt['supports']) ? $pt['supports'] : $supports,
            'taxonomies' => isset($pt['taxonomies']) ? $pt['taxonomies'] : array('post_tag'),
            'hierarchical' => false
                )
        );
    }
}

add_action('init', 'custom_post_type_init');
//Defines custom image sizes used on the katy perry site.