<?php

require_once __DIR__.'/router.php';


get('/', 'index.php');

get('/resume', 'resume.php');

get('/portfolio', 'portfolio.php');

get('/contact', 'contact.php');

get('/sitemap', 'sitemap.xml');



any('/404','views/404.php');
