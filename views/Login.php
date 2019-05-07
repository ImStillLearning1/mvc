<div class="container-fluid">
            <div class="top">
                
            </div>
            <div class="container">
                <div class="login_screen">
                    <p class="log-in">Zaloguj Się</p>
                    <div class="form_log_in">
                        <form action="FormValidate.php" method="POST">
                            <div class="email">
                                <label class="text" for="email">E-mail: </label>
                                <input class="input_mail" type="text" name="email" placeholder="Wprowadź swój e-mail" />
                            </div>
                            <div class="password">
                                <label class="text" for="password"> Hasło: </label>
                                <input class="input_password" type="password" name="password" placeholder="Wprowadź hasło" />
                            </div>
                            <div class="submit">
                                <input class="input_submit" type="submit" value="Zaloguj" />
                            
                        </form>
                        
                    </div> 
                            <?php
                           if(isset($_SESSION['message'])) echo $_SESSION['message'];
                           unset($_SESSION['message']);
                          
                        ?>
                </div>
            </div>
            
        </div>