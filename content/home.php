<div class="mainCont">
    <img src="img/mainpage.jpg" alt="Background image" id="bgImg">
    <div class="rowContainer twoRows">
        <div class="row">
            <div class="txtCont mainpgeTxt">
                <h1>Welcome to Computer Services Network</h1><br>
                <p>&nbsp;&nbsp;&nbsp;Computer Services Network, your 1st choice in everything computers. We specialize in Managed Services like; troubleshooting, diagnostics, installation & computer setup, as well as parts and repairs. We offer one of the top mobile onsite repair services around and we service the entire Fresno area. Our prices are very affordable but our service is priceless. We offer 30 warranties on all of our labor and guarantee that we'll fix your computer problem for the long haul. <br><br>&nbsp;&nbsp;&nbsp;We understand how vital it is to have access to the interent and how important the computer is in everyday life. There is no way that you should have to do without yours! We'll make sure we get you back connected and things stay that way.</p><br>
                <div class="txtButtons">
                    <a href="?page=services">Services Page</a>
                    <a href="?page=pricing">Pricing Page</a>
                </div>
            </div>
            <div class="googReview">

                <?php
/*

💬 Get Google-Reviews with PHP cURL & without API Key
=====================================================

How to find the CID - If you have the business open in Google Maps:
- Do a search in Google Maps for the business name
- Make sure it’s the only result that shows up.
- Replace http:// with view-source: in the URL
- Click CTRL+F and search the source code for “ludocid”
- CID will be the numbers after “ludocid\\u003d” and till the last number

Example
-------
```TXT
ludocid\\u003d16726544242868601925\
```

> HINT: Use .quote in you CSS to style the output

###### Copyright 2019 Igor Gaffling

*/
//14374495141003716340
$cid = '14374495141003716340';   // The CID you want to see the reviews for
$show_only_if_with_text = false; // true OR false
$show_only_if_greater_x = 0;     // 0-4
$show_rule_after_review = false; // true OR false
/* ------------------------------------------------------------------------- */

$ch = curl_init('https://www.google.com/maps?cid='.$cid);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla / 5.0 (Windows; U; Windows NT 5.1; en - US; rv:1.8.1.6) Gecko / 20070725 Firefox / 2.0.0.6");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
$result = curl_exec($ch);
curl_close($ch);
$pattern = '/window\.APP_INITIALIZATION_STATE(.*);window\.APP_FLAGS=/ms';
if ( preg_match($pattern, $result, $match) ) {
  $match[1] = trim($match[1], ' =;'); // fix json
  $reviews = json_decode($match[1]);
  $reviews = ltrim($reviews[3][6], ")]}'"); // fix json
  $reviews = json_decode($reviews);
  $customer = $reviews[0][1][0][14][18];
  $reviews = $reviews[0][1][0][14][52][0];
}

$myfile = fopen("testfile".time().".json", "w");
fwrite($myfile, json_encode($reviews));
fclose($myfile);

function getReviewInfo($reviewPassed) {
    $author = $reviewPassed[0][1];
    $timestamp = $reviewPassed[1];
    $content = $reviewPassed[3];
    $stars = $reviewPassed[4];
    $fullreview = [$author, $timestamp, $content, $stars];
    return $fullreview;
}

function printStars($numStars) {
    if ($numStars < 5) {
        for ($i = 0; $i < $numStars; $i++) {
            echo "⭐";
        }
        $emptyStars = 5 - $numStars;
        for ($i = 0; $i < $emptyStars; $i++) {
            echo "☆";
        }
    }
    else {
        echo "⭐⭐⭐⭐⭐";
    }
}

if (isset($reviews)) {
    foreach ($reviews as $review) {
        $returnedReview = getReviewInfo($review);
        echo "<div class=\"review\"><div class=\"reviewTop\">
            <p>", printStars($returnedReview[3]), "</p>
            <p>", $returnedReview[1], "</p>
        </div>
        <br>
        <p>\"", $returnedReview[2], "\"</p>
        <p>-", $returnedReview[0], "</p></div>";
    }
}


?>

            </div>
        </div>
    </div>
</div>
