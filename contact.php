<?php
$class_index = "";
$class_about = "";
$class_resume = "";
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = "Home";
$class_contact = "current";
$valid_form = false;
$valid_name = true;
$valid_message = true;
$valid_topic = true;
$valid_email = true;

if (isset($_POST['submit'])) {
  $valid_form = true;
  $valid_name = true;
  $valid_message = true;
  $valid_topic = true;
  $valid_email = true;
  $topic = $_POST['topic'];
  $message = $_POST['message'];
  $email = $_POST['email'];
  $name = $_POST['name'];

  if (trim($name) == '') {
    $valid_form = false;
    $valid_name = false;
  } else {
    $valid_name = true;
  }
  if (trim($message) == '') {
    $valid_form = false;
    $valid_message = false;
  } else {
    $valid_message = true;
  }
  if (trim($topic) == '') {
    $valid_form = false;
    $valid_topic = false;
  } else {
    $valid_topic = true;
  }
  if (trim($email) == '' or strpos($email, '@') == false) {
    $valid_form = false;
    $valid_email = false;
  } else {
    $valid_email = true;
  }
} else {
  //form was not submitted
  $topic = "";
  $name = "";
  $message = "";
  $email = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?></title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>


<body>
  <?php
  include("includes/header.php");
  ?>
  <h1>Contact Me!</h1>
    <div class="container">
      <div class="centeredimg">
        <a href="https://www.linkedin.com/in/kathy-zhang-5ab943162/">
        <img src="../images/linkedinicon.png" alt="temp" class="icon"></a>
      </div>
      <div class="centeredimg">
        <a href="https://github.coecis.cornell.edu/kaz44">
        <img src="../images/githubicon.png" alt="temp" class="icon" ></a>
      </div>
      <div class="centeredimg">
        <a href="mailto:kaz44@cornell.edu">
        <img src="../images/gmailicon.png" alt="temp" class="icon"></a>
      </div>
      <div class="centeredimg">
        <a href="https://www.facebook.com/kathy.zhang.58555">
        <img src="../images/fbicon.png" alt="temp" class="icon"></a>
      </div>
      <div class="centeredimg">
        <a href="https://www.instagram.com/kazzamn66/">
        <img src="../images/igicon.png" alt="temp" class="icon" ></a>
      </div>
    </div>
    <div class="center">
      <a href="linkedin.com">src</a> <a href="github.com">src</a> <a href="gmail.com">src</a> <a href="facebook.com">src</a> <a href="instagram.com">src</a>
    </div>
    <?php
    if (isset($valid_form) && $valid_form) {
      $valid_form = true; ?>
      <h1>Thank you for your message, <?php echo htmlspecialchars($name) ?>!</h1>
    <?php

  } else {
    ?>
    <div>
      <form method="post" action="contact.php" class="center">
      <div class="container">
          <p
            <?php if ($valid_form) {
              echo "class = 'form_error hidden'";
            } else {
              echo "class = 'form_error'";
            }
            ?>>
            <?php if ($valid_name == false or $valid_email == false or $valid_message == false or $valid_topic == false) {
              echo "Please fill out the required areas";
            }
            ?></p>

        <div class="col-25">
          <label for="name_field"><strong>Name:</strong></label>
        </div>
        <div class = "col-75">
          <input
          <?php if ($valid_name == false) { ?>
              class="inputerror"<?php

                              }
                              ?>
          id="name_field" type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"/>
        </div>

        <div class="col-25">
          <label for="email_field"><strong>Email:</strong></label>
        </div>
        <div class="col-75">
          <input
          <?php if ($valid_email == false) { ?>
              class="inputerror"<?php

                              }
                              ?>
          id="email_field" type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"/>
        </div>

      <div class="col-25">
          <label for="topic_field"><strong>Topic:</strong></label>
        </div>
        <div class="col-75">
          <input
          <?php if ($valid_topic == false) { ?>
              class="inputerror"<?php

                              }
                              ?>
          id="topic_field" type="text" name="topic" value="<?php echo htmlspecialchars($topic); ?>"/>
        </div>

      <div class="col-25">
          <label for="message_field"><strong>Message:</strong></label>
        </div>
        <div class="col-75">
          <textarea
          <?php if ($valid_message == false) { ?>
              class="inputerror"<?php

                              }
                              ?>
          name = "message" id = "message_field" type="text"> <?php echo htmlspecialchars($message); ?> </textarea>
        </div>

      <div>
        <input type="submit" name="submit" value="Send"/>
  </div>

      </div>
  </div>
  <br>
  <br>
  <br>

      </form>
    <?php

  }
  ?>
    </div>
    <?php
    include("includes/footer.php");
    ?>



</body>
</html>
