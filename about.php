<?php session_start();
    include("../modconfig.php");
    include($root_include_path."config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8" />
<!--elements-->
    <title>e-Biblioteka: o systemie</title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: O systemie</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> Informacje: </h2>
                    <div id="content_text">
                        System e-Biblioteka został zrealizowany zgodnie z zapotrzebowaniem 
                        informacyjnym Biblioteki. 
                        
                        <br/><br/>
                        Autorka systemu dołożyła wszelkich starań, aby jego działanie nie było
                        zbyt przewidywalne i dostarczało użytkownikom rozrywki.
                                                                       
                    </div>
                </div>
            </div>
        <footer id="footer">
            Elżbieta Mączka, 2019
        </footer>
    </div>
</body>
</html>
