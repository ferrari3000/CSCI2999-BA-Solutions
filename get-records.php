<!doctype html>
<link rel="stylesheet" href="include/style.css" />
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Main Container -->
  <!-- Logo Section -->
  <section class="hero" id="hero">
    <div> <a href="index.html"> <img id="logo" src="img/m_and_p_logo.png" alt="M & P Logo"></a> <img id="slogan" src="img/m_and_p_slogan.png" alt="M & P Slogan"> </div>
  </section>

<div class="container">
 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo"></h4>
    </a>
    <nav>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="aboutUs.html">ABOUT US</a></li>
        <li><a href="get-records.php">RECORDS</a></li>
        <li> <a href="contact.html">CONTACT</a></li>
      </ul>
    </nav>
  </header>


<div id="table">

<div id="artistselect"> 

<?php include 'get-artist.php'; ?>

</div>

 <?php

$result = $con->query('select * from album');
    echo '<table><tr><th>Album</th><th>Cost</th><th>Stock</th><th>Quantity</th></tr>';
        
        while ($row = $result->fetch_object()) {

        echo '<tr>';  
        echo '<td>' . $row->name . '</td>';
        echo '<td>' . $row->cost . '</td>';
        echo '<td>' . $row-> stock . '</td>';
        echo '<td> <input name="quantity-{$album->id}\" type=\"text\" $val> </td>';
    }
    echo "</table>";   

?> 
</div>
</div>
</body>


<!-- Footer Section -->
<footer>
    <div id = "footer"><a href="https://www.facebook.com/BigBrothersBigSistersCentralOhio/?rc=p" target="_blank"><img src="img/facebook_circle.png" alt="Facebok Logo" height="80"/></a> 
    
<a href="https://twitter.com/BBBSA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="img/twitter_circle.png" alt="Twitter Logo" height="80"/></a> 

<a href="https://www.instagram.com/bbbsamerica/" target="_blank"><img src="img/instagram_circle.png" alt="Instagram Logo" height="80"/></a>

<a href="https://www.youtube.com/user/BBBSofAmerica" target="_blank"><img src="img/youtube_circle.png" alt="YouTube Logo" height="80"/></</a>
</div>
</footer>
<!-- Main Container Ends -->
</html>