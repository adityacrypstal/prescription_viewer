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
<nav class="nav-extended wavaes light-blue ">
    <div class="nav-wrapper container">
      <?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[6];
      if($page==NULL){  $page='add_patient';}?>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li class="<?php echo ($page == "add_doctor" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/add_doctor')?>" >Add Doctor</a></li>
      <li class="<?php echo ($page == "list_doctor" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/list_doctor')?>">List Doctor's</a></li>
      <li class="<?php echo ($page == "add_patient" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/add_patient')?>">Add Patient</a></li>
      <li class="<?php echo ($page == "list_patient" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/list_patient')?>">List Patient</a></li>
      <li class="<?php echo ($page == "appointments" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/appointments')?>">Appoint</a></li>
      <li class="<?php echo ($page == "pharmacies" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/pharmacies')?>">Pharmacies</a></li>
      <li class="<?php echo ($page == "prescribe" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/prescribe')?>">Appointments</a></li>
      <li ><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li> 
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li class="<?php echo ($page == "add_doctor" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/add_doctor')?>" >Add Doctor</a></li>
      <li class="<?php echo ($page == "list_doctor" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/list_doctor')?>">List Doctor's</a></li>
      <li class="<?php echo ($page == "add_patient" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/add_patient')?>">Add Patient</a></li>
      <li class="<?php echo ($page == "list_patient" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/list_patient')?>">List Patient</a></li>
      <li class="<?php echo ($page == "appointments" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/appointments')?>">Appoint</a></li>
      <li class="<?php echo ($page == "pharmacies" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/pharmacies')?>">Pharmacies</a></li>
      <li class="<?php echo ($page == "prescribe" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/view/prescribe')?>">Appointments</a></li>
      <li ><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li> 
      </ul>
      </ul>
    </div>
</nav><br><br>