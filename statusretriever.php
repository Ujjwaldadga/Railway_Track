<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  body {
	margin: auto !important;
	padding: 0 !important;
	overflow: hidden !important;
}
div {
	margin: 10 !important;
	padding: 0 !important;
}
.wrapper {
	height: 600px;
	width: 1920px;
	margin: auto;
  bottom: 2000px;
	background: #280744;
	overflow: hidden !important;
}
.background {
	height: 1080px;
	width: 1920px;

	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QSXhkaG1VaEhSTjA
);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
}

.rocks_1 {
	position: absolute;
	bottom: -5px;
	height: 315px;
	width: 1920px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QckJsSTBOSmdsYmc);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
	animation: translateX 100s infinite linear both;
}
.rocks_2 {
	position: absolute;
	bottom: -60px;
	height: 315px;
	width: 1920px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QSC1sYnVUWUxKSGs);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
	animation: translateX 30s infinite linear both;
}
.rails {
	position: absolute;
	bottom: -110px;
	height: 315px;
	width: 1920px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QZmtCbjlIbjVwclk);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
	animation: translateX 5s infinite linear both;
}
.train {
	position: absolute;
	bottom: -105px;
	height: 315px;
	width: 1500px;
	right: 0px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QandQOVZSTjBETGs);
	background-repeat: no-repeat;
	background-position: top center;
	background-size: contain;
}
.ground {
  position: absolute;
  width: 1920px;
  height: 98px;
  bottom: 0px;
  background: #16012f;
}
.lights {
	position: absolute;
	bottom: -39px;
	height: 315px;
	width: 1920px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QNTJ1U2M1eFptSTA);
	background-repeat: repeat-x;
	background-position: top center;
	background-size: contain;
	animation: translateX 4s infinite linear both;
}
.moon {
	position: absolute;
	top: 20%;
	height: 315px;
	left: 1200px;
	width: 120px;
	background: url(https://docs.google.com/uc?export=download&id=0B2PO2Lr7Bv2QRTVYeVFoYVppeUU);
	background-repeat: no-repeat;
	background-position: top center;
	background-size: contain;
}

@keyframes translateX {
	0% {background-position: 0px 0px;}
	100% {background-position:  1920px 0px;}
}
  </style>
  <title>Live Status</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.jpg"/>
   <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" /> </head>
<body id="top">
  <header id="header" class="skel-layers-fixed">
        <nav class="nav">
        <div class="container">
      <div class="navbar-header">
    <!--    <a href="#" class="pull-left ">
      <div id="logo" alt="TheAppleTalks Logo"></div>  -->
      </a>
      <div class="navbar-brand">
      </div></div></div></nav>
        <nav id="nav" class="">
          <ul>
            <li><strong><?php if ($_SESSION['Admin'] == '1') {?>
              <a href="../Admin/admin.php">DASHBOARD</a>
              <?php } elseif ($_SESSION['Admin'] == '0') {?>
              <a href="../dashboard/dashboard.php">DASHBOARD</a>
            <?php } else {?><a href="index.php">HOME</a>
            <?php }?></strong></li>
            <li><strong><a href="statusretriever.php" class="selected">LIVE STATUS</a></strong></li>

            </div></strong></li>
            <li><strong><a href="About.php">ABOUT</a></strong></li>
            <li><strong><a href="Team.php">TEAM</a></strong></li>
            <li><strong><a href="contact.php">CONTACT</a></strong></li>
          </ul>
        </nav>
  </header>
<!--  <section>
  <div style="padding-top:100px;position:relative; left:550px; top:25px;">
    <b><h1>Live Train Status</h1></b>
<form action="?"  method="post">
  Train number:<br>
  <input type="number" name="Tnumber" required><br><br>
  Train Start Date :<br>
  <input type= "date" name="startdate" required> <br><br>
  <input type="submit" value="Submit" name ="submit">
</form></div></section>  -->

<div>
  <br>
  <div class="background" style="padding-top:600px;position:relative; left:0px;">
    <strong><b><h1>Live Train Status</h1></b></strong>
<form action="?"  method="post">
<strong>  Train number:</strong><br>
  <input type="number" name="Tnumber" required><br><br>
  <strong>Train Start Date :</strong><br>
  <input type= "date" name="startdate" required> <br><br>
  <input type="submit" value="Submit" name ="submit">
</form></div>
  <div class="background"></div>
  <div class="rocks_1"></div>
  <div class="rocks_2"></div>
  <div class="rails"></div>
  <div class="train"></div>
  <div class="ground"></div>
  <div class="lights"></div>
  <div class="moon"></div>

</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $train_no = $_POST["Tnumber"];

    $started_date = $_POST["startdate"];

    $started_date = date("d-m-Y", strtotime($started_date));      // <!   /apikey/5on7w9zra0/  >

    $api_url = "http://indianrailapi.com/api/v2/livetrainstatus" ."/apikey/2163926bbe28646f4e31e4aa17aef670/trainnumber/". trim($train_no) . "/date/" . trim($started_date) ;

    $json = file_get_contents("$api_url"); //Using the Api

    $json = stripslashes(html_entity_decode($json)); // Stripping the useless shit

    $json_decoded = json_decode($json, true);

    echo "<strong>Train Name :</strong>{$json_decoded['train']['name']}";

    echo "<br><strong> Last Position :</strong> ";
    print_r($json_decoded['position']);

    echo "<br>";

    echo '<table>';
    echo '<tr>';
    echo "<th>Station Name And Code</th>";
    echo "<th>Actual Arrival Time</th>";
    echo "<th>Actual Departure Time</th>";
    echo "<th>Late/Early</th>";
    echo "<th>Current Position</th>";
    echo "<th>Scheduled Arrival</th>";
    echo "<th>Scheduled Departure</th>";
    echo "<th>Enroute Day</th>";
    echo "<th>Distance(kms)</th></tr>";
    //Tabel starts here  -you have to put attribute names ( mentioned in echo comments )
    foreach ($json_decoded['route'] as $route) {

        // Output a row
        echo "<tr>";
        echo "<td>{$route['station']['name']}({$route['station']['code']})</td>"; // Station name and code
        echo "<td>{$route['actarr']}</td>"; // actual arrival time
        echo "<td>{$route['actdep']}</td>"; //actual departure time
        echo "<td>{$route['status']}</td>"; // Late/Early

        if ($route['has_departed'] == true) //Current Position
        {
            echo "<td>Departed</td>";
        } else {
            echo "<td>Estimated</td>";
        }

        echo "<td>{$route['scharr']}</td>"; //Scheduled arrival
        echo "<td>{$route['schdep']}</td>"; //scheduled departure
        echo "<td>{$route['day']}</td>"; //Enroute day
        echo "<td>{$route['distance']}</td>"; // Distance (kms)
        echo "</tr>";
    }
    echo '</table>';

}
?>
