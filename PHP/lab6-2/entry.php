<?php
if($_POST['username'] == "admin" && $_POST['password'] == "1234")
{
  if(isset($_POST['save']))
  {
    $entryDate = gmdate("F d Y");
    $fp = fopen("journal.php", "a+");
    fwrite($fp, "<section class='journal'>");
    fwrite($fp, "<div class='journalDate'>$entryDate</div>");
    fwrite($fp, "<div class='journalTitle'>$_POST[title]</div>");
    fwrite($fp, "<div>$_POST[entry]</div>");
    fwrite($fp, "</section>");
    fclose($fp);
  }
  ?>
  <!DOCTYPE>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Austin Stephens</title>
    <link rel="stylesheet" href="style6-2.css">
  </head>
  <body>
    <header>
      <h1>The Blogger Entry</h1>
    </header>
    <section id="entry">
      <form method="post" action="entry.php">
        <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
        <div>
          Date: <?php gmdate("F d Y"); ?>
        </div>
        <div>
          Entry Title: <input type="text" name="title" class="text">
        </div>
        <div>
          Blog Entry:
        </div>
        <div>
          <textarea cols="70" rows="10" name="entry" class="text">
        </div>
        <div>
          <input type="submit" value="Save Entry" name="save" class="button">
        </div>
      </form>
    </section>
  </body>
  </html>
  <?php
}
else
{
  header("location:lab6-2.php");
}
?>