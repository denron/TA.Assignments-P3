    <!--Header-->
    <?php
        if(!isset($_POST["emailType"]))
        {
            header('Location: admin.php');
            exit;
        }
    
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
        <h2>Hello <?php echo ($_SESSION["rol"]) ?></h2>       
        </div>

        <!--admin -->
        <div class="admin"> 
            <h3>Email Sent</h3>
          
            <div>
                <?php 
                $msgCreate = "<p>New account created.</p>";
                $msgRecovered = "<p>Password recovered.</p>";
                
                if($_POST["emailType"]=="newAccount")
                {
                    echo $msgCreate;
                }

                if($_POST["emailType"]=="LostPassword")
                {
                    echo $msgRecovered;
                }
                ?>

                <img src="./Repository/img/send.png" alt="Send email" width="20%">
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