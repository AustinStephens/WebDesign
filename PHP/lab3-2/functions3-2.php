<?php
  function startPage()
  {
    global $title;
    global $style;
    ob_start();
    echo "<!DOCTYPE>";
    echo "<html></head>";
    echo "<meta charset='utf-8'>";
    echo "<title>" + $title + "</title>";
    echo "<link rel='stylesheet' href='" + $style + "'>";
    echo "</head><body>";
    echo "<section>";
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
  }
  
  function endPage()
  {
    ob_start();
    echo "</section>";
    echo "</body></html>";
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
  }
  
  function menu()
  {
    echo "<nav>";
    echo "<a href='lab3-2.php' style='float: left;'>HOME</a>";
    echo "<a href='aftermath.php' style='float: right;'>The Aftermath</a>";
    echo "<a href='thehit.php' style='margin: auto;'>The Hit</a>";
    echo "</nav>";
  }
  
  function heading($text)
  {
    echo "<header>";
    echo "<h1>" + $text + "</h1>";
    echo "</header>";
  }
  
  function images($pic, $alt, $position)
  {
    echo "<img src='" + $pic + "' alt='" + $alt + "' style='float: " + $position + "'>";
  }
?>