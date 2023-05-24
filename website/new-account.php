    <!--Header-->
    <?php
        include('./includes/header.php');
    ?>

    <!--Menu-->
    <?php
        include('./includes/menu.php');
    ?>

    <!--Main-->
    <main>
    <?php
        include('./includes/logoutOption.php');
    ?>
        <div class="main-title">
            <h2>New Account <?php echo ($_SESSION["rol"]) ?></h2>     
        </div>

        <!--admin -->
        <div class="admin"> 
            <h3>Send email</h3>
            <div class="main-content">

                <form method="post" name="frmNewAccount" id="frmNewAccount" action="./send-email.php">
                    <input type="hidden" value="newAccount" name="emailType"/>
                    <div class="boxLogin">
                        <div class="input-icon">
                            <input type="text"  name="send-email" id="send-email" 
                            autofocus="" class="form-control"
                            placeholder="example@domian.com"
                            value="">
                            <input type="submit" class="form-control btn" id="btn-login" name="btn-login" value="Send"/>
                        </div>
                    </div>
                </form>

                <img src="./Repository/img/sendemail.png" alt="Send email">

            </div>
        </div>
        <div class="main-content">
            <form>
            </form>
        </div>
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>