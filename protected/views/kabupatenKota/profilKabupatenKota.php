<?php
//import ektensi EGMap yang ada di folder protected/extensions
Yii::import('ext.EGMap.*');
 
//buat object EGMap dan setting posisi, tipe dan controlnya
$gMap = new EGMap();
$gMap->setWidth(800);
$gMap->setHeight(545);
$gMap->zoom = 7;
$gMap->mapTypeControlOptions = array(
 'position'=> EGMapControlPosition::RIGHT_TOP,
 'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
$gMap->setCenter(-1.500401, 113.323701);

 
//merender dan menampilkan peta

  foreach($model as $record){
	//menset Center
	if($centers->koordinat_prov==null){
		$gMap->setCenter(-1.500401, 113.323701);
	}else{
		$center = explode(",",$centers->koordinat_prov);
		$gMap->setCenter($center[0], $center[1]);
	}
	
	//menset Zoom
	if($centers->luas_prov < 100000){
		$gMap->zoom = 8;
	}
	
	
	//menset koordinat dari polygon
	if($record->polygon_kab_kota==null){
		continue;
	}
	else{
		$a = explode("|", $record->polygon_kab_kota);

			$koor = array();
		
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
			$info_window = new EGMapInfoWindow(
				'<div id="infowindow">
				 
				<table>
				<tr><td colspan="2"><b>'.$record->nama_kab_kota.'</b><br></td></tr>
				<tr><td>Ibu Kota: </td><td>'.$record->ibukota_kab_kota.'</td></tr>
				<tr><td>Luas: </td><td>'.$record->luas_kab_kota.'</td></tr>
				<tr><td>Populasi: </td><td>'.$record->populasi_kab_kota.'</td></tr>
				<tr><td>Jumlah Kecamatan: </td><td>'.$record->jlh_kecamatan.'</td></tr>
				<tr><td>Jumlah Desa: </td><td>'.$record->jlh_desa.'</td></tr>
				</table>
				</div>'
			
			);
			
			$polygon = new EGMapPolygon($koor);
			$polygon->addHtmlInfoWindow($info_window);

			 $url = Yii::App()->baseUrl."/index.php?r=kecamatan/profil&id=".$record->kode_kab_kota;
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

<style type="css">
#infowindow{
	width:200;
	height:100;
}
</style>