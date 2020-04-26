<?php session_start();
    include("modconfig.php");
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
            <a href="/~ela"> e-Biblioteka: Dodaj nową książkę</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> Dane nowej książki</h2>
                    <div id="content_text">
                        <div id="center_box">
                            <form action="<?php echo $mod_include_path; ?>books/add_book.php" method="post">
                                <table>
                                    <tr>
                                        <td>Tytuł: </td><td><input type="text" name="title" required placeholder="tu wpisz tytuł"></td>
                                    </tr>
                                    <tr>
                                        <td>Liczba egzemplarzy: </td><td><input type="number" name="amount" required placeholder="tu wpisz liczbę egzemplarzy"></td>
                                    </tr>
                                    <tr>
                                        <td></td><td><input type="submit" value="Zapisz"></td>
                                    </tr>
                                </table>
                            </form>
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