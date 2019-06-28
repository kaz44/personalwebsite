<?php
$class_resume = "";
$class_about = "";
$class_contact = "";
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = "Home";
$class_index = "current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?></title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>


<body id = "bg">

  <?php
  include("includes/header.php");
  ?>

  <div>
    <h1 class="teal">hi, i'm kathy</h1>
    <!-- Picture my friend took of me at a restaurant. -->
    <img class = "pic"  alt="Database" src="../images/cutmypic.png" />

    <h2 class = "center teal"> Welcome to my interactive portfolio! </h2>

  </div>
  <?php
  include("includes/footer.php");
  ?>
</body>
</html>
