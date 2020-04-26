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
    <title>e-Biblioteka: nowa książka </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Dodawanie nowej książki</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> nowa książka</h2>
                    <div id="content_text">
                        <div id="center_box">
                            <?php
                                $title = $_POST["title"];
                                $amount = $_POST["amount"];
                                if(isset($_SESSION["name"]) && is_numeric($amount)){
                                    
                                    if($link->query("INSERT INTO tBooks(title, amount_available, amount_total) VALUES ('$title','$amount','$amount')")){
                                        echo "Do bazy dodano książkę: ".$title."<br/>".$return_home;
                                    }
                                }
                                }else{
                                    echo "Nie dodano książki do bazy.";
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