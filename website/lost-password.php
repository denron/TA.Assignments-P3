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
            <h3>Lost Password <?php echo ($_SESSION["rol"]) ?></h3>     
        </div>

        <!--admin -->
        <div class="admin"> 
            <h4>Send email</h4>
            
            <div class="main-content">
                <form method="POST" name="frmLostPassword" id="frmLostPassword" action="./send-email.php">
                    <input type="hidden" value="LostPassword" name="emailType"/>
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