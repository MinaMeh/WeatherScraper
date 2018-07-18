
<!DOCTYPE html>
<html>
<head>
	<title> Weather Scraper</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 center">
			 <h1 class="center white"> Weather Predictor</h1>
			 <p class="lead center white"> Enter your city bellow to get a forecast weather</p>
			 <form>
			 	<div class="form-group">
			 		<input type="text" name="form-control" name="city" id="city" placeholder="eg: London, Paris, San Francisco...">
			 	</div>
			 	<button class="btn btn-success btn-lg" id="findMyWeather">
			 		Find my weather
			 		
			 	</button>
			 </form>
			 <div id="success" class="alert alert-success info">
			 	success
			 </div>
			 <div id="fail" class="alert alert-danger info"> Could not find your city,, please try again.</div>
		</div>
	</div>
	
</div>


<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#findMyWeather").click(function(event){
		event.preventDefault();
		if ($("#city").val()!=""){
		$.get("Scraper.php?city="+$("#city").val(),function(data, status){
			
			if (data==""){
				$("#success").hide();
				$("#fail").fadeIn();
				
			}
			else{
				$("#fail").hide();
				$("#success").html(data).fadeIn();
			}
		});
	}
	else
	{
		alert("please enter a city");
	}
	});
</script>
</body>
</html>