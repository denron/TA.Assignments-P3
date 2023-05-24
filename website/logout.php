    <!--Header-->
    <?php
        include('./includes/header.php');
    ?>
    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>
    <!--Menu-->
    <?php
        include('./includes/menu.php');
    ?>

    <!--Main-->
    <main>
        <div class="main-title">
            <h2>Thanks For Visit IT Suport System</h2>
        </div>

        <!--admin -->
        <div class="main-content">
            <p>Your session was finished</p>
        </div>
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>