<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
$result = $conn->query("SELECT * from pictures where subpages = 'Alaska' ");
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
    <title>Alaska</title>
    <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" href="alaska.css">
    <!-- get php code into the background images -->
    <style>
        .section2-single-box:nth-child(1) .section2-img-area {
            background-image: url(<?php echo $row['pic2']; ?>);
        }

        .section2-single-box:nth-child(2) .section2-img-area {
            background-image: url(<?php echo $row['pic3']; ?>);
        }

        .section2-single-box:nth-child(3) .section2-img-area {
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
                <img src="<?php echo $main['banner']; ?>" alt="Logo" width="20%">
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
                    <div class="section1-container-left" style="background: url(<?php echo $row['pic1']; ?>) no-repeat center / cover;"></div>
                    <div class="section1-container-right">
                        <div class="content">
                            <h1><strong>The Alaskan Polar Bears </strong></h1>
                            <p style="color: #fff;">They are the largest bear in the world and the Arctic's top predator, polar bears are a powerful symbol of the strength and endurance of the Arctic. The polar bear's Latin name, Ursus maritimus, means "sea bear." It spends much of its life in, around, or on the ocean–predominantly on the sea ice. In the United States, Alaska is home to two polar bear subpopulations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section 2 -->
        <section class="section2" style="background-color: #e77e5e ">
            <div class="section-2-title">
                <h1>HOW ARE THEY EFFECTED?</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Decrease in Food Supply</strong></span>
                        <p>With receding ice, polar bears have a hard time maintaining their food supply, ringed and bearded seals, which also rely on sea ice. Mother bears cannot pack on enough body weight to nurse their cubs and many bears are left starving. Some bears are even drowning as they swim further and further distances out to sea to find food. Cubs who swim too far to find food often perish. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Loss of Habitat</strong></span>
                        <p>Polar bears rely heavily on sea ice for traveling, hunting, resting, mating and, in some areas, maternal dens. As their sea ice habitat recedes earlier in the spring and forms later in the fall, polar bears are increasingly spending longer periods on land, where they are often attracted to areas where humans live. Due to this they have effectively lost habitat.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Endangerment</strong></span>
                        <p>Melting sea ice is one of the most pressing threats to polar bears’ survival. As a result, in 2008 the Southern Beaufort Sea polar bear was listed as a threatened species in the United States under the Endangered Species Act. The International Union for Conservation of Nature’s Red List of Threatened Species currently classifies the polar bear as ‘vulnerable.’
                        </p>
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

                        <div class="section3-writing">
                            <h2> <strong> Volunteer your time</strong> </h2>
                            <p>Depending on where you live, you can also volunteer with any of the following organizations that help polar bears: <br> <br>
                                <ul>
                                    <li>The only organization dedicated entirely to preserving wild polar bear populations, Polar Bears International needs the help of dedicated volunteers for their education and outreach efforts. You can sign up to be a part of the volunteer team that travels to Manitoba, Canada for two weeks each year, with the goal of educating visitors about polar bears and the importance of reversing climate change. </li><br> <br>
                                </ul>
                                <ul>
                                    <li>Become a volunteer researcher through the EarthWatch Institute, and study climate change in the Arctic. You’ll work alongside scientists to help measure the effects of climate change and shrinking sea ice, and monitor the health of the rapidly-changing Arctic ecosystem.</li><br> <br>
                                </ul>
                                <ul>
                                    <li>Volunteer in Cochrane, Canada at the Polar Bear Habitat. The Habitat accepts both local and international volunteers, with volunteer programs ranging from 2—4 weeks. You’ll gain valuable field experience, and will help monitor the behavior of polar bears, collect data, and maintain the habitat. </li>
                                </ul>
                            </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Help fight climate change</strong> </h2>
                            <p>Polar bears are just one small part of our environment that need protection. From saving our honeybees to protecting the ocean, many areas of our planet need relief from the effects of climate change. To make an impact no matter where you live.<br> <br>
                                <ul>
                                    <li>Try carpooling or biking to work. Transportation is a leading cause of greenhouse gas emissions, and making your daily commute a little greener will go a long way toward a healthy environment. </li><br> <br>
                                </ul>
                                <ul>
                                    <li>Start a charity fundraiser for a nonprofit that helps the environment. Choose an organization whose mission you support. </li><br> <br>
                                </ul>
                                <ul>
                                    <li>Consider how your diet impacts the planet. Reduce your consumption of animal products, and buy local produce when possible.</li><br> <br>
                                </ul>
                                <ul>
                                    <li>Start a community project in support of the environment. One fun idea is to gather friends and neighbors together and host a tree-planting party. Coordinate with your city to find a suitable location in need of trees, and start a fundraiser to cover the cost of supplies. </li><br> <br>
                                </ul>
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
                            <h2> <strong>Spread Awareness</strong> </h2>
                            <p>There are many charities that support both the environment, as well as polar bear conservation. Online fundraising for environmental charities can be fun and easy, and is a great way to include family and friends in your efforts to protect the planet. Use these top fundraising tips to make sure your fundraiser is a success: <br> <br>
                                <ul>
                                    <li>Connect with your donors and tell your story. Explain what makes this cause so important to you. </li><br> <br>
                                </ul>
                                <ul>
                                    <li>Host a fundraising event to build community support and increase donations. Ideas include throwing a charity sporting event, hosting a car wash, or starting a bake sale.</li><br> <br>
                                </ul>
                                <ul>
                                    <li>Contact your local media to increase public interest for your fundraiser, and possibly even attract the support of businesses in your area.</li><br> <br>
                                </ul>
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
                    $commandText = "insert into Alaska (name,comment,date) VALUES ('" . $name . "', '" . $content . "', '" . date('Y-m-d') . "')";



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

                    $commandText = "SELECT * from Alaska";
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
                        <img src="<?php echo $row['pic8']; ?>" alt="Logo" width="20%">
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

</html><?php $result . close(); ?>