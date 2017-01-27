<nav class="w3-sidenav w3-collapse w3-white " style="z-index:3;width:300px;" id="mySidenav">
<!--大網顯示-->
  <div class="w3-padding-large w3-center w3-teal w3-hide-small w3-hide-medium">
	<span class="w3-xlarge">Admin</span>
  </div>
<!--小網顯示-->
  <span onclick="w3_close()" class="w3-closebtn w3-hide-large w3-hover-red w3-display-topright"><i class="fa fa-remove fa-fw"></i> </span>
  <div class="w3-container w3-hide-large">
	<h3>menu<h3>
  </div>
	<br>
	
<!--MENU顯示-->
<?php
	foreach($menu_ as $a){
		if($a['sub']){	###如果有縮排的連結
?>  
		<div class="w3-accordion">
			<a onclick="myFunction('Demo1')" class="w3-padding <?=(get_url_tag($a['url']))?'w3-light-grey':'';?>">
			<i class="fa <?=$a['icon']?> fa-fw"></i>
			  <?=$a['name']?>
			<i class="fa fa-caret-down"></i>
			</a>
			<div id="Demo1" class="w3-accordion-content w3-padding  <?=(get_url_tag($a['url']))?'w3-show':'';?>">
<?php foreach($a['sub'] as $as){ ?>
				<a href="<?=$as['url'].".php"?>" class="w3-padding <?=(get_url_tag($as['url']))?'w3-blue':'';?>">
				<i class="fa <?=$as['icon']?> fa-fw"></i>
				  <?=$as['name']?>
				</a>
<?php }?>  			  
			</div> 
		</div>
<?php
		}else{		###沒有縮排的連結
?>  
			<a href="<?=$a['url'].".php"?>" class="w3-padding <?=(get_url_tag($a['url']))?'w3-blue':'';?>">
			<i class="fa <?=$a['icon']?> fa-fw"></i>
			  <?=$a['name']?>
			</a>
<?php
		}
	}
?>  

  


</nav>
<!--小網顯示上方nav條-->
<div class='w3-hide-large w3-teal'>
	<i class="fa fa-bars w3-opennav w3-xlarge w3-margin-left w3-margin-top w3-section" onclick="w3_open();"></i>
	<div class="w3-right w3-margin-right w3-margin-top w3-section "><span>Admin</span></div>
</div>


<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");


// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
		$('#main_container').removeClass('shadow');
    } else {
        mySidenav.style.display = 'block';
		$('#main_container').addClass('shadow');
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
	$('#main_container').removeClass('shadow');
}

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>