<!DOCTYPE html>
<html>
<head>
	<title>jQuerry, DOM Travelling, AJAX/JSON</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<h2>Pirma uzduotis</h2>
	<button type="button" id="button">Mygtukas</button><hr>

	<h2>Antra uzduotis</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4" id="tabas1" style="float: left;">
				<button id="mygtukas1" style="background-color: green;">Mygtukas1</button>
			</div>
			<div class="col-4" id="tabas2" style="float: left;">
				<button id="mygtukas2" style="background-color: red;">Mygtukas2</button>
			</div>
			<div class="col-4" id="tabas3" style="float: left;">
				<button id="mygtukas3" style="background-color: yellow;">Mygtukas3</button>
			</div>
		</div>
		<div class="row">
			<div class="col" style="clear: both;">
				<p id="p1" style="font-size: 30px;">Pirma pastraipa</p>
				<p id="p2" style="font-size: 30px;">Antra Pastraipa</p>
				<p id="p3" style="font-size: 30px;">Trecia pastraipa</p>
			</div>
			
		</div>
	</div><hr>
	<h2>Trecia uzduotis</h2>
	<div class="dropdown" id="dropdownas">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Dropdown button
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<button id="mygtukas4">Mygtukas4</button><hr>

	<h2>Ketvirta uzduotis</h2>
	<button id="myBtn">Open Modal</button>

	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Some text in the Modal..</p>
		</div>

	</div><hr>
	<h2>Penkta uzduotis</h2>

	
	<script>
		//1 uzduotis. Uzvedus ant mygtuko turi pasikeisti spalva.
		/*
		$(document).ready(function(){
			$("#button").mouseenter(function(){
				//$(this).css("background", "yellow");
			})
		});
		//2. Uzduotis Sukurti 3 tabus ir 3 pastraipas.Puslapiui uzsikrovus rodomas pirmas tabas aktyvus ir rodoma tik pirma pastraipa. Paspaudus ant kito tabo, turi atvaizduoti atitinkama pastaipa.
		$(document).ready(function(){
			$("#p2").hide();
			$("#p3").hide();
			$("#mygtukas2").click(function(){
				$("#p1").hide();
				$("#p2").show();
			});
			$("#mygtukas3").click(function(){
				$("#p1").hide();
				$("#p2").hide();
				$("#p3").show();
			});

		});
		
		
		//3 uzduotis. Sukurti dropDown kuris turi 3 elementus. Paspaudus ant mygtuko,dropdownas atsiranda.Paspaudus dar karta kur nors ant lango dropdownas pasislepia.
		$(document).ready(function(){
			$("#dropdownas").hide();
			$("#mygtukas4").click(function(){
				$("#dropdownas").show();
			});
			$("html").dblclick(function(){
				$("#dropdownas").hide();
			});
		});
		//4. uzduotis. Sukurti popup modala. Paspaudus ant mygtuko, visas body turi patamseti ir atsirasti modalas.Panaudoti .fadeIn(). Modalas turi mygtuka close. Paspaudus modalas uzsidaro ir body pasvieseja. Panaudoti fadeOut().
		// When the user clicks the button, open the modal 

		$(document).ready(function(){
			//$("myModal").hide();
			$("#myBtn").click(function(){
				$("#myModal").fadeIn("slow");
				$("body").css("background","gray");
				
				//$("#myModal").show();
			});
			$(".close").click(function(){
				$("#myModal").fadeOut("slow");
				$("body").css("background","white");
			});
		});
		*/
		//5uzduotis. Sukurti navigacija puslapio virsuje. Pascrolinus i apacia, navigacija turi likti puslapio virsuje, nesvarbu kiek scrollintume i apacia.

	$(window).on('scroll', function() {
    if ($(window).scrollTop() > 1) {
        $('.nav').addClass('fixed');
    } else {
        $('.nav').removeClass('fixed');
    }
	});
	
	</script>
</body>
</html>