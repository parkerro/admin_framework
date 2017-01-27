<?php
####################
#	取得config menu資料
####################
$_tpl_data = array('name'=>"",'icon'=>"");
	foreach($menu_ as $a){
		if($a['sub']){
			$_tpl_data['sub']['url'] = $a['url'];
			$_tpl_data['sub']['name'] = $a['name'];
			$_tpl_data['sub']['icon'] = $a['icon'];
			foreach($a['sub'] as $as){
				if($as['url'] == $_tpl){
					$_tpl_data['url'] = $as['url'];
					$_tpl_data['name'] = $as['name'];
					$_tpl_data['icon'] = $as['icon'];
					break;
				}				
			}		
		}else{	
			if($a['url'] == $_tpl){
				$_tpl_data['url'] = $a['url'];
				$_tpl_data['name'] = $a['name'];
				$_tpl_data['icon'] = $a['icon'];
				break;
			}
		}
	}
?>