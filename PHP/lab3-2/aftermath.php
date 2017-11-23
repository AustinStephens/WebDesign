<?php
  $title = "Austin Stephens";
  $style = "style3-2.css";
  $file = "functions3-2.php";
  
  include($file);
  echo startPage();
  heading("The Aftermath!");
?>
<article>
  <?php
    images("storm3.gif", "Volunteers removing debris on Twenty-First Street", "right");
  ?>
  <p>This lab doesnt have a txt file included and im not writing 3 full paragraphs for all 3 files.</p>
  <?php
    images("storm4.gif", "Destruction of Galveston Orphan Home", "left");
  ?>
</article>
<?php
  menu();
  echo endPage();
?>