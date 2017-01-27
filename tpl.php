<?php 
require_once('include/config.php'); 
require_once('include/function.php');
require_once('include/menu.php');
?>
<!DOCTYPE html>
<html lang="zh-tw">
<?php require_once('template/header.php');?>
<body class="w3-light-grey">



<!-- Sidenav/menu -->
<?php require_once('template/sidenav.php');?>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div id="main_container" class="w3-main w3-animate-left" style="margin-left:300px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
<?php if(isset($_tpl_data['sub'])){?>
	<h5><i class="fa <?=$_tpl_data['sub']['icon']?>"></i> <?=$_tpl_data['sub']['name']?> <i class="fa fa-chevron-right" aria-hidden="true"></i> <?=$_tpl_data['name']?></h5>
<?php }else{?>
    <h5><i class="fa <?=$_tpl_data['icon']?>"></i> <?=$_tpl_data['name']?> </h5>
<?php }?>
  </header>

	<?php require_once('template/tpl_'.$_tpl.'.php');?>

  <!-- Footer -->
<?php require_once('template/footer.php');?>

  <!-- End page content -->
</div>



</body>
</html>

