<!DOCTYPE html>
<html>
<head>
	<title>6 uzduotis</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<button id="mygtukas">Uzkrauti php</button>
	<table id="lentele" class="table">
			<tr>
				<th scope="col">Pavadinimas</th>
				<th scope="col">Modelis</th>
				<th scope="col">Svoris</th>
				<th scope="col">Spalva</th>
			</tr>
		
			<tr>
				<td id="pirma"></td>
				<td id="antra"></td>
				<td id="trecia"></td>
				<td id="ketvirta"></td>
			</tr>
	</table>
<script>
	$("#mygtukas").on('click', function(){
		$.ajax({
			url: "objektas.php",
			method: "GET",
			dataType:"JSON",
			success: function(responseText){
				$("#pirma").html(responseText.name);
				$("#antra").html(responseText.model);
				$("#trecia").html(responseText.weight);
				$("#ketvirta").html(responseText.color);
			}
		});
	});
</script>
</body>
</html>