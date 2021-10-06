<?php
    // Check if user email is banned or active
    function contains($csv_file, $user_input) {
        $contains = false;
        $handle = fopen($csv_file, "r");
        $array = fgetcsv($handle);
        foreach ($array as $users) {
            if ($user == $user_input) {
                $contains = true;
                break;
            }
        }
        fclose($handle);
        return $contains;
    }
    function passwordMatch($password) {
        
    }
    // Function to retrieve someones age in years
    function getAge($birthday) {
        date_default_timezone_set('America/Kentucky/Louisville');
        $currentDate = date('Y-m-d');
        $difference = date_diff($birthday, date_create($currentDate));
        return $difference->format('%y Years Old');
    }
    // Function for how long ago someone was born
    function getSpecificAge($birthday) {
        date_default_timezone_set('America/Kentucky/Louisville');
        $currentDate = date('Y-m-d');
        $difference = date_diff($birthday, date_create($currentDate));
        return $difference->format('I was born %y years, %m months, and %d days ago.');
    }
?>
<?php
    // Display the cards on the index page using an index value and array as input
    function displayCard($i, $student_info) {
?>
    <!-- Card template starts here -->
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb">
                <a href= 'detail.php?index=<?= $i ?>'> 
                    <img src=<?php echo $student_info[$i]['profile pic'] ?> height="250">
                </a>
                <!-- Social Info-->
                <div class="social-info"><a href= ''><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href=""><i class="fa fa-linkedin"></i></a></div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
                <h6>
                    <?php
                        // Display first and last name
                        echo $student_info[$i]['first name'].' '.$student_info[$i]['last name'].'<br>'; 
                    ?>
                </h6>
                <p>
                    <?php
                        // Display the role or occupation of the person
                        echo $student_info[$i]['role'].'<br>';
                    ?>
                </p>
                <p>
                    <?php
                        // Determine academic year for each student
                        echo 'Year: ';
                        switch ($student_info[$i]['year']) {
                            case "freshman":
                                echo '|';
                                break;
                            case "sophomore":
                                echo '| |';
                                break;
                            case "junior":
                                echo '| | |';
                                break;
                            case "senior":
                                echo '| | | |';
                                break;
                            default:
                                echo 'Year not specified';
                        }
                    ?>
                </p>
                <p>
                    <?php
                        // Display age
                        echo 'Age: '.getAge(date_Create($student_info[$i]['date of birth']));
                    ?>
                </p>
                <p>
                    <?=
                        // Display time since born
                        '('.getSpecificAge(date_Create($student_info[$i]['date of birth'])).')';
                    ?>
                </p>
            </div>
        </div>
    </div>
    <!-- Card template ends -->
    <?php
}