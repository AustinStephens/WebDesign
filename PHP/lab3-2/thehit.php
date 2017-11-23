<?php
  $title = "Austin Stephens";
  $style = "style3-2.css";
  $file = "functions3-2.php";
  
  include($file);
  echo startPage();
  heading("The Storm Hits!");
?>
<article>
  <?php
    images("storm2.gif", "Collapsed Building at Avenue K and Sixteenth Street", "right");
  ?>
  <p>Again, not writing 3 paragraphs for each file</p>

</article>
<?php
  menu();
  echo endPage();
?>