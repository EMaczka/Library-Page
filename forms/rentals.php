<?php 
    session_start();
    include("modconfig.php");
    include($root_include_path."config.php");
    $User_ID=$_SESSION["User_ID"];
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE HTML>
<html>
<head>
<!--meta-->
    <meta charset="UTF-8" />
<!--elements-->
    <title>e-Biblioteka: moje wypożyczenia </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Moje wypożyczenia</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> Książki wypożyczone przeze mnie: </h2>
                    <div id="content_text">
                        <div id="center_box" style="width: 375px;">
                            <table id="book_list">
                                <?php
                                    $result = $link->query("SELECT * FROM tRentals WHERE User_ID='$User_ID'");
                                    $num_row = mysqli_num_rows($result);
                                    if($num_row>0){
                                        echo "<tr><th>Tytuł</th><th>Data wypożyczenia</th><th>Data oczekiwanego zwrotu</th><th>Data zwrotu</th></tr>";
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr>";   
                                            
                                            $Book_ID = $row["Book_ID"];
                                            
                                            if($result2 = $link->query("SELECT * FROM tBooks WHERE Book_ID='$Book_ID'")){
                                                $row2 = mysqli_fetch_assoc($result2);
                                                echo "<td>".$row2["title"]."</td>";   
                                            }
                                            
                                            
                                            echo "<td>".$row["dateOfRental"]."</td> <td>".$row["dateOfExpReturn"]."</td><td>".$row["dateOfReturn"]."</td>";
                                            
                                            echo "</tr>";
                                        }
                                    }else{
                                        echo "nie znaleziono wypożyczeń<br/>".
                                    "<a href=\"/~ela\">Kliknij</a>, aby wrócić do strony głównej.";
                                    }
                                ?>
                            </table>
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