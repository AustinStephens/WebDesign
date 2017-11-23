<?php
  if (isset($_POST['user']))
  {
    if(isset($_POST['message']))
    {
      $fp = fopen("lab6-1conversation.php","a+");
      fwrite($fp,"<span class='user'>$_POST[user]</span>");
      fwrite($fp,"<span class='message'>$_POST[message]</span>");
      fwrite($fp,"<br>");
      fclose($fp);     
    }
     ?>
      <!DOCTYPE>
      <html>
      <head>
        <meta charset="utf-8">
        <title>Austin Stephens</title>
        <link rel="stylesheet" href="style6-1.css">
      </head>
      <body onload="document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight;">
        <header>
          <h1>IE Class Chat</h1>
        </header>
        <section>
          <aside id="chat">
            <?php
              include("lab6-1conversation.php");
            ?>
          </aside>
          <form method="post" action="lab6-1chat.php">
            <input type="hidden" name="user" value="<?php echo $_POST['user']; ?>">
            <div>
              <input type="text" name="message" class="text" autofocus>
              <input type="submit" value="Send" class="button">
            </div>
          </form>
        </section>
      </body>
      </html>
      <?php
  }
  else
  {
    header("location:lab6-1.php");
  }
?>