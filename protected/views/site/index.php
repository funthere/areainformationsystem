<?php
//import ektensi EGMap yang ada di folder protected/extensions
Yii::import('ext.EGMap.*');
 
//buat object EGMap dan setting posisi, tipe dan controlnya
$gMap = new EGMap();
$gMap->setWidth(688);
$gMap->setHeight(545);
$gMap->zoom = 7;
$gMap->mapTypeControlOptions = array(
 'position'=> EGMapControlPosition::RIGHT_TOP,
 'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
$gMap->setCenter(-1.500401, 113.323701);

 
//merender dan menampilkan peta

  foreach($model as $record){
	if($record->polygon_prov==null){
		continue;
	}
	else{
		$a = explode("|", $record->polygon_prov);

			$koor = array();
			//looping untuk mengambil koordinat dari database sebagai array of koordinat
			foreach($a as $b){
				
				$c = explode(",", $b);

				$koor[] = new EGMapCoord($c[0], $c[1]);
 
			}
			$option1 = array(
				//paths => null,
						// stroke color of the edge of the polygon
						'strokeColor' => '"#000000"',
						//stroke opacity of the edge of the polygon
						'strokeOpacity' => 0.8,
						//stroke weight of the edge of the polygon
						'strokeWeight' => 1,
						//fill color of the polygon
						'fillColor' => '"#FFD480"',
						//fill opacity of the polygon
						'fillOpacity' => 0.5
			);	
			$option2 = array(
				//paths => null,
						// stroke color of the edge of the polygon
						'strokeColor' => '"#000000"',
						//stroke opacity of the edge of the polygon
						'strokeOpacity' => 0.8,
						//stroke weight of the edge of the polygon
						'strokeWeight' => 3,
						//fill color of the polygon
						'fillColor' => '"#FFD480"',
						//fill opacity of the polygon
						'fillOpacity' => 0.5
			);
			$info_window = new EGMapInfoWindow($record->nama_prov);
			
			$polygon = new EGMapPolygon($koor);
			$polygon->addHtmlInfoWindow($info_window);

			 $url = Yii::App()->baseUrl."/index.php?r=kabupatenKota/profil&id=".$record->kode_prov;
			$polygon->addEvent(
					new EGMapEvent(
						'click',
						'
							
							window.location = "'.$url.'"; 
						'
						
						
				));
				
				
			$gMap->addPolygon($polygon);

			
	}
  }

  


$gMap->renderMap(array(), Yii::app()->language);  
?>