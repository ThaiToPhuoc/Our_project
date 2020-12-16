<?php

namespace App\Services;

class Queries
{
    public static function testExample()
    {
        $args = [
            'post_type' => 'post'
        ];
        $queryAll = new \WP_Query($args);
        return [
            'posts' => $queryAll->post
        ];
    }

    public static function getBaner()
    {
        $args = [
            'post_type' => 'banner_code'
        ];
        $queryAll = new \WP_Query($args);
        $banner = [];

        if ($queryAll->post_count > 0)
        {
            $banner= array_map(function($banner){
                $image = get_field('image',$banner);

                //Khai bao bien
                $url = $image['url'];

                $title = get_field('title',$banner);
                $description = get_field('description',$banner);

                return (object)[
                    'url' => $url,
                    'title' => $title,
                    'description' => $description
                ];
            }, $queryAll->posts);

            wp_reset_postdata();
        }

        return $banner;
    }

    public static function getContent()
    {
        $args = [
            'post_type' => 'content_code'
        ];
        $queryAll = new \WP_Query($args);
        $content = [];

        if ($queryAll->post_count > 0)
        {
            $content= array_map(function($content){
                $image = get_field('image',$content);

                //Khai bao bien
                $image = $image['url'];
                $url = get_field('url',$content);
                $title = get_field('title',$content);
                $content = get_field('content',$content);

                return (object)[
                    'url' => $url,
                    'image' => $image,
                    'title' => $title,
                    'content' => $content
                ];
            }, $queryAll->posts);

            wp_reset_postdata();
        }

        return $content;
    }

    public static function getInfo()
    {
        $args = [
            'post_type' => 'info_code'
        ];
        $queryAll = new \WP_Query($args);
        $info = [];

        if ($queryAll->post_count > 0)
        {
            $info= array_map(function($info){
                $image = get_field('image',$info);

                //Khai bao bien
                $image = $image['url'];
                $url = get_field('url',$info);
                $title = get_field('title',$info);
                $discription = get_field('discription',$info);

                return (object)[
                    'url' => $url,
                    'image' => $image,
                    'title' => $title,
                    'discription' => $discription
                ];
            }, $queryAll->posts);

            wp_reset_postdata();
        }

        return $info;
    }
}
