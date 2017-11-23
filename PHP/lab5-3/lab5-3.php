<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <style>
    .text {width: 50px;
           background-color: #ffc8c3;
           padding: 5px;
           float: right;}
           
    .button {background-color: #a63830;
             padding: 5px;
             font-weight: bold;
             color: #ffffff;}
             
    article {margin: auto;
             display: inline-block;
             padding: 15px;
             background-color: #000000;
             border-radius: 10px;}
             
    body {background-color: #a60c00;
          font-family: arial;}
          
    div {margin: 20px;
         text-align: center;}
         
    form {background-color: #ff7d73;
          width: 400px;
          height: 150px;
          margin: auto;
          padding: 20px;
          border-radius: 10px;}
          
    header {width: 500px;
            height: 40px;
            margin: auto;
            margin-bottom: 15px;
            background-color: #ff7d73;
            border-radius: 5px;
            text-align: center;}
            
    h1 {line-height: 40px;}
    
    table {margin: auto;}
    
    td {background-color: #bf3a30;
        font-size: 10pt;
        text-align: center;}
        
    section {text-align: center;}
  </style>
</head>
<body>
  <header>
    <h1>Multiplication Table</h1>
  </header>
  <section>
    <?php
      if (isset($_POST['rows']) && isset($_POST['cols']))
      {
        $row = 1;
        $col = 1;
        
        if ($_POST['rows'] > 25)
        {
          $_POST['rows'] = 25;
        }
        if ($_POST['cols'] > 25)
        {
          $_POST['cols'] = 25;
        }
        echo "<article>";
        echo "<table>";
        while ($row < $_POST['rows'])
        {
          $col = 1;
          echo "<tr>";
          while ($col < $_POST['cols'])
          {
            echo "<td>";
            echo $row * $col;
            echo "</td>";
            $col++;
          }
          echo "</tr>";
          $row++;
        }
        echo "</table>";
        echo "</article>";
      }
      else
      {
        ?>
          <form method="post" action="lab5-3.php">
            <div>
              Number of Columns <input type="text" name="cols" placeholder="1-25" autofocus class="text">
            </div>
            <div>
              Number of Rows <input type="text" name="rows" placeholder="1-25" autofocus class="text">
            </div>
            <div>
              <input type="submit" value="Create Table" class="button">
            </div>
          </form>
        <?php
      }
    ?>
  </section>
</body>
</html>