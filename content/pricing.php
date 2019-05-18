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
<div class="mainCont">
    <img src="img/services.jpg" alt="" id="bgImg">
    <div class="columnMain">
        <div class="columnCont">
            <div class="column">
                <div class="columnHead">
                    <h1>Service Name</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">Diagnostics</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">Computer Upgrade</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">Virus Removal</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">On-site Services</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">Remote Monitoring & Management</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">Factory Recovery</p>
                </div>
            </div>
            <div class="column">
                <div class="columnHead">
                    <h1>Price</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">$79 USD (Flat Rate)</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">$45 USD (Labor Costs)</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">$89 USD (Flat Rate)</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">$75 USD</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">$29.95 USD (Per Device)</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">$99 USD (Flat Rate)</p>
                </div>
            </div>
            <div class="column">
                <div class="columnHead">
                    <h1>Time for Completion</h1>
                </div>
                <br>
                <div class="columnTxt">
                    <p class="multihover1" onmouseover="multihover(1)" onmouseout="clearhover(1)">2-3 Days Upon Start of Service</p>
                    <p class="multihover2" onmouseover="multihover(2)" onmouseout="clearhover(2)">2-3 Days Upon Start of Service</p>
                    <p class="multihover3" onmouseover="multihover(3)" onmouseout="clearhover(3)">2-3 Days Upon Start of Service</p>
                    <p class="multihover4" onmouseover="multihover(4)" onmouseout="clearhover(4)">Hourly</p>
                    <p class="multihover5" onmouseover="multihover(5)" onmouseout="clearhover(5)">Monthly</p>
                    <p class="multihover6" onmouseover="multihover(6)" onmouseout="clearhover(6)">2-3 Days Upon Start of Service</p>
                </div>
            </div>
        </div>
        <div class="mobile">
          <div class="columnMobile">
            <h3>Diagnostics</h3>
            <p>$79 USD (Flat Rate)</p>
            <p>2-3 Days Upon Start of Service</p>
          </div>
          <div class="columnMobile">
            <h3>Computer Upgrade</h3>
            <p>>$45 USD (Labor Costs)</p>
            <p>2-3 Days Upon Start of Service</p>
          </div>
          <div class="columnMobile">
            <h3>Virus Removal</h3>
            <p>$89 USD (Flat Rate)</p>
            <p>2-3 Days Upon Start of Service</p>
          </div>
          <div class="columnMobile">
            <h3>On-site Services</h3>
            <p>>$75 USD</p>
            <p>Hourly</p>
          </div>
          <div class="columnMobile">
            <h3>Remote Monitoring & Management</h3>
            <p>$29.95 USD (Per Device)</p>
            <p>Monthly</p>
          </div>
          <div class="columnMobile">
            <h3>Factory Recovery</h3>
            <p>$99 USD (Flat Rate)</p>
            <p>2-3 Days Upon Start of Service</p>
          </div>
        </div>
    </div>
</div>
<?php
    if(isset($_GET['product'])){
        echo "<script>phphover()</script>";
    }
?>
