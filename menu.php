        <nav>
                <ul>
                    <li style="margin-left: 20px;"><a href="/~ela">Strona Główna</a></li> 
            <?php if(isset($_SESSION["name"])){ ?>        
                    <li><a href="#">Wypożyczenia</a>
                        <ul>
                            <li><a href="<?php echo $root_include_path; ?>forms/book_list.php">Lista książek</a></li>                            
                            <li><a href="<?php echo $root_include_path; ?>forms/rentals.php">Moje wypożyczenia</a></li>
                        </ul>
                    </li>
                    <?php 
                    if(isset($_SESSION["isAdmin"])){
                        if($_SESSION["isAdmin"]==1){?>
                            <li><a href="./">Administracja</a>
                                <ul>
                                    <li><a href="#">Użytkownicy</a></li>                            
                                    <li><a href="#">Wypożyczenia</a>
                                        <ul>
                                            <li><a href="#">Dodaj nowe</a></li>                            
                                            <li><a href="#">Lista wypożyczonych</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Książki</a>
                                        <ul>
                                            <li><a href="<?php echo $root_include_path; ?>forms/add_book.php">Dodaj nową</a></li>                            
                                            <li><a href="<?php echo $root_include_path; ?>forms/book_list.php">Lista książek</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
            <?php }}} ?>
                    <li><a id="contact_button" href="<?php echo $root_include_path; ?>contact.php">Kontakt</a></li>
                    <li><a id="contact_button" href="<?php echo $root_include_path; ?>about.php">O systemie</a></li>
                    <li id="logout"><form action="<?php echo $mod_include_path; ?>login/logout.php"> <input type="submit" id="logout_button" value="Wyloguj się" /> </form></li>
                </ul>
    </nav>