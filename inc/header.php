<?php $title="Rose Travel " ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> | <?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<nav>
  	<ul>
      <li class="<?php if($page=='home'){echo 'active';} ?>"><a href="index.php">الرئيسية </a></li>   
      <li class="<?php if($page=='places'){echo 'active';} ?>"><a href=" places.php">الأماكن  </a></li>
      <li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="contact.php">اتصل بنا </a></li>        
	</ul>
  </nav>

<header>
<img src="images/logo.jpg" alt="" class="pop"/>
<h1>Travel In Egypt</h1>
</header>

<div class="container">