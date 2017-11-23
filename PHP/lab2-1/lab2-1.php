<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #b0d0ca;
          font-family: arial;
          font-size: 10pt;}
          
    table {width: 500px;
           text-align: center;
           border: solid #000000 1px;
           margin: auto;}
           
    td {padding: 8px;}
    
    .headingCell {background-color: #26685d;
                  color: #ffffff;
                  font-size: 14pt;}
                  
    .leftCell {background-color: #607874;
               text-align: left;
               font-weight: bold;}
               
    .contentCell {background-color: #74a099;
                  text-align: center;
                  font-weight: bold;}
  </style>
</head>
<body>
  <table>
    <tr>
      <td colspan="2" class="headingCell">Generating Dynamic Content</td>
    </tr>
    <tr>
      <td class="leftCell">Date</td><td class="contentCell"><?php echo gmdate("l F y"); ?></td>
    </tr>
    <tr>
      <td class="leftCell">Time Zone</td><td class="contentCell"><?php echo gmdate("T"); ?></td>
    </tr>
    <tr>
      <td class="leftCell">Day of Year</td><td class="contentCell"><?php echo gmdate("z"); ?></td>
    </tr>
    <tr>
      <td class="leftCell">Full Year</td><td class="contentCell"><?php echo gmdate("Y"); ?></td>
    </tr>
    <tr>
      <td class="leftCell">Seconds since<br/>
      midnight January 1, 1970(epoch)</td><td class="contentCell"><?php echo gmdate("U"); ?></td>
    </tr>
    <tr>
      <td class="leftCell">Time</td><td class="contentCell"><?php echo gmdate("h");?>:<?php gmdate("i a");?></td>
    </tr>
  </table>
</body>
</html>