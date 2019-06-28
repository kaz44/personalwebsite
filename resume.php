<?php
$class_index = "";
$class_about = "";
$class_contact = "";
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = "Resume";
$class_resume = "current";
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
  <div class="margins">
    <h1 class="teal">Kathy Zhang</h1>
    <hr noshade width=500px;>
    <h2 class="teal">Education</h2>
    <p><strong><a class = "nostyle" href= "cornell.edu">Cornell University | College of Engineering | Ithaca, NY </a></strong></p>
    <p class="p2"><strong>Relevant Courses:</strong> <br>Linear Algebra, Physics Mechanics, Electricity & Magnetism, Discrete Structures, Intro to Python, Object Oriented Programming, iOS App Development, Networks, Data Structures & Functional Programming, Foundations of Artificial Intelligence, Machine Learning, Systems Engineering, Web Design</p>
    <p><strong><a class = "nostyle" href = "https://www.mhrd.org/Page/863">Academy for Math, Science, and Engineering | Rockaway, NJ </a></strong></p>
    <hr noshade width=500px;>

    <h2 class="teal">Experience</h2>
    <p><strong><a class = "nostyle" href= "prudential.com">Prudential Financial | Incoming CIO Quantitative Analyst Intern | NYC, NY </a></strong></p>

    <p><strong><a class = "nostyle" href = "cornellcuprobotics.com">Intel Cornell Cup Project Team | CS Subteam Member </a></strong> </p>
    <p class="p2">
    • Leading group team chosen to create and develop a national embedded systems competition with Intel & NASA by creating projects and guides<br>
    <a class = "nostyle" href = "https://github.com/cornell-cup">
    • Currently working in a team to write software for MiniBots, a cost effective and intuitive robot that can be reassembled, rearranged, and recoded to help beginners learn about robotics</a><br>
    <a class = "nostyle" href = "https://github.com/cornell-cup/cs-minibot/tree/vision/vision">
    • Worked on implementing computer vision on MiniBot cameras that connects to an app on users' phones and display augmented reality. </a>
  </p>

    <p><strong><a class="nostyle" href = "schindler.com/us">Schindler Elevator Corporation | Randolph, NJ | Software Intern </a></strong> </p>
    <p class="p2">
    • Designed user interface in Lua using Storyboard Suite<br>
    • Collaborated with a team of 3 mechanical and software engineers on a project to create and code a touch screen fire safety status panel that communicates with elevators, controls key operations, and displays their statuses<br>
    • Learned basics of embedded systems and used the Nitrogen SBC and Android to simulate elevator messages to Android main app for testing<br>
    • Initiated and lead meetings discussing CCQL ideas as well as presented a final project/pitch to VP of company.</p>

    <p><strong><a class = "nostyle" href = "pica.army.mil">Picatinny Arsenal | Rockaway, NJ | Engineering Intern </a></strong> </p>
    <p class="p2">
    • Collaborated with 4 ARDEC software engineering team to use CAD software to create parts of the SCat (Soft Catch) gun<br>
    • Experimented and learned the basics of ARDUINO to co-develop a hockey-playing robot</p>

    <hr noshade width=500px;>

    <h2 class="teal">Activities</h2>
    <p class="center newfont"><strong><a class = "nostyle" href = "wicc.acm.org">Women in Computing at Cornell </a>| <a class = "nostyle" href = "acsu.cornell.edu">Associaton of Computer Science Undergrads</a> | <a class = "nostyle" href = "swe.cornell.edu">Society of Women Engineers</a> | Guild of Visual Arts Painting Club | Badminton Club </strong></p>

    <hr noshade width=500px;>

    <h2 class="teal">Skills</h2>
    <p class="center newfont"><strong>Java | OCaml | Python | Lua | C | HTML | CSS | PHP </strong></p>
    <p class="center newfont"><strong>Autodesk | AutoCAD | Inventor | Photoshop | Microsoft Suite </strong></p>
    <p class="center newfont"><strong>English | Mandarin | French </strong></p>

    <br>
    <br>
    <br>

  </div>
  <?php
  include("includes/footer.php");
  ?>

</body>
</html>
