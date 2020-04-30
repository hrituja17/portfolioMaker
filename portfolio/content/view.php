<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hrituja Sen">
    <meta name="description" content="Make your portfolio">
    <meta name="keywords" content="portfolio, make, create, resume, cv, profile">
    <script src="https://kit.fontawesome.com/a24d97662a.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <link href="../styles/style.css" rel="stylesheet">

    <title>View Your Portfolio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info p-3">
        <div class="container">
            <a class="navbar-brand" href="home.html">MakeYourResumé</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mt-15 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html">About Us</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['generate'])) {
        $target = "../images/".basename($_FILES['profile']['name']);
    }

    $image = $_FILES['profile']['name'];
    $name = $_POST['name'];
    $tagline = $_POST['tagline'];
    $quali = $_POST['qualification'];
    $place = $_POST['place'];
    $language = $_POST['language'];
    $profi = $_POST['proficiency']; // Select menu #1
    $technology = $_POST['technology'];
    $expertise = $_POST['expertise']; // Select menu #2
    $pname = $_POST['pname'];
    $pdesc = $_POST['pdescription'];
    $plink = $_POST['plink'];
    $cname = $_POST['cname'];
    $clink = $_POST['clink'];
    $wpost = $_POST['wpost'];
    $worg = $_POST['worg'];
    $wdesc = $_POST['wdesc'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $stackof = $_POST['stackoverflow'];
    $website = $_POST['website'];
    $medium = $_POST['medium'];

    // Arrays for select menus
    $proficiency_options = array("elementary" => "Elementary Proficiency", "limited" => "Limited Working Proficiency", "professional" => "Full Professional Proficiency", "native" => "Native or Bilingual Proficiency");
    $expertise_options = array("beginner" => "Beginner", "intermediate" => "Intermediate", "advanced" => "Advanced");

    $sql = "INSERT into details (name, image, tagline, qualification, place, language, proficiency, technology, expertise, pname, pdescription, plink, cname, clink, wpost, worg, wdesc, email, facebook, instagram, linkedin, github, stackoverflow, website, medium)
            VALUES ('".$name."', '".$image."' , '".$tagline."', '".$quali."','".$place."', '".$language."', '".$proficiency_options[$profi]."', '".$technology."', '".$expertise_options[$expertise]."', '".$pname."', '".$pdesc."', '".$plink."', '".$cname."', '".$clink."', '".$wpost."', '".$worg."', '".$wdesc."', '".$email."', '".$facebook."', '".$instagram."', '".$linkedin."', '".$github."', '".$stackof."', '".$website."', '".$medium."')";

    if($conn->query($sql) === TRUE && (move_uploaded_file($_FILES['profile']['tmp_name'], $target))){
        echo '<div id="main">';
            echo '<div class="container">';
                echo '<div class="text-center">';
                    echo "<h1>Here is your portfolio!</h1>";
                echo '</div>';
                echo '<div class="pfbox">';
                    echo '<div class="topbox">';
                        echo '<div class="text-left">';
                            echo "<h1>$name</h1>";
                            echo "<h4 class='tagline'>$tagline</h4>";
                        echo '</div>';
                        echo '<div class="text-right">';
                            echo '<img class="roundedimage" src="../images/'.$image.'">';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="bottombox">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>QUALIFICATIONS</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo "<h4>$quali</h4>";
                                    echo "<h6>$place</h6>";
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>CONTACT</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="row">';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$email.'>Email</a></h6>";
                                    echo '</div>';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$facebook.'>Facebook</a></h6>";
                                    echo '</div>';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$instagram.'>Instagram</a></h6>";
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$linkedin.'>LinkedIn</a></h6>";
                                    echo '</div>';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$stackof.'>Stack Overflow</a></h6>";
                                    echo '</div>';
                                    echo '<div class="text-center col-sm-4">';
                                        echo "<h6><a href='.$github.'>GitHub</a></h6>";
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="row">';
                                    echo '<div class="text-center col-sm-6">';
                                        echo "<h6><a href='.$medium.'>Medium</a></h6>";
                                    echo '</div>';
                                    echo '<div class="text-center col-sm-6">';
                                        echo "<h6><a href='.$website.'>Website</a></h6>";
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<hr class="styledhr">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>LANGUAGES</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo "<h4>$language</h4>";
                                    echo "<h6>$proficiency_options[$profi]</h6>";
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>SKILLS</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="row">';
                                    echo '<div class="col-sm-6 col-md-6 text-center">';
                                        echo "<h4>$technology</h4>";
                                    echo '</div>';
                                    echo '<div class="col-sm-6 col-md-6">';
                                        echo "<h5>$expertise_options[$expertise]</h5>";
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';  
                        echo '<hr class="styledhr">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>PROJECTS</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo "<h3>$pname</h3>";
                                    echo "<h6>$pdesc</h6>";
                                    echo "<h5 class='link'><a href='$plink'>$plink</a></h5>";
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-sm-12 col-md-6">';
                                echo '<div class="text-center">';
                                    echo "<h3>CERTIFICATIONS</h3>";
                                    echo "<hr>";
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo "<h4>$cname</h4>";
                                echo '</div>';
                                echo '<div class="text-center">';
                                    echo "<h5 class='link'><a href='$clink'>$clink</a></h5>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';  
                        echo '<hr class="styledhr">';
                        echo '<div>';
                            echo '<div class="text-center">';
                                echo "<h3>WORK EXPERIENCE</h3>";
                                echo "<hr>";
                            echo '</div>';
                            echo '<div class="text-center">';
                                echo "<h3>$wpost</h3>";
                                echo "<h5>at - $worg</h5>";
                                echo "<h6>$wdesc</h6>";
                            echo '</div>';
                        echo '</div>';  
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="text-center">';
                echo '<button class="btn btn-primary btn-lg">Make Another</button>';
            echo '</div>';
        echo '</div>';
    } else {
        echo "Error is: " . $conn->error;
    }

    $conn->close();
?>

    <script src="../js/core.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>