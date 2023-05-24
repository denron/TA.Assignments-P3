<?php

if(isset($_POST['title']) &&
        isset($_POST['userfirst']) &&
        isset($_POST['userLast']) &&
        isset($_POST['rol']) &&
        isset($_POST['btn-login'])
    ) {

        session_start();
        $_SESSION["title"]=$_POST["title"];
        $_SESSION["userfirst"]=$_POST["userfirst"];
        $_SESSION["userLast"]=$_POST["userLast"];
        $_SESSION["rol"]=$_POST["rol"];

        header('Location: problem.php');
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
        <div class="admin"> 
            <h3>Welcome To Your IT Suport System</h3>
            <div class="main-content">
                <form method="post" name="frmLogin" id="frmLogin" >
                    <div class="boxLogin">
                        <div class="input-icon">
                            <select name="title" id="usertitle" class="form-control">
                                <option select value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Ms">Ms.</option>
                                <option value="Miss">Miss</option>
                            </select>  
                            <input type="text"  class="form-control" id="userFirstName" name="userfirst" placeholder="First name" autofocus=""/>
                            <input type="text"  class="form-control" id="userLastName" name="userLast" placeholder="Last name" autofocus=""/>
                            <select id="rol" name="rol" class="form-control">
                                <option select value="Admin">Admin</option>
                                <option value="Manager">Manager</option>
                                <option value="Ceo">Ceo</option>
                            </select>
                            <input type="submit" class="form-control btn" id="btn-login" name="btn-login" text="Submit"/>
                        </div>
                        <div class="input-icon">
                            <span><a href="#" target="_blank">Recover Password</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!--footer-->
    <?php
        include('./includes/footer.php');
    ?>
