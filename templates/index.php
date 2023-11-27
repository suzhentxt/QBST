<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QBST</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1> Water Monitoring </h1>
        </div>
            <div id="menu">
            <ul>
                
            </ul>
        </div>
        <div id="main-content">
          <h2>Water Quality</h2>
            
        </div>
    </div>
  
  <script>
    document.getElementById("wqivalue").innerHTML = 100;
    function loadXMLDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("main-content").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "server.php", true);
      xhttp.send();
    }
    setInterval(function() {
      loadXMLDoc();
    }, 5000);

    // window.onload = loadXMLDoc;

  </script>

</body>
</html>
