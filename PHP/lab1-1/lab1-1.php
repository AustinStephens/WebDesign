<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #ffb273;
          font-family: arial;}
          
    section {width: 500px;
             margin: auto;
             margin-top: 10px;
             border-radius: 10px;
             background-color: #5ccccc;
             padding: 10px;}
             
    header {background-color: #006363;
            color: #ffffff;
            text-align: center;}
            
    h1 {line-height: 50px;}
  </style>
</head>
<body>
  <header>
    <h1>Benefits of PHP<h1>
  </header>
  <section>
    <header>
      <?php
        echo "Design";
      ?>
    </header>
    <article>
      <?php
        echo "PHP has many built in features designed to process common and custom tasks on heavy traffic sites.";
      ?>
    </article>
  </section>
  <section>
    <header>
      <?php
        echo "Database";
      ?>
    </header>
    <article>
      <?php
        echo "PHP works almost seamlessly with MySQL databases making it the most popular server side scripting language available.";
      ?>
    </article>
  </section>
  <section>
    <header>
      <?php
        echo "Open Source";
      ?>
    </header>
    <article>
      <?php
        echo "PHP is available free and is open to anyone to modify and redistribute result in rapid advancement of technology.";
      ?>
    </article>
  </section>
  <section>
    <header>
      <?php
        echo "Code-reuse";
      ?>
    </header>
    <article>
      <?php
        echo "PHP allows for you to reuse common code blocks which descrease the time required to produce each page of your site and downlaod time.";
      ?>
    </article>
  </section>
</body>
</html>