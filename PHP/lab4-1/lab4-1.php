<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #ad66d5;
          font-family: arial;}
          
    article {width: 500px;
             min-height: 30px;
             margin: auto;
             padding: 10px;
             border-radius: 5px;
             background-color: #7109aa;}
             
    header {width: 500px;
            height: 40px;
            margin: auto;
            margin-bottom: 5px;
            text-align: center;
            background-color: #baba00;
            border-radius: 5px;}
            
    h1 {line-height: 40px;}
    
    aside {width: 400px;
           margin: auto;
           background-color: #ffff73;
           padding: 10px;
           text-align: center;
           font-size: 16pt;
           font-weight: bold;
           text-color: #000000;
           border-radius: 10px;}
           
    section {margin: auto;
             margin-top: 10px;
             text-align: center;
             color: #ffffff;}
             
    .correct {width: 200px;
              margin: auto;
              padding: 10px;
              font-size: 14pt;
              background-color: #00ff00;
              color: #000000;
              border-radius: 5px;}
              
    .button {background-color: #52047c;
             color: #ffffff;
             padding: 10px;
             border-radius: 10px;}
             
    .text {background-color: #ffff73;
           font-size: 14pt;
           border: solid #ffff73 1px;
           width: 50px;
           padding: 5px;}
           
    .wrong {width: 300px;
            margin: auto;
            padding: 10px;
            font-size: 14pt;
            background-color: #ff0000;
            border-radius: 5px;}
            
    .points {width: 150px;
             margin: auto;
             background-color: #9f3ed5;
             border-radius: 5px;
             font-size: 16pt;
             text-align: center;
             color: #ffffff;}
  </style>
</head>
<body>
  <header>
    <h1>Addition Game</h1>
  </header>
  <article>
    <?php
      if(isset($_POST['answer']))
      {
        if($_POST['answer'] == $_POST['correct'])
        {
          echo "<section class='correct'>Correct!</section>";
          $_POST['score'] += 5;
        }
        else
        {
          echo "<section class='wrong'>Wrong - The correct answer is" + &_POST['correct'] + "</section>";
          &_POST['score'] -= 5;
        }
      }
      else
      {
        $_POST['score'] = 0;
      }
      
      $num1 = mt_rand(1,100);
      $num2 = mt_rand(1,100);
      $_POST['correct'] = $num1 + $num2;
    ?>
    <section class="points">
      Points
      <?php
        echo $_POST['score'];
      ?>
    </section>
    <section>
      <aside>
        <?php
          echo $num1 + " + " + $num2 + " = ?";
        ?>
      </aside>
    </section>
    <section>
      <form method="post" action="lab4-1.php">     
        <input type="hidden" name="correct" value="$_POST['correct']">
        <input type="hidden" name="score" value="$_POST['score']">
        <div>
          Your Answer
          <input type="text" name="answer" class="text" autofocus>
        </div>
        <div>
          <input type="submit" value="Check Answer" class="button">
        </div>
      </form>
    </section>
  </article>
</body>
</html>