<?php
  if (!isset($_GET['show']))
  {
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="style4-2.css">
</head>
<body>
  <section>
    <nav>
      <a href="lab4-2.php?show=''">Home</a>
      <a href="lab4-2.php?show='reagan'">Ronald Reagan</a>
      <a href="lab4-2.php?show='kennedy'">John F. Kennedy</a>
      <a href="lab4-2.php?show='roosevelt'">Franklin Roosevelt</a>
      <a href="lab4-2.php?show='lincoln'">Abraham Lincoln</a>
    </nav>
    <article>
      <?php
        if ($_GET['show'] == "reagan")
        {
          ?>
          <header>
            <h1>Ronald Reagan</h1>
          </header>
          <img src="reagan.gif">
          <p>There are no great limits to growth because there are no limits of human intelligence, imagination, and wonder.</p>
          <p>I have left orders to be awkened at any time in case of national emergency, even if I'm in a cabinet meeting.</p>
          <p>Mr. Gorbachev, tear down this wall!</p>
          <?php
        }
        else if ($_GET['show'] == "kennedy")
        {
          ?>
           <header>
            <h1>John F. Kennedy</h1>
          </header>
          <img src="kennedy.gif">
          <p>Let us think of education as the means of developing our greatest abilities, because in each of us there is a private hope and dream which, fulfilled, can be translated into benefit for everyone and greater strength for our nation.</p>
          <p>And so, my fellow Americans: ask not what your country can do for you - ask what you can do for your country. My fellow citizens of the world: ask not what America will do for you, but what together we can do for the freedom of man.</p>
          <?php
        }
        else if ($_GET['show'] == "roosevelt")
        {
          ?>
            <header>
              <h1>Franklin D. Roosevelt</h1>
            </header>
            <img src="roosevelt.gif">
            <p>Yesterday, December 7, 1941 - a date which will live on in infamy - the United States of America was suddenly and deliberately attacked by naval and air forces of the Empire of Japan.</p>
            <p>First of all, let me assert my firm belief that the only thing we have to fear is fear itself - nameless, unreasoning, unjustified terror which paralyzes needed efforts to convert retreat into advance.</p>
            <p>Be sincere; be brief; be seated.</p>
          <?php
        }
        else if ($_GET['show'] == "lincoln")
        {
          ?>
            <header>
              <h1>Abraham Lincoln</h1>
            </header>
            <img src="lincoln.gif">
            <p>Upon the subject of education, not presuming to dictate any plan or system respecting it, I can only say that I view it as the most important subject which we as a people can be engaged in.</p>
            <p>A house divided against itself cannot stand. I believe this government cannot endure permanently half-slave and half-free. I do not expect the Union to be dissolved - I do not expect the house to fall - but I do not expect it will cease to be divided.</p>
          <?php
        }
        else
        {
          ?>
            <header>
              <h1>Presidential Quotes</h1>
            </header>
            <img src="eagle.gif" style="float: none; margin: auto;">
            <p style="text-align: center">Famous quotes by various Presidents of the United States</p>
          <?php
        }
      ?>
    </article>
  </section>
</body>
</html>