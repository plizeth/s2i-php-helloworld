<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $hostname = getenv('HTTP_HOST');	
    $config = [
        'name' => $hostname,
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
