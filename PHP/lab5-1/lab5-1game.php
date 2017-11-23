<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="style5-1.css">
</head>
<body>
  <section>
    <aside>
    <?php
      $show = "";
      
      for ($roll = $_POST['rounds']; $roll > 0; $roll--)
      {
        $dice1 = mt_rand(1,6);
        $dice2 = mt_rand(1,6);
        $total = $dice1 + $dice2;
        echo "<div class='total'>$total</div><div class='dice1'>$dice1</div><div class='dice2'>$dice2</div>";
      }
    ?>
    </aside>
    <article>
      <header>
        <h1>Dice Game</h1>
      </header>
      <form method="post" action="lab5-1game.php">
        Rounds to Play: <input type="text" name="roudns" class="text">
        <br>
        <input type="submit" value="Play" class="button">
      </form>
    </article>
  </section>
</body>
</html>