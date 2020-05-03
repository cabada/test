<?php

require_once "php/connection.php";
session_start();

if(isset($_SESSION['id_user'])){

    ?>
<div id="nav-wrapper">
    <div id="nav-container">
        <div id="imgBemo"><img src="images/bemo-logo2.png" id="image-bemo"></div>
        <div id="nav-links">
            <div ><a href="index.html" class="nav-item">Main</a></div>
            <div ><a href="#" class="nav-item">How To Prepare</a></div>
            <div ><a href="#" class="nav-item">CDA Interview Questions</a></div>
            <div ><a href="contact.html" class="nav-item">Contact Us</a></div>
            <div ><a href="panel.php" class="nav-item">Admin Panel</a></div>
            <div ><a href="php/users/Logout.php" class="nav-item">Log Out</a></div>


        </div>

        <div id="nav-menu">
            <div id="menu">
                <input type="image" src="images/menu.png" id="menu-img">
            </div>
        </div>

    </div>
    <div>
        <div id="nav-links-menu">
            <div ><a href="index.html" class="nav-item">Main</a></div>
            <br>

            <div ><a href="#" class="nav-item">How To Prepare</a></div>
            <br>

            <div ><a href="#" class="nav-item">CDA Interview Questions</a></div>
            <br>

            <div ><a href="contact.html" class="nav-item">Contact Us</a></div>
            <br>
            <div ><a href="panel.php" class="nav-item">Admin Panel</a></div>
            <br>
            <div ><a href="Login.html" class="nav-item">Log Out</a></div>
            <br>
        </div>
    </div>
</div>


<?php

}
else{



?>
<div id="nav-wrapper">
<div id="nav-container">
    <div id="imgBemo"><img src="images/bemo-logo2.png" id="image-bemo"></div>
    <div id="nav-links">
        <div ><a href="index.html" class="nav-item">Main</a></div>
        <div ><a href="#" class="nav-item">How To Prepare</a></div>
        <div ><a href="#" class="nav-item">CDA Interview Questions</a></div>
        <div ><a href="contact.html" class="nav-item">Contact Us</a></div>
        <div ><a href="login.html" class="nav-item">Log In</a></div>


    </div>

    <div id="nav-menu">
        <div id="menu">
            <input type="image" src="images/menu.png" id="menu-img">
        </div>
    </div>

</div>
<div>
    <div id="nav-links-menu">
        <div ><a href="index.html" class="nav-item">Main</a></div>
        <br>
        <br>
        <div ><a href="#" class="nav-item">How To Prepare</a></div>
        <br>
        <br>
        <div ><a href="#" class="nav-item">CDA Interview Questions</a></div>
        <br>
        <br>
        <div ><a href="contact.html" class="nav-item">Contact Us</a></div>
        <br>
        <br>
        <div ><a href="Login.html" class="nav-item">Log In</a></div>
        <br>
    </div>
</div>
</div>

<?php
}
?>



<script>
    $(document).ready(function () {

        $( "#nav-links-menu" ).hide();

        $("#menu-img").click(function () {

            if($( "#nav-links-menu" ).is(":visible")){
                $( "#nav-links-menu" ).hide();
            } else{
                $( "#nav-links-menu" ).show();
            }
        });


    });

</script>