 <html>
<head>
<meta charset="utf-8" >
<title>Calculated</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="wrapper"> 
  <div class="Head">Calculated success!</div>
      
  <?php
  $THB=$_POST['THB'];   
  $currency=$_POST['currency'];
 
 
  switch ($currency) {
 
    case 1:
    $currency_cal=0.03;
    $result=$THB*$currency_cal;?>
    <div id="layout">
    <?php echo " 1 THB: = ".$currency_cal." USD"."<br>";?> </div>
    <div id="layout2">
    <?php echo "Amount: ".number_format($THB,2)." THB  =  ".number_format($result,2)." USD"; 
    break;?> </div>

    <?php
   
   case 2:
    $currency_cal=3;
    $result=$THB*$currency_cal;?>
    <div id="layout">
    <?php
    echo "1 THB: = ".$currency_cal." JPY"."<br>";?> </div>
    <div id="layout2">
    <?php
    echo "Amount: ".number_format($THB,2)." THB  =  ".number_format($result,2)." JPY";
    break;?> </div>

<?php
    case 3:
    $currency_cal=33;
    $result=$THB*$currency_cal;?>
    <div id="layout">
    <?php
    echo "1 THB: = ".$currency_cal." KRW"."<br>";?></div>
    <div id="layout2">
    <?php
    echo "Amount: ".number_format($THB,2)." THB = ".number_format($result,2)." KRW";
    break;?>
    <?php    
  }
 ?><br><br><br>
    <a href="index.html"><input type="submit" value="Back to main"></a></div> 

</div>
</div>
</body>
</html>