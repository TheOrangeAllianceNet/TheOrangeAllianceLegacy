<!DOCTYPE html>
<html>
	<head>
		<title>The Orange Alliance</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet" type="text/css">
		<link href = "css/styles.css" rel = "stylesheet" type="text/css">
		<link rel="apple-touch-icon" sizes="152x152" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/apple-touch-icon.png?v=vMrqOno5qk">
		<link rel="icon" type="image/png" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/favicon-32x32.png?v=vMrqOno5qk" sizes="32x32">
		<link rel="icon" type="image/png" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/favicon-16x16.png?v=vMrqOno5qk" sizes="16x16">
		<link rel="manifest" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/manifest.json?v=vMrqOno5qk">
		<link rel="mask-icon" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/safari-pinned-tab.svg?v=vMrqOno5qk" color="#ff9500">
		<link rel="shortcut icon" href="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/favicon.ico?v=vMrqOno5qk">
		<meta name="apple-mobile-web-app-title" content="The Orange Alliance">
		<meta name="application-name" content="The Orange Alliance">
		<meta name="msapplication-config" content="https://sites.google.com/site/filehostdummysite1234/files/theorangealliance/browserconfig.xml?v=vMrqOno5qk">
		<meta name="theme-color" content="#ff9500">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js-webshim/minified/polyfiller.js"></script>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<script type="text/javascript">
		$(document).ready(function() { 
			$('.quantity-right-plus').click(function(e){
				e.preventDefault();
				var quantity = parseInt($('#quantity').val());
				$('#quantity').val(quantity + 1);
			});

			$('.quantity-left-minus').click(function(e){
				e.preventDefault();
				var quantity = parseInt($('#quantity').val());
				if(quantity>0){
				$('#quantity').val(quantity - 1);
				}
			});
			
			$('.quantity-right-plus1').click(function(e){
				e.preventDefault();
				var quantity1 = parseInt($('#quantity1').val());
				$('#quantity1').val(quantity1 + 1);
			});

			$('.quantity-left-minus1').click(function(e){
				e.preventDefault();
				var quantity1 = parseInt($('#quantity1').val());
				if(quantity1>0){
				$('#quantity1').val(quantity1 - 1);
				}
			});
		});
		</script>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="nav-brand" href="http://theorangealliance.tk:8080/"> 
					<img style="max-width:50px" src="/images/logo.png"> 
					<span class="logo hidden-xs">The Orange Alliance</span>
					</a>
					<a class="nav-brand" href="http://theorangealliance.tk:8080/"></a>
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
				</div>
				<div class = "collapse navbar-collapse navHeaderCollapse">
					<ul class = "nav navbar-nav navbar-right">
						<li ><a href = "http://theorangealliance.tk:8080/">Home</a></li>
						<li><a href = "http://theorangealliance.tk:8080/events/velocity-vortex.php">Events</a></li>
						<li class = "active"><a href = "http://theorangealliance.tk:8080/input-data.php">Input Match Results</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="content">
			<form action="input-data.php" method="post">
			<h1>Input Match Results</h1>
			<hr></hr>
			
			<div class="container-fluid pinkbox">
			<div class="container-fluid darkpinkbox">
			<h4>Match Information</h4>
			</div>
			<div class="col-md-6" style="padding-right: 7px;">
			<h3>Match Date <span class="glyphicon glyphicon-calendar"></span></h3>
					<select class="form-control" id="inputID" name="matchDate" required>
						<option>02/25/17</option>
					</select>
	
			<h3>Match Location<span class="glyphicon glyphicon-map-marker"></span></h3>
					<select class="form-control" id="inputID" name="matchPlace" required>
						<option>6501 Linda Vista Rd, San Diego, CA 92111</option>
					</select>

				<h3>Match Number <span class="glyphicon glyphicon-list"></span></h3>
				<input type="number" class="form-control" id="inputID" name="matchNumber" required>
			</div>
			<div class="col-md-6" style="padding-left: 7px;">
				<h3>Robot Alliance <span class="glyphicon glyphicon-flag"></span></h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext bluealliancebutton">
								<input type="radio" name="robotAlliance" id="option1" autocomplete="off" value="Blue" required>Blue
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redalliancebutton">
								<input type="radio" name="robotAlliance" id="option1" autocomplete="off" value="Red">Red
							</label>
						</div>
					</div>
			<h3>Team Number <span class="glyphicon glyphicon-star"></span></h3>
				<input type="number" class="form-control" id="inputID" name="teamNumber" required>

			<h3>Validation Code <span class="glyphicon glyphicon-wrench"></span></h3>
				<input type="text" class="form-control" id="inputID" name="dataValidation" required>
			</div>
			</div>
			
			<div class="col-md-6">
			<div class="container-fluid redbox">
			<div class="container-fluid darkredbox">
			<h4>Autonomous Period Scoring</h4>
			</div>
			
			<h3><img style="max-width:50px" src="/images/centervortex.png"><img style="max-width:50px" src="/images/cornervortex.png">
			Robot Parking</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoRobotParking" id="option1" autocomplete="off" value="Did Not Park" required>No<br>Parking
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoRobotParking" id="option1" autocomplete="off" value="Partially On Center Vortex">Partially<br>Center
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoRobotParking" id="option1" autocomplete="off" value="Partially On Corner Vortex">Partially<br>Corner
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoRobotParking" id="option1" autocomplete="off" value="Fully On Center Vortex">Fully<br> Center
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoRobotParking" id="option1" autocomplete="off" value="Fully On Corner Vortex">Fully<br> Corner
							</label>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/particles.png"><img style="max-width:50px" src="/images/centervortex.png">
				Robot Particles Scored in Center Vortex</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoClaimedBeacons" id="option1" autocomplete="off" value="0" required>0
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoClaimedBeacons" id="option1" autocomplete="off" value="1">1
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoClaimedBeacons" id="option1" autocomplete="off" value="2">2
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoClaimedBeacons" id="option1" autocomplete="off" value="3">3
							</label>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/particles.png"><img style="max-width:50px" src="/images/cornervortex.png">
				Robot Particles scored in Corner Vortex</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="0" required>0
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="1">1
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="2">2
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="3">3
							</label>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/capballs.png">
				Robot Cap Ball in Contact with the Floor</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoCapBall" id="option1" autocomplete="off" value="Yes" required>Yes
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoCapBall" id="option1" autocomplete="off" value="No">No
							</label>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/beacon.png">
				Robot Claimed Beacons</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="0" required>0
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="1">1
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default redtext redbutton">
								<input type="radio" name="autoParticlesCorner" id="option1" autocomplete="off" value="2">2
							</label>
						</div>
					</div>
			</div>
			</div>
			
		<div class="col-md-6">
			<div class="container-fluid bluebox">
			<div class="container-fluid darkbluebox">
			<h4>Driver-Controlled Period Scoring</h4>
			</div>
			
				<h3><img style="max-width:50px" src="/images/particles.png"><img style="max-width:50px" src="/images/centervortex.png">
				Robot Particles Scored in Center Vortex</h3>
					<div class="input-group">
						<div class="input-group-btn">
						<button type="button" class="btn btn-default bluetext quantity-left-minus" data-type="minus"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
						</div>
						<input type="number" id="quantity" class="form-control" name="driverParticlesCenter" required value="0">
						<div class="input-group-btn">
						<button type="button" class="btn btn-default bluetext quantity-right-plus" data-type="plus"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/particles.png"><img style="max-width:50px" src="/images/cornervortex.png">
				Robot Particles Scored in Corner Vortex</h3>
					<div class="input-group">
						<div class="input-group-btn">
						<button type="button" class="btn btn-default bluetext quantity-left-minus1" data-type="minus1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
						</div>
						<input type="number" id="quantity1" class="form-control" name="driverParticlesCorner" required value="0">
						<div class="input-group-btn">
						<button type="button" class="btn btn-default bluetext quantity-right-plus1" data-type="plus1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
						</div>
					</div>
			</div>
			
			<div class="container-fluid greenbox">
				<div class="container-fluid darkgreenbox">
					<h4>End Game Period Scoring</h4>
				</div>
			
				<h3><img style="max-width:50px" src="/images/beacon.png">
				Alliance Claimed Beacons</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endAllianceClaimedBeacons" id="option1" autocomplete="off" value="0" required>0
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endAllianceClaimedBeacons" id="option1" autocomplete="off" value="1">1
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endAllianceClaimedBeacons" id="option1" autocomplete="off" value="2">2
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endAllianceClaimedBeacons" id="option1" autocomplete="off" value="3">3
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endAllianceClaimedBeacons" id="option1" autocomplete="off" value="4">4
							</label>
						</div>
					</div>
				<h3><img style="max-width:50px" src="/images/capballs.png">
				Robot Cap Ball</h3>
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endCapBall" id="option1" autocomplete="off" value="On The Ground" required>On The <br>Ground
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endCapBall" id="option1" autocomplete="off" value="Raised Off The Floor">Raised Off <br>The Floor
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endCapBall" id="option1" autocomplete="off" value="Raised Above Vortex">Raised <br>Above Vortex
							</label>
						</div>
						<div class="btn-group" role="group">
							<label class="btn btn-default greentext greenbutton">
								<input type="radio" name="endCapBall" id="option1" autocomplete="off" value="Scored In Center Vortex">Scored In <br>Center Vortex
							</label>
						</div>
					</div>
			</div>
		</div>
			
			<center><button type="submit" class="btn btn-primary btn-block raised">Submit</button></center>
		</form>
		<?php
			require 'input.php';
			function AllOfIt(){
			//Loading and setting up the mongodb PHP
			$m = new MongoClient();
				// select a database
				$db = $m->TheOrangeAlliance;
				$collectionName = "Y" . TimeTime($_POST['matchDate']) . PlaceID($_POST['matchPlace'], 'rainbow')  . "Raw";
				$collection = $db->$collectionName;

			$document = array(
				"MetaData" => array(
					"MetaData" => "MatchInputRaw",
					"TimeStamp" => date('YmdHis'),
					"DatePlace" => $collectionName,
					"ScreenStatus" => "Unscreened",
					"InputID" => $_POST['dataValidation']
				),

				"DataValidation" => array(
					"ValidationKey" => $_POST['dataValidation'],
					"ValidationValue" => ValidationValue($_POST['dataValidation'])
				),

				"MatchInformation" => array(
					"MatchNumber" => intval($_POST['matchNumber']),
					"RobotAlliance" => $_POST['robotAlliance'],
					"TeamNumber" => intval($_POST['teamNumber'])
				),

				"GameInformation" => array(
					"AUTO" => array(
						"RobotParking" => InputTranslator($_POST['autoRobotParking']),
						"ParticlesCenter" => intval($_POST['autoParticlesCenter']),
						"ParticlesCorner" => intval($_POST['autoParticlesCorner']),
						"CapBall" => InputTranslator($_POST['autoCapBall']),
						"ClaimedBeacons" => intval($_POST['autoClaimedBeacons'])
					),
					"DRIVER" => array(
						"ParticlesCenter" => intval($_POST['driverParticlesCenter']),
						"ParticlesCorner" => intval($_POST['driverParticlesCorner'])
					),
					"END" => array(
						"AllianceClaimedBeacons" => intval($_POST['endAllianceClaimedBeacons']),
						"CapBall" => InputTranslator($_POST['endCapBall'])
					)
				)
			);
			$collection->insert($document);
			CreateDBLog(
				$collectionName,
				"MatchInput",
				date('YmdHis'),
				$_POST['dataValidation'],
				"Testing",
				$_POST['dataValidation']
			);
			}
			AllOfIt();
		?>
		</div>
				<div class="footer">
			<div class="container">
				<div class="col-md-6" style="padding-bottom: 10px;">
				<center>
				Designed by:
				Team 8097 Botcats,
				Team 9261 Level Up,
				Team 10809 Crow Force 5
				</center>
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3" >
				<center>
					© TheOrangeAlliance 2017
					</cetner>
				</div>
			</div>
		</div>
<script> 
	$('#mySelect').change(function () {
		$('#mySelect').css("background", $("select option:selected").css("background-color"));
	});
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "js/bootstrap.js"></script>
	</body>
</html>