<?php
    require_once 'lib/render.php';

    $output = file_get_contents('tpl/index.html');
    echo $output;