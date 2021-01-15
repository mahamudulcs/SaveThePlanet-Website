<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Greenland' ");
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
    <title>Greenland</title>
    <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="greenland.css">
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
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../India/india.php">India</a></li>	
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../westafrica/westafrica.php">West Africa</a></li>
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
                            <h1 style="color: rgb(56, 138, 141);" ><strong>The Melting Glaciers </strong></h1>
                            <p style="color: #fff;">The Greenland Ice Sheet is rapidly melting, having lost 3.8 trillion tons of ice between 1992 and 2018, a new study from NASA and the European Space Agency (ESA) finds. The study combined 26 independent satellite datasets to track global warming's effect on Greenland, one of the largest ice sheets on Earth, and the ice sheet melt's impact on rising sea levels. The findings, which forecast an approximate 3 to 5 inches (70 to 130 millimeters) of global sea level rise by 2100, are in alignment with previous worst-case projections if the average rate of Greenland's ice loss continues
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- section 2 -->
        <section class="section2" style="background-color: #2d796d ">
            <div class="section-2-title">
                <h1> EFFECTS</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Massive Floodings</strong></span>
                        <p>As a rule of thumb, for every centimeter rise in global sea level, another 6 million people are exposed to coastal flooding around the planet," said Andrew Shepherd, lead author and scientist from the University of Leeds in the United Kingdom. "On current trends, Greenland ice melting will cause 100 million people to be flooded each year by the end of the century, so 400 million in total due to sea level rise. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Less ice on land means sea level rises</strong></span>
                        <p>Sea level has been rising about 1-2 millimeters each year as the Earth has become warmer. Some of the sea level rise is due to melting glaciers and ice sheets which add water to the oceans that was once trapped on land. Certain glaciers and ice sheets are particularly vulnerable. Global warming has caused them to be less stable, to move faster towards the ocean, and add more ice into the water. These areas with less stable ice include the Greenland Ice Sheet and the West Antarctic Ice Sheet.
                        </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Melting ice causes more warming</strong></span>
                        <p>When solar radiation hits snow and ice, approximately 90% of it is reflected back out to space. As global warming causes more snow and ice to melt each summer, the ocean and land that were underneath the ice are exposed at the Earth’s surface. Because they are darker in color, the ocean and land absorb more incoming solar radiation, and then release the heat to the atmosphere. This causes more global warming.</p>
                    </div>
                </div>
                
            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>The Ice Sheets </h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong> What is an ice sheet?</strong> </h2>
                                <p>An ice sheet is a mass of glacial land ice extending more than 50,000 square kilometers (20,000 square miles). The two ice sheets on Earth today cover most of Greenland and Antarctica. During the last ice age, ice sheets also covered much of North America and Scandinavia. <br><br>Together, the Antarctic and Greenland ice sheets contain more than 99 percent of the freshwater ice on Earth. The Antarctic Ice Sheet extends almost 14 million square kilometers (5.4 million square miles), roughly the area of the contiguous United States and Mexico combined. The Antarctic Ice Sheet contains 30 million cubic kilometers (7.2 million cubic miles) of ice. The Greenland Ice Sheet extends about 1.7 million square kilometers (656,000 square miles), covering most of the island of Greenland, three times the size of Texas.
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong>Why are ice sheets important?</strong> </h2>
                            <p>Ice sheets contain enormous quantities of frozen water. If the Greenland Ice Sheet melted, scientists estimate that sea level would rise about 6 meters (20 feet). If the Antarctic Ice Sheet melted, sea level would rise by about 60 meters (200 feet). <br> <br>

                                The Greenland and Antarctic ice sheets also influence weather and climate. Large high-altitude plateaus on the ice caps alter storm tracks and create cold downslope winds close to the ice surface. <br> <br>
                                
                                In addition, the layers of ice blanketing Greenland and Antarctica contain a unique record of Earth's climate history.
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
                            <h2> <strong>Has climate change started to affect Earth's ice sheets?</strong> </h2>
                            <p>The mass of ice in the Greenland Ice Sheet has begun to decline. From 1979 to 2006, summer melt on the ice sheet increased by 30 percent, reaching a new record in 2007. At higher elevations, an increase in winter snow accumulation has partially offset the melt. However, the decline continues to outpace accumulation because warmer temperatures have led to increased melt and faster glacier movement at the island's edges. <br> <br>Most of Antarctica has yet to see dramatic warming. However, the Antarctic Peninsula, which juts out into warmer waters north of Antarctica, has warmed 2.5 degrees Celsius (4.5 degrees Fahrenheit) since 1950. A large area of the West Antarctic Ice Sheet is also losing mass, probably because of warmer water deep in the ocean near the Antarctic coast. In East Antarctica, no clear trend has emerged, although some stations appear to be cooling slightly. Overall, scientists believe that Antarctica is starting to lose ice, but so far the process has not become as quick or as widespread as in Greenland.
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
                    $commandText = "insert into Greenland (name,comment,date) VALUES ('" . $name . "', '" . $content . "', '" . date('Y-m-d') . "')";



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

                    $commandText = "SELECT * from Greenland";
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