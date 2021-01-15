<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Philippines' ");
    $row = mysqli_fetch_assoc($result);
    $result2 = $conn->query("SELECT * from pictures where subpages = 'Main'");
    $main = mysqli_fetch_assoc($result2);
?>
<?php session_start(); ?>
<!-- start of the html code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>philippines</title>
          <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="philippines.css">
<!-- get php code into the background images -->
<style>
    .section1-container-left {
  background: url(<?php echo $row['pic1']; ?>) no-repeat center / cover;
}
    .section2-single-box:nth-child(1) .section2-img-area{
    background-image: url(<?php echo $row['pic2']; ?>);
}

.section2-single-box:nth-child(2) .section2-img-area{
    background-image: url(<?php echo $row['pic3']; ?>);
}

.section2-single-box:nth-child(3) .section2-img-area{
    background-image: url(<?php echo $row['pic4']; ?>);
}
/* Style for the feedback comment section */
.feedback-section-box{
        text-align: center; 
        background: #fff;
        border: 2px solid #292929;
        padding: 10px;
        border-radius: 10px;
    }
    .feedback-section-h2 {
        color: #E05A47;
    }

    .feedback-section-button {
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .feedback-section-h1 {
        margin-bottom: 20px;
        font-size: 25px;
    }
    
</style>
<div id="info-box"></div>
</head>
<body>
    <section id="main">
        <!--navigation-------------------------------->
        <nav>
            <!--logo--->
            <a href="../index.php" class="logo">
            <img src="<?php echo $main['banner']; ?>" alt="Logo" width="20%" >
            </a>
            <!--menu--------->
            <div class="toggle"></div>
            
            <ul class="menu" id="menu">
                <li><a href="../australia/Australia.php">Australia</a></li>	
                <li><a href="../brazil/brazil.php">Brazil</a></li>	
                <li><a href="../coralsea/coralsea.php">Coral Sea</a></li>	
                <li><a href="../greenland/greenland.php">Greenland</a></li>	
                <li><a href="../India/india.php">India</a></li>	
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../westafrica/westafrica.php">West Africa</a></li>
            </ul>

            <ul class="menu">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../aboutus.html">About</a></li>		
                <li><a href="#">Forum</a></li>	
                <li id="login_li"><a href="../login/login.php">Log in</a></li>
                <li id="logout_li"><a href="../login/logout.php">Log out</a></li>
                <li id="logout_li"><a href="../login/register.php">Register</a></li>	
            </ul>
	
        </nav>
        <div class="banner">
        <img src="<?php echo $row['banner']; ?>" alt="">
        </div>
<!-- section 1 -->
<section class="section1">
            <div class="section-1">
                <div class="section1-container">
                    <div class="section1-container-left"></div>
                    <div class="section1-container-right">
                        <div class="content">
                            <h1><strong>What is Rising Sea Levels?</strong></h1>
                            <p style="color: #fff;">Global Sea levels have been steadly rising every year because of the increase in temperature. The rise in temperature causes thermal expansion because water expands as it warms and there is also the melthing in-land ice. <br><br> Another problem is the Local rising sea levels because depending on where a person live the rise may be more significant then the Global average. The Philippines is one of the countries being impacted the most by rising sea levels because it is an island nation surrounded by the ocean.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2" style="background-color: #22ADBF ">
            <div class="section-2-title">
                <h1>Why should we concern?</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>The Real Problem</strong></span>
                        <p>The continued warming of the atmosphere and water will rise the sea level at a higher rate than it is now. In an article published by the New York Times, it is mentioned that homes in Batason, Philippines become flooded and the amount of water increases each year. The lower the elevation of the land the worst the flooding. The local government proposed that the residents move to new homes. Globally eight of the largest cities are located near the coast. Almost 40% of the US population lives in high-population-density coastal areas. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Philippines Statistics and Predictions</strong></span>
                        <p>According to an article published by the Journal Nature Communications around 250 million people in the world currently live on below the current annual flood levels and 110 million live below the high tide levels. In the philippines it is estimated that by 2050 5.2 - 7 million people will be under the high tide and by 2100 the numbers may increase to 11 million. In 2019 the Metropolitan Manila Development Authority (MMDA) admitted that 60% of the drainage systems were clogged and silted and only 53/170 flood prevention programs are completed.
                        </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Events Caused by Higher Sea levels</strong></span>
                        <p>There will be more deadly and destructive storm surges happening further inland than before. Many places that are susceptible to flooding will have more frequent high tide flooding or "nuisance" flooding. These types of flooding are usually disruptive and expensive which will affect taxpayers as their money may have to go toward damages that could have been avoided. In the Philippines these storms and floodings will affect the agriculture and fishing sectors the most and increase typhoons risks.</p>
                    </div>
                </div>

            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>TAKE INITIATIVE TODAY!</h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong> Volunteer your time</strong> </h2>
                                <p>When talking about rising sea levels, the challenge is sometimes to raise awareness of a problem that has yet to affect the citizens’ daily lives. This is not the case in Manila, where severe flooding happens frequently. The Philippines is one of the most disaster-prone countries in the world, experiencing more than 20 typhoons a year. <br> <br>

                                    The majority of the city’s drainage systems are sub-par, and cannot evacuate water from heavy rainfall fast enough to avoid flooding. Water subsidence took an average of 18.5 minutes in 2017, and 30 minutes in 2018, so things are getting worse.
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Help fight climate change</strong> </h2>
                            <p>The Philippines is one of the world's most vulnerable countries to climate disasters. With more than 7,100 islands and an estimated 36,298 kilometers of coastline, more than 60 percent of the Filipino population resides within the coastal zone and are acutely impacted by climate change. Dangers include food and fresh water scarcity, damage to infrastructure and devastating sea-level rise. However, with an innate understanding of the acute impacts of climate change, the Philippines is one of the world's strongest voices leading the global movement, combatting the problem and ultimately setting an example in adapting to climate change. <br><br>
                                The Philippines is one of the best-positioned countries to make a difference in the climate fight. The Manila training is that the trainees leave inspired to lead change in their own communities, including supporting and advocating for the crucial policies and changes needed as laid out by the Paris Agreement.
                            </p>
                        </div>
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic6'] ;?>">
                        </div>
                        
                    </div>
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic7'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong> Spread Awareness</strong> </h2>
                            <p>The Philippines is highly vulnerable to the impacts of climate change, including sea level rise, increased frequency of extreme weather events, rising temperatures and extreme rainfall. This is due to its high exposure to natural hazards (cyclones, landslides, floods, droughts), dependence on climate-sensitive natural resources and vast coastlines where all major cities and the majority of the population reside. The Philippines lies in the world’s most cyclone-prone region, averaging 19–20 cyclones each year, of which 7–9 make landfall.  <br> <br> Therefor its crucial to spread awareness about this issue to talk action soon!
                            </p>
                        </div>
                    </div>
                </section>
                <section class="feedback-section">
                <h1 class="feedback-section-h1">Comment Section</h1>
                <div class="feedback-section-box">
                    <h2 class="feedback-section-h2" id="sign_in_username">You are signed in as: <?php echo $_SESSION['login_user']; ?></h2>
                    <button class="feedback-section-button" id="login_button" onclick="window.location.href='../login/login.php';">
                        Log in
                    </button>
                
                <form method="post" id="feedbackform" form="feedbackform">
                    <!-- Message: <br /><textarea name=“message” rows=“15” cols=“40”></textarea><br /> -->
                    <textarea class="feedback-section-textarea" name="comment" id="FeedbackText" form="feedbackform" class="text" rows="5" cols="50">
                        Enter comment here...
                    </textarea><br><br>
                    <input type="submit" name="button2" class="button" value="Leave a new comment">
                </form>
            </div>
            <?php
                if (isset($_POST['button2'])) {
                    if (!isset($_POST['comment'])) {
                        echo "<script type='text/javascript'>alert('Please submit a comment that is not empty');</script>";
                    } elseif (!isset($_SESSION['login_user'])){
                        echo "<script type='text/javascript'>alert('Please log in to submit your comment');</script>";
                    } else {
                        post();
                        echo "<script type='text/javascript'>alert('Comment Submitted');</script>";;
                    }
                }

                function post()
                {
                    $mysqli = new mysqli("localhost", "xshou", "el5Glyp!", "xshou");
                    /* check connection */
                    if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                    }

                    $name = $_SESSION['login_user'];
                    $content = $_POST['comment'];
                    $commandText = "insert into Philippines (name,comment,date) VALUES ('" . $name . "', '" . $content . "', '" . date('Y-m-d') . "')";



                    if ($mysqli->query($commandText) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $commandText . "<br>" . $mysqli->error;
                        echo $commandText;
                    }
                    $mysqli->close();
                }

                get();
                function get()
                {
                    $mysqli = new mysqli("localhost", "xshou", "el5Glyp!", "xshou");

                    /* check connection */
                    if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                    }

                    $commandText = "SELECT * from Philippines";
                    $result = $mysqli->query($commandText);

                    // printf($result);

                    // /* Select queries return a resultset */
                    if ($result) {
                        // printf("Select returned %d rows.\n", $result->num_rows);
                        // print("<br/>");
                        $rows = array();
                        /* free result set */
                        while ($row = mysqli_fetch_assoc($result)) {
                            array_push($rows, $row);
                        }
                        function cmpDate($row1, $row2)
                        {
                            return $row1['date'] > $row2['date'];
                        }
                        usort($rows, "cmpDate");

                        $table = "<table style=\"width: 100%; border-collapse:separate; border-spacing:2em;\">";
                        for ($i = 0; $i < count($rows); $i++) {
                            // printf("<div>%s</div> <div>%s</div> <div>%s</div>", $rows[$i]['name'], $rows[$i]['comment'], $rows[$i]['date']);
                            $row = addRowToTable($rows[$i]['name'], $rows[$i]['comment'], $rows[$i]['date']);
                            $table = $table . $row;
                        }
                        $table = $table . "</table>";
                        $wholePage = "<body style=\"background-color: white\">";
                        $wholePage = $wholePage . "<div style=\" margin: auto; overflow: auto;\">";
                        // $wholePage = $wholePage . "<img src=\"logo.png\" alt=\"Logo\" width=\"20%\" style=\"z-index: 1\">";
                        $wholePage = $wholePage . "<br>";
                        $wholePage = $wholePage . "<h1 style=\"text-align: center; font-size: 1vw;\">Thanks your feedback!</h1>";
                        $wholePage = $wholePage . $table;
                        $wholePage = $wholePage . "</div>";
                        $wholePage = $wholePage . "</body>";
                        echo $wholePage;
                        // $myVar = htmlspecialchars($wholePage, ENT_QUOTES);
                        // echo $myVar;
                        $result->close();
                    }
                    $mysqli->close();
                }

                function addRowToTable($name, $content, $date)
                {
                    $rowHTML = "<tr>";
                    $rowHTML = $rowHTML . "<td style=\"background-color: green; width:2em; height:2em; padding-bottom:0.5em\"></td>";
                    $rowHTML = $rowHTML . "<td style=\"font-size: 2em\">" . $name . "</td>";
                    $rowHTML = $rowHTML . "<td style=\"font-size: 1em\">" . $content . "</td>";
                    $rowHTML = $rowHTML . "<td style=\"font-size: 1em\">" . $date . "</td>";
                    $rowHTML = $rowHTML . "</tr>";
                    // $myVar = htmlspecialchars($rowHTML, ENT_QUOTES);
                    // echo $myVar;
                    return $rowHTML;
                }
                ?>
                </section>
            </div>

        </div><br><br>


