<?php
    try {
        $bd = new mysqli('localhost', 'root', '', 'carolina');
    }
    catch(exeption $e) {
        echo $e->getMessage();
        exit;
    }

    // if($bd->ping()) {
    //     echo 'Todo bien';
    // }
    // else {
    //     echo $bd->connet_error;
    // }
?>