
   
   <!--Header-->
    <?php
        include('./includes/header.php');
    ?>
    <?php

        include('./../DataBussiness/session.php');
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
    <?php
        if($_SESSION['rol'] == "Admin"){
    ?>  
        <div class="main-content"> admin
            <p><a href="./isnt-working.php">PC Not Working</a></p>
            <p><a href="./new-account.php">New Account</a></p>
        </div>

     <?php
        }
    ?>  

    <!--Manager -->
    <?php
        if($_SESSION['rol'] == "Manager"){
    ?>  
        <div class="main-content">
        Manager
            <p><a href="./isnt-working.php">PC Not Working</a></p>
            <p><a href="./lost-password.php">Lost Password</a></p>
        </div>
     <?php
        }
    ?>  

    <!--CEO -->
    <?php
        if($_SESSION['rol'] == "Ceo"){
    ?>  
        <div class="main-content">
        CEO
            <p><a href="./isnt-working.php">PC Not Working</a></p>
            <p><a href="./need-help.php">Phone Number</a></p>
        </div>
     <?php
        }
    ?>  
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>