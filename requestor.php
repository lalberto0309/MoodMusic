	<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <title>Color Selection</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="css/page_template.css">
	  <link rel="stylesheet" href="css/color_select.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/audioPlayer.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	</head>
	
	<body>
		<header class="container-fluid header">
			<div class="row" id="mobile-header">
				<div class="col-xs-1"></div>
				<div class="col-xs-11">
					<div class="inline">
						<a href=""><img src="images/mm_logo.png" width="60" height="60" alt=""></a>
					</div>
					<div class="inline bmprbx">
						<h4 class="lt-h horizontal-align">How Do You Feel?</h4>
					</div>
				</div>
			</div>
		</header>
		<div class="container-fluid">
			<form action="m_player.php" method="post">
				<div class="row">
					<div class="col-xs-1"></div>
					<div class="col-xs-10 col-sm-12">
						<h5 class="drk-h">Select a mood that describes how you feel and click Load Playlist!</h5>
						<div class="radio">
							<label><input type="radio" name="moodPref" value="happy" checked="checked">Enjoying Life</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="moodPref" value="sad">Some Type of Way</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="moodPref" value="angry">Pumped Up</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="moodPref" value="relaxed">Chilled Out</label>
						</div>
					</div>
					<div class="col-xs-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-8"></div>
					<div class="col-xs-12 col-sm-3">
						<button class="cnfrm-btn btn btn-md btn-block" type="submit">
							Load Playlist
						</button>
					</div>
					<div class="col-sm-1"></div>
				</div>							
			</form>
		</div>
	</body>
</html>
