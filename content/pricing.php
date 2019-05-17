<?php
    if(isset($_GET['product'])){
        if ($_GET['product'] == "repair") {
            echo "<div id=\"phprepair\"></div>";
        }
        elseif ($_GET['product'] == "upgrades") {
            echo "<div id=\"phpupgrades\"></div>";
        }
        elseif ($_GET['product'] == "removal") {
            echo "<div id=\"phpremoval\"></div>";
        }
        elseif ($_GET['product'] == "monitor") {
            echo "<div id=\"phpmonitor\"></div>";
        }
        elseif ($_GET['product'] == "manage") {
            echo "<div id=\"phpmanage\"></div>";
        }
        elseif ($_GET['product'] == "factory") {
            echo "<div id=\"phpfactory\"></div>";
        }
    }
?>  
<div class="mainCont" on>
    <img src="http://placehold.it/1920x1080" alt="" id="bgImg">
    <div class="columnMain">
        <div class="columnCont">
            <div class="column">
                <div class="columnHead">
                    <h1>Service Name</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">Computer Repair</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">Computer Upgrade</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">Virus Removal</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">Computer Monitoring</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">Remote Mangaging</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">Factory Recovery</p>    
                </div>
            </div>
            <div class="column">
                <div class="columnHead">
                    <h1>Price</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">Price</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">Price</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">Price</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">Price</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">Price</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">Price</p>
                </div>
            </div>
            <div class="column">
                <div class="columnHead">
                    <h1>Time to Complete</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">Days</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">Days</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">Days</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">Days</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">Days</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">Days</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_GET['product'])){
        echo "<script>phphover()</script>";
    }
?>