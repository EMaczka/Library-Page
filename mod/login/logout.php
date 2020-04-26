<?php
    session_start();
    include("../modconfig.php");
    include($root_include_path."config.php");
    if(isset($_SESSION)){
        session_unset();   
    }
    session_destroy(); 
?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8">
<!--elements-->
    <title>e-Biblioteka: Wylogowanie </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Wylogowanie</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title">Wylogowanie</h2>
                    <div id="content_text">
                        <div id="center_box">
                            Użytkownik został wylogowany poprawnie <br/>
                            <a href="/~ela">Kliknij</a>, aby wrócić do strony głównej.
                        </div>
                    </div>
                </div>
            </div>
        <footer id="footer">
            Elżbieta Mączka, 2019
        </footer>
    </div>
</body>
</html>