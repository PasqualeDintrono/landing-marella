<?php

$language_code =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$url = ( isset($language_code) && $language_code == 'it' ) ? '/landing/it' : '/landing/en';

header('Location: ' . $url);
die();

