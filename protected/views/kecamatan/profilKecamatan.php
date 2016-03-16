<?php
//import ektensi EGMap yang ada di folder protected/extensions
Yii::import('ext.EGMap.*');
 
//buat object EGMap dan setting posisi, tipe dan controlnya
$gMap = new EGMap();
$gMap->setWidth(888);
$gMap->setHeight(545);
$gMap->zoom = 8;
$gMap->mapTypeControlOptions = array(
 'position'=> EGMapControlPosition::RIGHT_TOP,
 'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);

  
   //menset center
  if($centers->koordinat_kab_kota != null){
	$center = explode(",", $centers->koordinat_kab_kota);
	$gMap->setCenter($center[0], $center[1]);
	echo $centers->koordinat_kab_kota;
  }else{
	$gMap->setCenter(-1.675349, 113.850745);
  }

  foreach($model as $record){
   
  //polygon
	if($record->polygon_kec==null){
		continue;
	}
	else{
		$a = explode("|", $record->polygon_kec);

			$koor = array();
		
			foreach($a as $b){
				
				$c = explode(",", $b);
				
				$koor[] = new EGMapCoord($c[0], $c[1]);

			}

			$info_window = new EGMapInfoWindow($record->nama_kec);
			
			$polygon = new EGMapPolygon($koor);
			$polygon->addHtmlInfoWindow($info_window);
/* 
			 $url = Yii::App()->baseUrl."/index.php?r=kecamatan/profil&id=".$record->kode_kab_kota;
			$polygon->addEvent(
					new EGMapEvent(
						'click',
						'
							
							window.location = "'.$url.'"; 
						'
						
						
				));
				 */
				
			$gMap->addPolygon($polygon);

			

  } 
} 
  


$gMap->renderMap(array(), Yii::app()->language);  
?>