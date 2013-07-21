<html>
<head>
	<title>Planet</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div>
  <?php
  include('rssclass.php');
  $feedlist = new rss('http://somsubhrabairi.blogspot.com/feeds/posts/default?alt=rss');
  echo $feedlist->display(10,"Somsubhra");
  ?> 
  </div>
</body>
</html>