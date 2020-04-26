<?php session_start();
    include("../modconfig.php");
    include($root_include_path."config.php");
    $book_id = $_GET["book_id"];
?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8" />
<!--elements-->
    <title>e-Biblioteka: dodanie wypożyczenia</title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Dodanie wypożyczenia</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> Lista: </h2>
                    <div id="content_text">
                        <div id="center_box" style="width: 350px;">
                                <?php 
                                if(isset($_SESSION["name"])){
                                    $result = $link->query("SELECT * FROM tBooks WHERE Book_ID='$book_id'");
                                    if($result){
                                        $row = mysqli_fetch_assoc($result);
                                        if($row["amount_available"]>0){
                                            $curr_amount=$row["amount_available"]-1;
                                            $User_ID = $_SESSION["User_ID"];
                                            
                                            $now = date( 'Y-m-d H:i:s', strtotime("now"));
                                            $then = date( 'Y-m-d H:i:s', strtotime("+2 weeks"));                                            
                                            
                                            $link->query("INSERT INTO tRentals(User_ID, Book_ID, dateOfRental, dateOfExpReturn) VALUES ('$User_ID', '$book_id', '$now', '$then')") or die("query problem");
                                            $link->query("UPDATE tBooks SET amount_available=$curr_amount WHERE Book_ID='$book_id'");
                                            
                                            echo    "Wypożyczyłeś/-łaś książkę: \"".$row["title"]."\".<br/>".
                                                    "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
                                        }
                                        else{
                                            echo "nie udało się wypożyczyć książki :(";
                                        }
                                    }
                                }
                                else{
                                    include($root_include_path."log_in_please.php");
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
