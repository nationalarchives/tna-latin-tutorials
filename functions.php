<?php

function site_url()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domain_name = $_SERVER['HTTP_HOST'] . '/';
    return $protocol . $domain_name;
}

define('SITE_URL', site_url());