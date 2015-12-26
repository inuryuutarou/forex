<?php

$thumbnail_size = $_REQUEST['thumbnail_size'];
$page = $_REQUEST['page'];
$posts_per_page = $_REQUEST['posts_per_page'];
$post_type = $_REQUEST['post_type'];

switch ($post_type) {

    case 'blog' :

        break;
    case 'portfolio' :

        if ( $thumbnail_size == 'portfolio-full-width' ) {
            $return_posts = array(
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-13-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-13.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-8-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-8.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-10-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-box-10.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
            );
            break;
        }  else {
            $return_posts = array(
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-9-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-9.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-10-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-10.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
                array(
                    'image' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-11-lg.jpg',
                    'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/image-standard-11.jpg',
                    'categories' => '',
                    'title' => 'This is a title',
                    'permalink' => 'this is a permalink',
                    'excerpt' => 'This is an excerpt',
                    'total_items' => 8
                ),
            );
        }
        break;

    case 'shop' :

        $return_posts = array(
            array(
                'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/access-1.jpg',
                'categories' => '',
                'title' => 'This is a title',
                'permalink' => 'this is a permalink',
                'excerpt' => 'This is an excerpt',
                'total_items' => 8
            ),
            array(
                'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/access-2.jpg',
                'categories' => '',
                'title' => 'This is a title',
                'permalink' => 'this is a permalink',
                'excerpt' => 'This is an excerpt',
                'total_items' => 8
            ),
            array(
                'thumbnail' => 'http://' .$_SERVER['SERVER_NAME'] . '/corex/images/access-3.jpg',
                'categories' => '',
                'title' => 'This is a title',
                'permalink' => 'this is a permalink',
                'excerpt' => 'This is an excerpt',
                'total_items' => 8
            ),
        );
        break;

}

die( json_encode($return_posts) );