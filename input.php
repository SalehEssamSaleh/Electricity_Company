<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>electricity company</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header id="">
		<img src="images/electricity_logo.png">
		<p>شركة الكهرباء</p>
		<img src="images/electricity_logo.png">
	</header>

	<section id="">
		<div class="citizen_usage">
			<form action="input.php" method="post">
        <label for="user_usage">قولي بصراحة بقا: </label>
        <!--to take the electricity Consumption Form The citizen -->
				<input type="text" name="user_usage" class="user_input" placeholder="أستهلكت كام الشهر ده ؟">
				<br>
				<input type="submit" value="احسبلي">
        <input type="reset" value="أمسح أستهلاكي">
				<hr>

  <?php 

  
  // to avoid the error "undefined variable using $_POST"
  $consumedKilowatts = '';
  if(isset($_POST["user_usage"])){
    $consumedKilowatts = $_POST["user_usage"];
 
 

 
  // The Cost For Each Group
  $cost_group_1 = 0.5;
  $cost_group_2 = 1;
  $cost_group_3 = 2;

  // Empty Variable for the Electricity Consumption
  $electricityConsumption;

// The First Case If the citizen use between 1 to 300 Kilowatts
if ($consumedKilowatts <= 300) {
 
  // Will Multiple the citizen usage * The first group Cost; 
    $electricityConsumption = $consumedKilowatts * $cost_group_1 ;
    // and also if this all the usage this will praint Group 1
    $which_Group = "Group 1";
    echo 'حضرتك استهلكت '. $consumedKilowatts . ' كيلو واط ؟'."<br>"."<br>" ;
    
    echo "<img src='images/give-me-money.gif'>"."<br><br>" ;

    echo "- طيب كده أنت كده تبع الشريحة الأولي. <br>
      - محتاج تشد حيلك شويه كفايه توفير!. <br>
    - وحسابك الشهر ده <strong>$electricityConsumption</strong> دولار بس.
    ";
// The Second Case If the citizen use between 300 to 600 Kilowatts
}elseif ($consumedKilowatts > 300 && $consumedKilowatts <= 600) {
  // Will Multiple the citizen usage * The Second group Cost; 
  echo 'حضرتك استهلكت '. $consumedKilowatts . ' كيلو واط ؟'."<br>"."<br>" ;
  $electricityConsumption = $consumedKilowatts * $cost_group_2 ;
  // and also if this all the usage this will praint Group 2
  $which_Group = "Group 2";
  
  echo "<img src='images/some_money.gif'>"."<br><br>" ;

  echo "- طيب كده أنت كده تبع الشريحة الثانية. <br>
      - عاش, أحسن استهلاك, أستمر عشان توصل للشريحة الثالثة!. <br>
    - وحسابك الشهر ده <strong>$electricityConsumption</strong> دولار بس.
    ";

// The Third Case If the citizen use More than 600 Kilowatts
}elseif ($consumedKilowatts > 600) {
  // Will Multiple the citizen usage * The Third group Cost; 
  $electricityConsumption = $consumedKilowatts * $cost_group_3 ;
  // and also if this all the usage this will praint Group 3
  $which_Group = "Group 3";
  echo 'حضرتك استهلكت '. $consumedKilowatts . ' كيلو واط ؟'."<br>"."<br>" ;  

  echo "<img src='images/Much_Money.gif'>"."<br><br>" ;

  echo "- طيب كده أنت كده تبع الشريحة الثالثة. <br>
      - هو ده الكلام ولا بلاش, حضرتك فخر شركة الكهرباء أستهلاكك بيسعدنا. <br>
    - وحسابك الشهر ده <strong>$electricityConsumption</strong> دولار بس.
    ";
}

}
      
     ?> 

</form>

</div>
</section>

<footer id="">الشركة القابضة لكهرباء 2022 &copy;</footer>

  </body>
</html>

