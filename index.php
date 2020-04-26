<?php session_start();   
    include("./modconfig.php"); 
    include("./config.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8">
<!--elements-->
    <title>e-Biblioteka: strona główna </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Strona główna</a>
        </header>
            <?php include("menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <?php  
                        if(!isset($_SESSION["name"])){ ?>
                            <h2 id="content_title">Logowanie</h2>
                            <div id="content_text">
                                <div id="login_box">
                                    <form action="./mod/login/login.php" method="post">
                                        <table>
                                            <tr><td>Login:</td> <td><input id="login_field" required name="login_field" type="text"/></td></tr>
                                            <tr><td>Hasło:</td> <td><input id="passwd_field" required name="passwd_field" type="password"/></td></tr>
                                            <tr><td></td><td><input id="login" type="submit" value="Zaloguj"/></td></tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                       <?php } else{?>
                            <h2 id="content_title">Panel użytkownika</h2>
                            <div id="content_text">
                                    <p>
                                        Witaj na stronie startowej! 
                                        <br/><span style="margin-left:10px;">Jesteś zalogowany/-a jako <?php echo $_SESSION["name"]." ".$_SESSION["surname"]?>, jakie masz życzenie?</span>
                                    </p>
                                    <ol>
                                        <li>Przejrzeć dane mojego konta</li>
                                        <li>Wypożyczyć książkę</li>
                                    </ol>

                            </div>
                   <?php     } ?>
                </div>
            </div>
        <footer id="footer">
            Elżbieta Mączka, 2019
        </footer>
    </div>
</body>
</html>