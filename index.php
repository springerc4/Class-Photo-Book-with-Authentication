<?php
    session_start();
    require_once('auth.php');
    if (!isset($_SESSION['logged'])) {
        $_SESSION['logged'] = "false";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
    </head>
    <body>
        <?php
            // Import data and functions from separate PHP files
            require_once('functions.php');
            require_once('json_util.php');
            $student_array = convertToPhp('class.json');
        ?>
        <!-- Heading begins here for front page -->
        <div class="container text-center">
            <h1>
                <?php
                    // Print class name
                    echo 'This is ASE 230 - Class of Fall 2021';
                ?>
            </h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3>
                            <?php
                                echo 'Our Creative Team';
                            ?>
                        </h3>
                        <p>
                            <?php
                                echo 'Appland is completely creative, lightweight, clean & super responsive app landing page.';
                            ?>
                        </p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                // Display each card by passing the index and data array to the function
                for ($i = 0; $i < count($student_array); $i++) {
                    displayCard($i, $student_array);
                }
                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary" style="text-align: center;">
                        <a href="create.php" style="text-decoration: none; color: white;">Generate User</a>
                    </button>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-primary" style="text-align: center;">
                        <a href="signin.php" style="text-decoration: none; color: white;">Sign In</a>
                    </button>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-primary" style="text-align: center;">
                        <a href="signup.php" style="text-decoration: none; color: white;">Sign Up</a>
                    </button>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-primary" style="text-align: center;">
                        <a href="signout.php" style="text-decoration: none; color: white;">Sign Out</a>
                    </button>
                </div>
            </div>
        </div>
        <!-- Import JS from Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>