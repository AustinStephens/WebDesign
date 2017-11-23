<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    a {display: block;
       width: 100px;
       margin: auto;
       padding: 5px;
       background-color: #9fee00;
       text-decoration: none;
       color: #85994b;
       border-radius: 5px;}
       
    a:hover {background-color: #e6f99b;
             color: #000000;}
             
    nav {width: 200px;
         min-height: 25px;
         margin: auto;
         background-color: #679b00;
         border-radius: 5px;
         padding: 5px;}
         
    body {background-color: #e667af;
          font-family: arial;}
          
    section {text-align: center;}
    
    article {margin: auto;
             display: inline-block;
             min-height: 100px;
             padding: 10px;
             background-color: #9fee00;
             border-radius: 5px;}
             
    header {width: 600px;
            height: 40px;
            margin: auto;
            margin-bottom: 10px;
            background-color: #992667;
            color: #ffffff;
            border-radius: 5px;
            text-align: center;}
            
    h1 {line-height: 40px;}
    
    h3 {color: #ffffff;}
    
    td {background-color: #85004b;
        color: #ffffff;
        text-align: center;}
  </style>
</head>
<body>
  <header>
    <h1>For Loop Grid</h1>
  </header>
  <section>
    <?php
      if (isset($_GET['size']))
      {
        $num = 1;
        echo "<article><table>";
        for($r = 0; $r < $_GET['size']; $r++)
        {
          echo "<tr>";
          for ($c = 0; $c < $_GET['size']; $c++)
          {
            echo "<td>$num</td>";
            $num++;
          }
          echo "</tr>";
        }
        echo "</table></article>";
        echo "<nav><a href='lab5-2.php'>Back</a></nav>";
      }
      else
      {
        ?>
        <nav>
          <h3>Select Grid Size</h3>
          <a href="lab5-2.php?size=5">5 X 5</a>
          <a href="lab5-2.php?size=10">10 X 10</a>
          <a href="lab5-2.php?size=15">15 X 15</a>
          <a href="lab5-2.php?size=20">20 X 20</a>
        </nav>
        <?php
      }
    ?>
  </section>
</body>
</html>