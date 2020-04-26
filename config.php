<?php
    $host = "localhost";
    $user = "ela";
    $passwd = "123456";
    $dbname = "ela";
        
    $link = mysqli_connect($host, $user, $passwd, $dbname);
    if(!$link){
        echo "Błąd połączenia z bazą.";
    }
    if(isset($link) && !empty($link)){
        $link->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        return $link;
    }
    
    $return_home = "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
?>
