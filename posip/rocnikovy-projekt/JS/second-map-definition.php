<script>
function createsecondmap(){
	var map;
	var bounds = new google.maps.LatLngBounds();
	<?php
	$dbHost = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "posip";
	$conn = mysqli_connect( $dbHost, $dbUsername, $dbPassword, $dbName );
	$sql = "SELECT latitude, longitude FROM aboutphenomenon WHERE aboutphenomenon.del=0 " ;
	$result = mysqli_query($conn, $sql);
 ?>
	 
	var Czechia = {
		lat: 49.61,
		lng: 15.35
	};
	map = new google.maps.Map(document.getElementById("galmap"), { //https://www.codexworld.com/adding-multiple-markers-with-info-windows-to-google-maps-dynamically-from-database/
		center: Czechia,
		zoom: 8,
	});
	
	var markers = [		
		<?php
	    $i = 0;
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		$i++;
		if($i<mysqli_num_rows($result)){		
		echo '['.$row['latitude'].', '.$row['longitude'].'], ';	
		}
			else{echo '['.$row['latitude'].', '.$row['longitude'].'] ';}
		}		
		}
		?>	
	];
	
	<?php 
	
		mysqli_query( $conn, "SET CHARACTER SET utf8" );
		$sql = "SELECT issues.issuename, specials.specname, aboutphenomenon.phenomenonurgency, aboutphenomenon.idphoto, aboutphenomenon.othertext, images.file_name, redablepossition.region, redablepossition.city, redablepossition.street FROM aboutphenomenon LEFT JOIN images ON aboutphenomenon.idphoto = images.idphoto LEFT JOIN redablepossition ON aboutphenomenon.idphenomenon = redablepossition.idphenomenon LEFT JOIN issues ON aboutphenomenon.issueid = issues.issueid LEFT JOIN specials ON aboutphenomenon.specid = specials.specid
		WHERE aboutphenomenon.del=0 ";		
		$result = mysqli_query( $conn, $sql );	
	
	?>
	
	var infoWindows = [
		<?php
		if(mysqli_num_rows($result) > 0){
			$i=0;
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			
			$ifIsOthertext = "";
			if ( $row[ "othertext" ] != "" ) {
					$ifIsOthertext = "Vlastní komentář uživatele: " . $row[ "othertext" ];
				}	
			
			if($i<mysqli_num_rows($result)){?>
		['<div class="infowindow">' + '<?php  echo $row[ "city" ]; ?>' + '<?php  echo  "–" . $row[ "issuename" ]; ?>' + '<?php  echo "<br>Kraj: " . $row[ "region" ] . "<br>Město: " . $row[ "city" ] . ", na ulici: " . $row[ "street" ] . "<br>Povaha situace: " . $row[ "issuename" ] . "<br>Specifikace: " . $row[ "specname" ]; ?>' + '</div>'],
		     
			<?php
			}
		else {?>
		['<div class="infowindow">' + '<?php  echo $row[ "city" ]; ?>' + '<?php  echo  "–" . $row[ "issuename" ]; ?>' + '<?php  echo "<br>Kraj: " . $row[ "region" ] . "<br>Město: " . $row[ "city" ] . ", na ulici: " . $row[ "street" ] . "<br>Povaha situace: " . $row[ "issuename" ] . "<br>Specifikace: " . $row[ "specname" ]; ?>' + '</div>']
		     
			<?php
			  
			}$i++;
			
		}
		}
		?>
	];
	
	var infoWindow = new google.maps.InfoWindow(), marker, i;
	
	for(i = 0; i < markers.length; i++){
		 var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function(){
				infoWindow.setContent(infoWindows[i][0])
				infoWindow.open(map, marker);
			}
          
        })(marker, i));
		
	}
	
}
<?php
			mysqli_close( $conn );
?>
	google.maps.event.addDomListener(window, 'load', createsecondmap);
</script>
		