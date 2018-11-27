<?php
if (isset($_GET['UDID'])) {
	$udid = $_GET['UDID'];
} else {
	header("Location: get_mobileconfig.php");
}
if (isset($_GET['DEVICE_PRODUCT'])) {
	$prod = $_GET['DEVICE_PRODUCT'];
} else {
	header("Location: get_mobileconfig.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="theme-color" content="#2196f3">
  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
  <title>Cydia</title>
  <link rel="stylesheet" href="core/css/framework7.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="apple-touch-icon" href="img/cydiaicon.png">
  <link rel="icon" href="img/cydiaicon.png">
</head>
<body>
  <div id="app">
    <div class="view view-main view-init ios-edges" data-url="/">
      <div class="page">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="left">
              <a href="#" onclick="about()">About</a>
            </div>
            <div class="title sliding">Home</div>
            <div class="right">
              <a href="https://root1201.me/" class="item-content external item-link">Reload</a>
            </div>
          </div>
        </div>
        <div class="page-content">
        <div class="center">
        
        </div>
          
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/ua-parser-js@0/dist/ua-parser.min.js"></script>
  <script type="text/javascript">
  var parser = new UAParser();
  var result = parser.getResult();
  if (result.os.version=="12.0" || result.os.version=="12.0.1" || result.os.version=="12.1" || result.os.version=="12.1.1") {
  console.log("Loading...");
  } else {
  	alert("device isn't on iOS 12!!");
  	document.location.href = "error.php";
  }
function about() {
	alert("\t    About Cydia Installer\t\n\t         (root1201.me)\t\n\tCopyright \u00A9 2008-2015\t\n\t         SaurikIT, LLC\t\n\n\t   Jay Freeman (saurik)\t\n\t     saurik@saurik.com\t\n\t http://www.saurik.com/\t");
}
  </script>
  <script src="core/js/framework7.min.js"></script>
  <script src="js/routes.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
