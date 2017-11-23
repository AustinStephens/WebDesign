<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    section {margin: auto}
    
    td {text-align: center;}
  </style>
</head>
<body>
  <section>
    <table>
      <?php
        $r = mt_rand(1,10);
        $c = mt_rand(1,10);
        $row = 1;
        while ($row <= 10)
        {
          $col = 1;
          echo "<tr>";
          while ($col <= 10)
          {
            if ($row == $r && $col == $c)
            {
              echo "<td><img src='red.jpg'></td>";
            }
            else
            {
              echo "<td><img src='black.jpg'></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
  </section>
</body>
</html>