<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
	<link href="fontawesome-free-5.13.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sparepartsstyle.css">
	<title>SPARE PARTS</title>
</head>
<body>
	<div class="container1">
<i class="fas fa-bars"></i>
<div class="searchbox"><input name="searchinp" value="search here" class="searchclass"><a href="#"><i class="fas fa-search"></i></a></div>
<div class="rightcons">
<i class="fas fa-shopping-cart"></i>
<i class="fas fa-bell"></i>
</div>
</div>

<div class="container">
	<div class="maincontainer">
	<div class="tabs">
		<div class="tab1"><h2 class="headtab1">
			Vehicle
		</h2></div>
		<div class="tab2">
			<h2 class="headtab2">VIN</h2>
		</div>
		<div class="tab3">
			<h2 class="headtab3">Search</h2>
		</div>
	</div>

	<div class = "addproduct">

		<div class="headingbar1">
			<div class="header"><div class="addheading">PARTS BY <span class="productheading">VEHICLE</span></div></div>
			<div class="icons"><div class="iconbar"><i class="fas  fas2 fa-shopping-cart"></i><i class="fas fas2 fa-bell"></i><i class="fas fas2 fa-user"></i></div></div>
		</div>

		<div class="headingbar2">
			<div class="header"><div class="addheading">PARTS BY <span class="productheading">VIN</span></div></div>
			<div class="icons"><div class="iconbar"><i class="fas  fas2 fa-shopping-cart"></i><i class="fas fas2 fa-bell"></i><i class="fas fas2 fa-user"></i></div></div>
		</div>

		<div class="headingbar3">
			<div class="header"><div class="addheading">PARTS BY <span class="productheading">SEARCH</span></div></div>
			<div class="icons"><div class="iconbar"><i class="fas  fas2 fa-shopping-cart"></i><i class="fas fas2 fa-bell"></i><i class="fas fas2 fa-user"></i></div></div>
		</div>



		<div class="dh1">
		<div class="inputs1">
			<div class="input1"><div class="headingdb">Vehicle</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">Volvo</option>
  <option class="optiondb" value="saab">Saab</option>
  <option class="optiondb" value="mercedes">Mercedes</option>
  <option class="optiondb" value="audi">Audi</option>
</select></div>
			<div class="input1"><div class="headingdb">Model Line</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">Volvo</option>
  <option class="optiondb" value="saab">Saab</option>
  <option class="optiondb" value="mercedes">Mercedes</option>
  <option class="optiondb" value="audi">Audi</option>
</select></div>
<div class="input1"><div class="headingdb">Year</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">2020</option>
  <option class="optiondb" value="saab">2019</option>
  <option class="optiondb" value="mercedes">2018</option>
  <option class="optiondb" value="audi">2017</option>
</select></div>
<div class="input1"><div class="headingdb">Modification</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">Volvo</option>
  <option class="optiondb" value="saab">Saab</option>
  <option class="optiondb" value="mercedes">Mercedes</option>
  <option class="optiondb" value="audi">Audi</option>
</select></div>
<div class="searchbttn"><div>Search</div></div>

	</div>

	
</div>

<div class="dh2">
		<div class="inputs1">
			<div class="input1"><div class="headingdb">Brand</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">Volvo</option>
  <option class="optiondb" value="saab">Saab</option>
  <option class="optiondb" value="mercedes">Mercedes</option>
  <option class="optiondb" value="audi">Audi</option>
</select></div>
			<div class="input1"><div class="headingdb">VIN</div><select id="cars" class="db">
  <option class="optiondb" value="volvo">Volvo</option>
  <option class="optiondb" value="saab">Saab</option>
  <option class="optiondb" value="mercedes">Mercedes</option>
  <option class="optiondb" value="audi">Audi</option>
</select></div>


<div class="searchbttn"><div>Search</div></div>

	</div>

	
</div>

<div class="dh3">
		<div class="inputs1">
			<div class="input1"><input class="ip"></div>

<div class="searchbttn"><div>Search</div></div>

	</div>

	
</div>


</div>
</div>
</div>
<footer class="footer"><a class="tac" href="tac">Terms And Conditions</footer>
<script>

	$(document).ready(function(){
		$(".dh2").hide();
		$(".dh3").hide();
		$(".headingbar2").hide();
		$(".headingbar3").hide();
		$(".tab1").click(function(){
			$(".dh2").fadeOut(0);
			$(".dh3").fadeOut(0);
			$(".dh1").fadeIn(1000);
			$(".headingbar3").fadeOut(0);
			$(".headingbar2").fadeOut(0);
			$(".headingbar1").fadeIn(1000);
			
			$(".tab1").css("background-color","rgba(78, 205, 196, 1)");
			$(".tab2").css("background-color","white");
			$(".tab3").css("background-color","white");

		});
		$(".tab2").click(function(){
			$(".dh2").fadeIn(1000);
			$(".dh1").fadeOut(0);
			$(".dh3").fadeOut(0);
			$(".headingbar3").fadeOut(0);
			$(".headingbar2").fadeIn(1000);
			$(".headingbar1").fadeOut(0);
			$(".tab2").css("background-color","rgba(78, 205, 196, 1)");
			$(".tab1").css("background-color","white");
			$(".tab3").css("background-color","white");
		});
		$(".tab3").click(function(){
			$(".dh3").fadeIn(1000);
			$(".dh1").fadeOut(0);
			$(".dh2").fadeOut(0);
			$(".headingbar2").fadeOut(0);
			$(".headingbar3").fadeIn(1000);
			$(".headingbar1").fadeOut(0);
			
			$(".tab3").css("background-color","rgba(78, 205, 196, 1)");
			$(".tab2").css("background-color","white");
			$(".tab1").css("background-color","white");

		});

	});
</script>



</body>
</html>