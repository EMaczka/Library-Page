<?php
    session_start();
    include("./modconfig.php");
    include($root_include_path."config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8">
<!--elements-->
    <title>e-Biblioteka: Logowanie </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Kontakt</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title">Dane kontaktowe</h2>
                    <div id="content_text">
                        <div id="center_box">
                            <b>Elżbieta Mączka</b><br/>
                            <i>Administrator</i><br/>
                            tel. 555-444-333<br/>
                            e-mail: <a href="mailto:umbrela95@o2.pl">umbrela95@o2.pl</a>
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