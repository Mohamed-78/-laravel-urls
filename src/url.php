<?php

namespace Mdev\LaravelUrls;

class LaravelUrls
{
    public function url()
    {
        if (!function_exists('page_title')) {
            function page_title($title)
            {
                //Your website name
                $website_name = 'MDEV';

                if ($title === '') {
                    return $website_name;
                } else {
                    return $title . ' | ' . $website_name;
                }
            }
        }
    }

}
