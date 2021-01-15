<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Westafrica' ");
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
    <title>West Africa</title>
    <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="westafrica.css">
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
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../alaska/Alaska.php">Alaska</a></li>
            </ul>

            <ul class="menu">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../aboutus.html">About</a></li>		
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
                            <h1><strong>Agricultural Risk </strong></h1>
                            <p style="color: #fff;">Achieving food security goals in West Africa will depend on the capacity of the agricultural sector to feed the rapidly growing population and to moderate the adverse impacts of climate change. Indeed, a number of studies anticipate a reduction of the crop yield of the main staple food crops in the region in the coming decades due to global warming.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- section 2 -->
        <section class="section2" style="background-color: #d49042 ">
            <div class="section-2-title">
                <h1>EFFECTS OF CLIMATE CHANGE </h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Climate-stressed African agriculture</strong></span>
                        <p>Changes in climate such as higher temperatures and reduced water supplies, along with other factors like biodiversity loss and ecosystems degradation, affect agriculture. According to Science, a leading international research journal, by 2030 Southern Africa and South Asia will be the two regions in the world whose crop production is most affected by climate change. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Protecting water resources</strong></span>
                        <p>Increasing crop production amidst climate change has been done before, and analysts believe that African countries need to incorporate this knowledge in their planning. They will also need to protect and fortify their water resources, which are critical to food security.

                            In the coming years, water for agriculture will be stretched to a painful extent. In Africa, 95% of agriculture relies on rainfall for water, according to the United Nations Environment Programme (UNEP). The World Bank notes it is very likely that by 2100 the total availability of water in all of Africa could decline by more than 10%.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Biodiversity</strong></span>
                        <p>Biodiversity losses and ecosystem degradation will affect the quality of the soil and the vegetation upon which livestock depends, states the World Bank, adding that potential reductions in water, biodiversity and crops should compel Africa to pay closer attention to its current food system. In short, Africa needs an approach that works with nature, not against it.
                        </p>
                    </div>
                </div>
            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>Impact of Risks</h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong>  Impacts on producers</strong> </h2>
                           <p>Agricultural risks are among the major reasons for poverty traps and low growth, as they could influence
                            decisions of smallholders in favour of subsistence production with low risks/low returns. Production
                            and price shocks compromise the food and nutrition security of poor consumers in urban areas,
                            while discouraging investment in the supply chain of food and agricultural products. <br><br> Different studies
                            have shown that there is a strong negative relationship between GDP growth and shocks, and that the
                            impact is larger in developing countries with less developed financial systems</p> 
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong>  Impact on consumers (households and communities)</strong> </h2>
                            <p>Most high-income consumers are only marginally affected by a rise in food commodity prices since only
                                a small share of their incomes is spent on food. Moreover, they consume processed products in which the
                                share of raw commodities, such as wheat, in the final consumption basket is small. <br><br> Naturally, the situation
                                is very different for poor families in developing countries, where the share of food in their total expenditure
                                is very high, and consumption of processed products limited. Shocks such as droughts and food price spikes
                                can affect individuals who normally have sufficient access to food, threatening the stability of food security. 
                            </p>
                        </div>
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic6']; ?>">
                        </div>
                        
                    </div>
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic7']; ?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong>The nature of agricultural risks in Africa </strong> </h2>
                            <p>Africa is one of the regions in the world most affected by food price volatility and production variability.
                                Spiking and volatile food prices have created uncertainty and risks for producers, traders and processors,
                                and resulted in increased food insecurity for consumers.  <br> <br>The continent’s recurrent and long history
                                of rainfall fluctuations of varying lengths and intensities along with inadequate infrastructure, limited
                                storage facilities and market imperfections are among the major causes for food price and supply variability. Food and agricultural production in sub-Saharan African countries is highly exposed to a wide range
                                of natural disasters, with hydro-meteorological hazards affecting the largest number of people. 
                                
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
                    $commandText = "insert into WestAfrica (name,comment,date) VALUES ('" . $name . "', '" . $content . "', '" . date('Y-m-d') . "')";



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

                    $commandText = "SELECT * from WestAfrica";
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