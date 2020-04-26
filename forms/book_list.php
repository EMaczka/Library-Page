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
    <title>e-Biblioteka: lista książek </title>
<!--styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo $root_include_path; ?>style.css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <header>
            <a href="/~ela"> e-Biblioteka: Lista książek</a>
        </header>
            <?php include($root_include_path."menu.php"); ?>
            
            <div id="content">
                <div id="content_inner">
                    <h2 id="content_title"> Lista: </h2>
                    <div id="content_text">
                        <div id="center_box" style="width: 350px;">
                            <table id="book_list">
                                <?php 
                                if(isset($_SESSION["name"])){
                                    $result = $link->query("SELECT * FROM tBooks");
                                    if($result){
                                        echo "<tr><th>Tytuł</th><th>Autor(-rzy)</th><th>Liczba egzemplarzy</th><th>Opcje</th></tr>";
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo"<tr><td>".$row["title"]."</td>";
                                            $book_id=$row["Book_ID"];
                                            $result2 = $link->query("SELECT * FROM tAuthors, tBookAuthor WHERE Book_ID='$book_id' AND tAuthors.Author_ID=tBookAuthor.Author_ID");
                                            if($result2){
                                                echo "<td><ul>";
                                                
                                                while($row2=mysqli_fetch_assoc($result2)){
                                                    echo"<li>".$row2["name"]." ".$row2["surname"]."</li>";
                                                }
                                                
                                                echo "</ul></td>";
                                            }
                                            echo "<td style='text-align:center;'>";
                                            
                                            if($row["amount_available"]==0){
                                                echo "<font color='red'>".$row["amount_available"]."</font>"."/".$row["amount_total"]."</td></tr>";
                                            } else{
                                                echo $row["amount_available"]."/".$row["amount_total"]."</td><td><a href='$mod_include_path"."rentals/add_rental.php?book_id=$book_id'>Wypożycz</a></td></tr>";
                                            } 
                                        }         

                                    }else{
                                        echo "Nie znaleziono książek :(";
                                    }
                                }
                                else{
                                    include($root_include_path."log_in_please.php");
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