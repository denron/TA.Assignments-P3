    
    <!--Header-->
    <?php
        include("./../DataBussiness/db.php");
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
            <h2>Upcoming Adventures</h2>     
        </div>

        <?php
        //select all query
        $sql = "SELECT a.Adventures_id, a.Adventures_title, a.Adventures_date, a.Adventures_duration, a.Adventures_description
                    FROM tbladventures a ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>
                <div class="main-content">
                    <h3><?=$row["Adventures_title"]?></h3>
                    <p>Date: <?=$row["Adventures_date"]?><br>Duration: <?=$row["Adventures_duration"]?> days</p>
                    <h4>Summary</h4>
                    <p><?=$row["Adventures_description"]?></p>
                </div>
            <?php 
            }
        }
        ?>

    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>
