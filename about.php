<?php
$class_index = "";
$class_resume = "";
$class_contact = "";
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = "About";
$class_about = "current";
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
    <div class="column">
        <div class="contain">
              <!-- Picture my friend took of me at Cornell Days. -->
          <img src="../images/IMG_8796.jpg" alt="temp" class ="square">
          <div class="middle">
            <div class="text">Getting into Cornell!</div>
          </div>
        </div>
        <div class="contain">
              <!-- Picture my mom took of me in China. -->
          <img src="../images/IMG_1568.jpg" alt="temp" class ="square">
          <div class="middle">
            <div class="text">Traveling in China</div>
          </div>
        </div>
        <div class="contain">
              <!-- Picture my mom took of me at Ithaca Gorges. -->
          <img src="../images/IMG_2072.jpg" alt="temp" class ="square">
          <div class="middle">
            <div class="text">A Long Journey Ahead</div>
          </div>
        </div>
    </div>
    <div class="column2">
      <h1>short intro</h1>
      <ul>
        <li> <strong class="cat">Who I am:</strong> Kathy, sophomore undergrad CS major at Cornell </li>
        <li> <strong class="cat">Where I'm from:</strong> Parsippany, NJ</li>
        <li> <strong class="cat">What I'm looking for:</strong> SWE/data analytics summer position</li>
        <li> <strong class="cat">Interests:</strong> reading, Norwegian TV shows, melodic EDM</li>
      </ul>
      <h1>more info</h1>
      <p class="p2"> Hi! I'm Kathy. I'm currently a sophomore at Cornell University. I was born in NYC but grew up in Parsippany, NJ. </p>
      <p class="p2"> In Cornell, I'm studying computer science and am thinking of a english minor. I always liked reading and writing fiction stories. Most days, I can read over 100 pages of any book and I'm passionate about the stories people can tell, how they tell them, and how those stories impact others. One of my favorite books, Never Let Me Go, describes how making art is a sign that someone has a soul and a gateway into learning how they think. I think computers are the same way. Computers can think like us, but differently, and computer science is the gateway to using technology to solve many problems. I think artificial intelligence is the future of technology and I'm interested in learning everything I can about how computers think. </p>
      <p class="p2"> Outside of school, I like hanging out with friends, playing piano, reading, watching TV, and traveling! I've been to Spain, Mexico, Hawaii, Italy, Rome, Greece, Great Britain, China, Japan, and HongKong. Whenever I visit someplace new, I feel as if I'm taking a step in a long journey. My parents immigrated from China because they wanted me to have a better life, and their hardships have shaped a part of my identity-- something I'm always reminded of when I go back to the Homeland. When I meet new people in new countries, I feel as though their interactions, no matter how small, stick with me for a long time afterwards. I've been raised to show empathy and compassion towards others and at heart, no matter what, I want to help people. </p>
      <p class="p2"> Sometimes I go through rough patches. Or I'm uncertain about things. Sometimes being uncertain about things makes me anxious. Things happen. But it's not the end of the world. I'm still trying to discover myself in college, and I've learned a lot so far and made a lot of new friends and new experiences. </p>
      <p class="p2"> I think I'm still going through my personal journey. Sometimes I forget what's good in life and I always remind myself that I've been really lucky to meet the people I've met and to have the opportunities I've had. Pushing myself closer to my goal and surrounding myself with the good things is what keeps me going. </p>
      <p class="p2">It's currently 3:30AM. Good night :) </p>


    </div>

  <?php
  include("includes/footer.php");
  ?>

</body>
</html>
