<!DOCTYPE html>
<html lang="en">
  <head>
	  <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  </head>
	<body>
    <?php
      // Import Data and Functions
      require_once('functions.php');
      require_once('json_util.php');
      $student_array = convertToPhp('class.json');
    ?>
		<link rel="stylesheet" href="assets/css/detail.css" />
    <title>
      <?=
        // Add persons name to the title
        'ASE 230 - '.$student_array[$_GET['index']]['first name'].' '.$student_array[$_GET['index']]['last name'];
      ?>
    </title>
		<div class="container text-center mb-5">
      <!-- Heading for the page  -->
      <h1>
        <?php
          echo 'This is ASE 230 - '.$student_array[$_GET['index']]['first name'].' '.$student_array[$_GET['index']]['last name'];
        ?>
      </h1>
		</div>
		<div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="mb-2">
            <!-- Display profile picture using $_GET -->
            <img class="w-100" src=<?= $student_array[$_GET['index']]['profile pic'] ?> alt="">
          </div>
          <div class="mb-2 d-flex">
            <h4 class="font-weight-normal">
                <?php
                  // Display students name
                  echo $student_array[$_GET['index']]['first name'].' '.$student_array[$_GET['index']]['last name'];
                ?>
            </h4>
            <!-- Add Social Media handles if applicable -->
            <div class="social d-flex ml-auto">
              <p class="pr-2 font-weight-normal">Follow on:</p>
              <a href="#" class="text-muted mr-1">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="text-muted mr-1">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-muted mr-1">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="text-muted">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
          <div class="mb-2">
            <ul class="list-unstyled">
            <li class="media">
                <span class="w-25 text-black font-weight-normal">
                  <?php
                    echo 'Age:';
                  ?>
                </span>
                <label class="media-body">
                    <?php
                      // Call getAge function to display age in years by passing date of birth from the data array as input
                      echo getAge(date_create($student_array[$_GET['index']]['date of birth']));
                    ?>
                </label>
              </li>
              <li class="media">
                <span class="w-25 text-black font-weight-normal">
                  <?php
                    echo 'Time since I was born:';
                  ?>
                </span>
                <label class="media-body">
                    <?php
                      // Call getSpecificAge function by passing date of birth as a parameter
                      echo getSpecificAge(date_create($student_array[$_GET['index']]['date of birth']));
                    ?>
                </label>
              </li>
              <li class="media">
                <span class="w-25 text-black font-weight-normal">
                  <?php
                    echo "Dream Profession:";
                  ?>
                </span>
                <label class="media-body">
                    <?php
                      // Print dream profession using $_GET
                      echo $student_array[$_GET['index']]['dream profession'];
                    ?>
                </label>
              </li>
              <li class="media">
                <span class="w-25 text-black font-weight-normal">
                  <?php
                    echo "Dream Company:";
                  ?>
                </span>
                <label class="media-body">
                    <?php
                      // Print dream company using $_GET
                      echo $student_array[$_GET['index']]['dream company'];
                    ?>
                </label>
              </li>
              <li class="media">
                <span class="w-25 text-black font-weight-normal">
                  <?php
                    echo "Email:";
                  ?>
                </span>
                <label class="media-body">
                    <?php
                      // Print email using $_GET
                      echo $student_array[$_GET['index']]['email'];
                    ?>
                </label>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
          <h5 class="font-weight-normal">
            <?php
              echo 'Short Intro';
            ?>
          </h5>
          <p>
            <?php
                // Print short intro using $_GET
                echo $student_array[$_GET['index']]['short intro'];
            ?>
          </p>
          <div class="my-2 bg-light p-2">
            <p>
              <i>
                <?php
                  // Print quote and author using $_GET
                  echo $student_array[$_GET['index']]['quote'].'<br>';
                  echo $student_array[$_GET['index']]['author of quote'];
                ?>
              </i>
            </p>
          </div>
          <div class="mb-2 mt-2 pt-1">
            <h5 class="font-weight-normal">
              <?php
                echo "Top Skills";
              ?>
            </h5>
          </div>
          <?php
            for ($i = 0; $i < count($student_array[$_GET['index']]['skills']); $i++) {
          ?>
            <div class="py-1">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:<?= $student_array[$_GET['index']]['skills'][$i][1].'%'?>" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar-title">
                      <?=
                        // Print skill 
                        $student_array[$_GET['index']]['skills'][$i][0];
                      ?>
                  </div>
                  <span class="progress-bar-number">
                      <?=
                        // Print rating
                        $student_array[$_GET['index']]['skills'][$i][1].'%';
                      ?>
                  </span>
                </div>
              </div>
            </div>
          <?php
            };
          ?>
          <h5 class="font-weight-normal">
              <?php
                  echo "Fun Fact";
              ?>
          </h5>
          <p>
            <?php
                // Print fun fact using $_GET
                echo $student_array[$_GET['index']]['fun fact'];
            ?>
          </p>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <button type="button" class="btn btn-primary" style="text-align: center;">
              <a href="index.php" style="text-decoration: none; color: white;">Back to Index</a>
            </button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-primary" style="text-align: center;">
              <a href="delete.php?index=<?= $_GET['index']; ?>" style="text-decoration: none; color: white;">Delete User</a>
            </button>
          </div>
          <div class="col">
            <button type="button" class="btn btn-primary" style="text-align: center;">
              <a href="modify.php?index=<?= $_GET['index'];?>&firstname=Cillian&lastname=Murphy" style="text-decoration: none; color: white;">Modify Name</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Include JS from Bootstrap template -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>