<?php 
  include("./../DataBussiness/db.php");
  $_REQUEST["errorMessage"]="";

if($_POST){
  try{
    $isValid = true;
    
    if(empty($_POST["titleAdv"])){ $isValid=false; $_REQUEST["errorMessage"]="Please provide your Title."; }
    if($isValid && empty($_POST["date"])){ $isValid=false; $_REQUEST["errorMessage"]="Date cannot be empty"; }
    if($isValid && empty($_POST["duration"])){ $isValid=false; $_REQUEST["errorMessage"]="Please provide an duration"; }
    if($isValid && empty($_POST["summary"])){ $isValid=false; $_REQUEST["errorMessage"]="Please provide an summary"; }
        	
    if($isValid){
		$titleAdv = htmlspecialchars(strip_tags($_POST["titleAdv"]));
		$date = htmlspecialchars(strip_tags($_POST["date"]));
		$duration = htmlspecialchars(strip_tags($_POST["duration"]));
		$summary = htmlspecialchars(strip_tags($_POST["summary"]));

		$sql = "INSERT INTO tblAdventures (Adventures_title, Adventures_date, Adventures_duration, Adventures_description) VALUES ('$titleAdv','$date', '$duration', '$summary')";    
		$conn->query($sql);
		header("Location: admin-confirm.php");
    }

  }catch(Exception $e){
    $_REQUEST["errorMessage"]=$e->getMessage();
  }
}
?>
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
    <div class="ad min">
        <div class="main-title">
            <h2>Admin - Add Adventure</h2>     
        </div>

        <div class="main-content">
        <form method="post" name="frmAdventures">
        <div id="form" class="boxLogin">
            <div class="input-icon">
                <div class="boxLogin"><span>Heading</span></div>
                <div><input type="text" class="boxLogin input-icon form-control" name="titleAdv"/></div>
            </div>
            <div class="input-icon">
                <div class="boxLogin"><span>Trip Date</span></div>
                <div><input type="text" class="boxLogin input-icon form-control" name="date" placeholder="yyyy-dd-mm"/></div>
            </div>
            <div class="input-icon">
                <div class="boxLogin"><span>Duration</span></div>
                <div><input type="text" class="boxLogin input-icon form-control" name="duration"/></div>
            </div>
            <div class="input-icon">
                <div class="boxLogin"><span>Summary</span></div>
                <div><input type="text" class="boxLogin input-icon form-control" name="summary"/></div>
            </div>
            <div class="input-icon">
                <div><input type="submit" class="boxLogin input-icon form-control" text="Submit" name="btnSend"/></div>
            </div>
        </div>
        </form>
        <strong><?=$_REQUEST["errorMessage"] ?></strong>
        </div>
    </div>
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>
