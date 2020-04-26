<?php session_start();
    include("../modconfig.php");
    include($root_include_path."config.php");

    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    $username = $_POST['login_field'];
    $password = $_POST['passwd_field'];
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
            <a href="/~ela"> e-Biblioteka: Strona Główna</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title">Weryfikacja danych</h2>
                    <div id="content_text">
                        <div id="center_box">
                            <?php  
                                $result = $link->query("SELECT * FROM tUsers WHERE username='$username' AND password='$password'");
                                if($result){
                                    $num_row = mysqli_num_rows($result);
                                    $row=mysqli_fetch_assoc($result);
                                    if($num_row>0){
                                        $_SESSION["User_ID"]=$row["User_ID"];
                                        $_SESSION["name"]=$row["name"];
                                        $_SESSION["surname"]=$row["surname"];
                                        $_SESSION["isAdmin"]=$row["isAdmin"];
                                        echo "Zostałeś pomyślnie zalogowany! :)<br/>";
                                        echo "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
                                    } else{
                                        echo "Użytkownik nie został odnaleziony<br/>".
                                        "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
                                    }
                                }
                                else{
                                    echo "użytkownik nie został odnaleziony<br/>".
                                    "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
                                }
                            ?>
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