<?php
    require('modules/header.php');

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(file_exists( "content/$page.php")){
            include("content/$page.php");
        }
        else {
            echo "<h1>404: You may be lost!</h1>";
            //or include 404 content
        }
    }
    else {
        include("content/home.php");
    }

    require('modules/footer.php');
?>
