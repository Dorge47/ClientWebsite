<div class="mainCont">
    <img src="img/placeholdbg.jpg" alt="" id="bgImg">
    <div class="rowContainer twoRows">
        <div class="row">
            <div class="txtCont mainpgeTxt">
                <h1>Header</h1><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
                <div class="txtButtons">
                    <a href="?page=services">Services Page</a>
                    <a href="?page=pricing">Pricing Page</a>
                    <a href="atom://teletype/portal/89d74dfd-b18e-4d15-9370-d49fd7d0c02e">Link</a>
                </div>
            </div>
            <div class="googReview">
                <p class="reviewName">
                <?php
                    $reviewsFile = fopen("reviews.json","r");
                    $reviewsRaw = fread($reviewsFile,filesize("reviews.json"));
                    $reviewsParsed = json_decode($reviewsRaw);
                    echo $reviewsParsed[0]->name;
                ?>
                </p>
            </div>
        </div>
    </div>
</div>
