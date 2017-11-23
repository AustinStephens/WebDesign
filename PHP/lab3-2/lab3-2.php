<?php
  $title = "Austin Stephens";
  $style = "style3-2.css";
  $file = "functions3-2.php";
  
  include($file);
  echo startPage();
  heading("The Great Storm of 1900");
?>
<article>
  <?php
    images("storm1.gif", "Tremont Street Pre-storm", "right");
  ?>
  <p>This lab doesnt have a txt file included and im not writing 3 full paragraphs for all 3 files.</p>
</article>
<?php
  menu();
  echo endPage();
?>