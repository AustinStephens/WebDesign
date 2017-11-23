<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="style6-2.css">
</head>
<body>
  <header>
    <h1>The Blogger</h1>
  </header>
  <section>
    <article>
      <?php
        include("journal.php");
      ?>
    </article>
    <aside id="login">
      <form method="post" action="entry.php">
        <div>
          Username: <input type="text" name="username" class="text">
        </div>
        <div>
          Password: <input type="text" name="password" class="text">
        </div>
        <div>
          <input type="submit" value="Login" class="button">
        </div>
      </form>
    </aside>
  </section>
</body>
</html>