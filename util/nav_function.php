<?php

$uri = $_SERVER['REQUEST_URI'];


function setActive($uri, $path)
{
    if ($uri == $path) {
        echo "navActive";
    }
}
