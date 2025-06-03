<?php
    require_once 'lib/render.php';
    require_once 'lib/somma.php';


    $dati = array(
        'numero_1' => $_POST['numero_1'],
        'numero_2' => $_POST['numero_2'],
        'somma' => somma($_POST['numero_1'], $_POST['numero_2'])
    );

    $output = renderizza('tpl/somma.html', $dati);
    echo $output;
    