<?php

require_once "php/connection.php";
$conn = conection();
session_start();



if(isset($_SESSION['id_user'])) {

    ?>

    <html>
    <head>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/stylesheet.css">
        <script src="js/jquery/jquery-3.4.1.min.js"></script>
        <script src="js/Functions.js"></script>
        <meta name="viewport" content="width=device-width">
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2664643830422201');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=2664643830422201&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165400379-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-165400379-1');
        </script>


    </head>
    <body>

    <script>
        fbq('track', 'ViewContent');
    </script>

    <div id="navbar"></div>


    <div id="wrapper-container">
        <div class="imageChange"></div>

            <div class="imageChange">
                <div id="indexing">
                    <div><h3>Change Indexing of pages: &ensp;</h3></div>
                    <div><button id="noindex" value="0">Set Index</button></div>

                </div>

                <span>Change image from page:</span>
                <div> <input type="file" id="imageIndex"></div>
                <div> <input type="button" id="setImageIndex" value="Save" class="buttons"></div>

            </div>




        <div><h2>Main Page:</h2></div>
        <div class="ChImageIndex">


        <?php
            $query = "select name from images";
            $result=mysqli_query($conn,$query);

            while($data=mysqli_fetch_row($result)) {


                ?>

                <div><input type="image" class="imageFeat" value="<?php echo $data[0]?>" src="images/<?php echo $data[0]?>"></div>

                <?php
            }
        ?>

        </div>
        <div><h2>Contact Page:</h2></div>
        <div class="ChImageIndex">


            <?php
            $query = "select name from images";
            $result=mysqli_query($conn,$query);

            while($data=mysqli_fetch_row($result)) {


                ?>

                <div><input type="image" class="imageFeatContact" value="<?php echo $data[0]?>" src="images/<?php echo $data[0]?>"></div>

                <?php
            }
            ?>

        </div>
        <br>
        <div id="meta_container" >
            <div class="meta_items">
                <div><h2>Add meta-title and meta-description to Main Page</h2></div>
                <br>
                <div><h3>Meta-Title</h3></div>
                <br>
                <div><input type="text" id="meta_title_index" class="form-control"></div>
                <br>
                <div><h3>Meta-Description</h3></div>
                <br>
                <div><textarea id="meta_desc_index" class="form-control"></textarea></div>
                <br>
                <div><input type="button" id="meta_index" value="Submit" class="btn btn-default"></div>
            </div>
            <div class="meta_items">
                <div><h2>Add meta-title and meta-description to Contact Page</h2></div>
                <br>
                <div><h3>Meta-Title</h3></div>
                <br>
                <div><input type="text" id="meta_title_cont" class="form-control"></div>
                <br>
                <div><h3>Meta-Description</h3></div>
                <br>
                <div><textarea id="meta_desc_cont" class="form-control"></textarea></div>
                <br>
                <div><input type="button" id="meta_cont" value="Submit" class="btn btn-default"></div>
            </div>
        </div>

    </div>


    <div id="footer">
        <div id="rights">©2013-2016 BeMo Academic Consulting Inc. All rights reserved. <span class="redText">Disclaimer & Privacy Policy.</span>
            <span class="redText">Contact Us.</span></div>
        <div id="footer-imgs">
            <div><img src="images/facebook.png" id="facebook"/></div>
            <div><img src="images/twitter.png" id="twitter"/></div>
        </div>
    </div>


    </body>

    </html>

    <?php

}
else{
    header('Location:login.html');
}


?>

<script>
    $(document).ready(function(){
        $('#navbar').load('nav.php');



        $('#imageIndex').change(function(e){
            fileName = e.target.files[0].name;


            console.log(fileName);



        });

        $("#setImageIndex").click(function () {

            localStorage.setItem("imageIndex",fileName);

            insertImage(fileName);






        });

        $(".imageFeat").click(function () {
            fileName = $(this).val();

            localStorage.setItem("imageIndex",fileName);
            alert("Main page image changed!!")

        })
        $(".imageFeatContact").click(function () {
            fileName = $(this).val();

            localStorage.setItem("imageContact",fileName);
            alert("Contact page image changed!!")

        })

        indexButton = document.getElementById("noindex");


        $("#noindex").click(function () {

            noindexval=$("#noindex").val();

            if(noindexval==1){
                noindexval=$("#noindex").val(0);
                $("#noindex").html("Set Index");
                alert("Indexing was removed!");
                localStorage.setItem("toggleIndex","1");
                indexButton.style.backgroundColor="Green";
            }
            else{

                noindexval=$("#noindex").val(1);
                $("#noindex").html("No Index");
                alert("Indexing was added!");
                localStorage.setItem("toggleIndex","0");
                indexButton.style.backgroundColor="Red";


            }




        })

        $("#meta_index").click(function () {

            alert("The data has been set!");
            titleIndex = $("#meta_title_index").val();
            descIndex = $("#meta_desc_index").val();
            sessionStorage.setItem("titleIndex",titleIndex);
            sessionStorage.setItem("descIndex",descIndex);


        });

        $("#meta_cont").click(function () {

            alert("The data has been set!");
            titleCont = $("#meta_title_cont").val();
            descCont = $("#meta_desc_cont").val();
            sessionStorage.setItem("titleCont",titleCont);
            sessionStorage.setItem("descCont",descCont);


        });



    });




</script>
