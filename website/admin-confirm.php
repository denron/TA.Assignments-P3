    <!--Header-->
    <?php
        include('./includes/header.php');
    ?>

    <!--Menu-->
    <?php
        include('./includes/menu.php');
    ?>

    <div class="cont-Banner">
        <img src="./Repository/img/canoe.jpg" alt="Come Experience Canada">
        <div class="text-Banner"><h3>Come Experience<br>Canada</h3></div>
    </div>

    <!--Main-->
    <main>
    <?php
        include('./includes/logoutOption.php');
    ?>
        <div class="main-title">
            <h2>Admin - Confirm</h2>     
        </div>

        <div class="main-content">
            <h3></h3>
            <p>Data has added successfully to DB </p>
            
            <p>
                <a href="./all-adventures.php" >view all adventures</a>
            </p>
        </div>
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>
