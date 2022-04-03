<script
src="http://maps.googleapis.com/maps/api/js">
</script>
  
<script>
$(document).ready(function(){
	
	function initialize()
	{
	  var mapProp = {
		center: new google.maps.LatLng(14.551799,121.019876),
		zoom:15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  
	  
		var marker=new google.maps.Marker({
			position:new google.maps.LatLng(14.551799,121.019876),
		});
	  var map = new google.maps.Map(document.getElementById("m1_dv"),mapProp);
	  marker.setMap(map);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
});
</script>

<div id="m1_dv" class="mapsq"></div>