<!-- back to top link -->
        <div class="backtotop">
            <a href="#main">Back to Top
                <i class='fas fa-arrow-alt-circle-up'></i>
            </a>
        </div> <br><br> 

<!-- Footer  -->
        <footer>
            <div class="footer">
                <div class="footer-logo">
                    <a href="../index.php" class="logo">
                    <img src="<?php echo $row['pic8']; ?>" alt="Logo" width="20%" >
                    </a>
                </div>
                <div class="sub-text">
                    <ul>
                        <h4>Other topics</h4>
                        <li class="polar"><a href="../alaska/Alaska.php"> Alaska</a></li>
                        <li class="ice"><a href="../greenland/greenland.php">Greenland</a> </li>
                        <li class="crop"><a href="../westafrica/westafrica.php"> West Africa</a></li>
                        <li class="natural"><a href="../India/india.php"> India</a></li>
                        <li class="wild"><a href="../brazil/brazil.php"> Brazil</a></li>
                        <li class="rise"><a href="../philippines/philippines.php"> Philippines</a></li>
                        <li class="heat"><a href="../australia/Australia.php"> Australia</a></li>
                        <li class="coral"><a href="../coralsea/coralsea.php"> Coral Sea</a></li>
                    </ul>
                </div>
                <div class="sub-text">
                    <ul>
                        <h4>Developers</h4>
                        <li><a href="../aboutus.html">About Us</a></li>
                        <li><a href="">Contact</a></li>
                        <li id="login_li_bottom"><a href="../login/login.php">Log in</a></li>
                        <li id="logout_li_bottom"><a href="../login/logout.php">Log out</a></li>
                        <li><a href="../login/register.php">Register</a></li>
                    </ul>
                </div>
                <script>
                    let login_user = '<?php echo $_SESSION['login_user']; ?>';
                    if (login_user && login_user != "") { 
                        document.getElementById("login_li").style.display = "none";
                        document.getElementById("logout_li").style.display = "";
                        document.getElementById("login_li_bottom").style.display = "none";
                        document.getElementById("logout_li_bottom").style.display = "";
                        document.getElementById("login_button").style.display = "none";
                        document.getElementById("sign_in_username").style.display = "";
                        console.log("log in")
                    } else {
                        document.getElementById("login_li").style.display = "";
                        document.getElementById("logout_li").style.display = "none";
                        document.getElementById("login_li_bottom").style.display = "";
                        document.getElementById("logout_li_bottom").style.display = "none";
                        document.getElementById("login_button").style.display = "";
                        document.getElementById("sign_in_username").style.display = "none";
                        console.log("not log in")
                    }
                </script>
            </div>
               
        </footer>
    </section>

</body>
</html><?php $result.close(); ?>