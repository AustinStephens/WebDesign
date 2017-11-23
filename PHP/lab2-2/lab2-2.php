<?php
  $amt = 100;
  
  $Jap = round($amt/.009, 2);
  $Can = round($amt/1.322, 2);
  $Mex = round($amt/.093, 2);
  $Bri = round($amt/.569, 2);
  $Rus = round($amt/.036, 2);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #fdff73;
          font-family: arial;}
          
    header {width: 650px;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 20px;
            background-color: #a3a500;
            text-align: center;}
            
    h1 {line-height: 50px;}
    
    section {width: 600px;
             min-height: 200px;
             margin: auto;
             background-color: #fbfe00;
             padding: 20px;
             border-radius: 20px;}
             
    table {width: 500px;
           margin: auto;}
           
    td {padding: 10px;}
    
    .headingCell {background-color: #a3a500;
                  color: #ffffff;
                  font-weight: bold;}
                  
    .leftCell {background-color: #a13dd5;
               width: 250px;}
               
    .rightCell {background-color:  #af66d5;
                width: 250px;
                text-align: right;}
  </style>
</head>
<body>
  <header>
    <h1>Currency Exchange</h1>
  </header>
  <section>
    <table>
      <tr>
        <th class="headingCell" colspan="2">Exchange Rates for 100 US Dollars</th>
      </tr>
      <tr>
        <td class="leftCell">Japanese Yens</td><td class="rightCell"><?php echo $Jap; ?></td>
      </tr>
      <tr>
        <td class="leftCell">Canadian Dollars</td><td class="rightCell"><?php echo $Can; ?></td>
      </tr>
      <tr>
        <td class="leftCell">Mexican Pesos</td><td class="rightCell"><?php echo $Mex; ?></td>
      </tr>
      <tr>
        <td class="leftCell">British Pounds</td><td class="rightCell"><?php echo $Bri; ?></td>
      </tr>
      <tr>
        <td class="leftCell">Russian Rubles</td><td class="rightCell"><?php echo $Rus; ?></td>
      </tr>
    </table>
  </section>
</body>
</html>