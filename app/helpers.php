<?php


function public_url_modify( $path ){
    if(preg_match("/public/i", $path)) {
        return "/storage/" . preg_replace('/^public\//', '', $path);
    } else {
        return $path;
    }
}
