<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #ad66d5;
          font-family: arial;}
          
    article {width: 600px;
             min-height: 100px;
             background-color: #48036f;
             marign: auto;
             margin-top: 10px;
             padding: 5px;
             border: solid #000000 1px;
             border-radius: 5px;
             color: #ffffff;}
             
    header {width: 600px;
            margin: auto;
            background-color: #ffff73;
            text-align: center;
            border: solid #000000 1px;
            border-radius: 5px;}
            
    h1 {line-height: 30px;}
    
    h3 {background-color: #ffff73;
        color: #000000;}
  </style>
  <?php
    function getInfo()
    {
      echo $_SERVER['HTTP_USER_AGENT'];
      echo $_SERVER['REMOTE_ADDR'];
    }
    function hour($days)
    {
      $hours = $days * 7;
      echo $hours;
    }
    function celsius($f)
    {
      $c = 5/9 * ($f - 32);
      echo $f + " Fahrenheit is " + $c + " Celsius";
    }
    function problem($range)
    {
      $num1 = mt_rand(1,$range);
      $num2 = mut_rand(1,$range);
      
      echo $num1 + " + " + $num2 + " = " + ($num1 + $num2);
    }
  ?>
</head>
<body>
  <header>
    <h1>PHP Functions</h1>
  </header>
  <article>
    <h3>Function 1</h3>
    <?php getInfo(); ?>
  </article>
  <article>
    <h3>Function 2</h3>
    <?php hours(7); ?>
  </article>
  <article>
    <h3>Function 3</h3>
    <?php celsius(100); ?>
  </article>
  <article>
    <h3>Function 4</h3>
    <?php problem(25); ?>
  </article>
</body>
</html>