<?php
function activeMenu($uri = '') {
    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'active';
    }
    return $active;
}


    function current_user()
    {
    	
         session_start();



    return  $_SESSION['nom']; // output yes
    }
