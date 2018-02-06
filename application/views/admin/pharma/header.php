<!DOCTYPE html>
<html>
<head>
	<title>Prescription Viewer</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[6];
      if($page==NULL){  $page='index';}?>
<nav class="nav-extended wavaes light-blue ">
    <div class="nav-wrapper container">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
     
      <li class="<?php echo ($page == "index" ? "active" : "")?>"><a href="<?=base_url('index.php/Pharma/view/index')?>">Home</a></li>
    
      <li  class="<?php echo ($page == "profile" ? "active" : "")?>"><a href="<?=base_url('index.php/Pharma/view/profile')?>">Profile</a></li>
      <li><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li>

      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li class="<?php echo ($page == "index" ? "active" : "")?>"><a href="<?=base_url('index.php/Pharma/view/index')?>">Home</a></li>
   
      <li  class="<?php echo ($page == "profile" ? "active" : "")?>"><a href="<?=base_url('index.php/Pharma/view/profile')?>">Profile</a></li>
      <li><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li>
  
      </ul>
    </div>
</nav><br><br>