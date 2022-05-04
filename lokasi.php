<!DOCTYPE html>
<html>
<head>
	<title>Belajar Ambil Lokasi</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<p>lokasi anda saat ini: </p>

	<button type="button" onclick="getLocation()">Aktifkan Lokasi</button>
	<p id="demo" ></p>

	<p id="latitude"></p>
	<p id="longitude"></p>


<script type="text/javascript">
		  // jika browser support maka fungsi ini akan dijalankan
		  navigator.geolocation.getCurrentPosition((position) => {
    // tambahkan callback untuk menampilkan latitude dan longitude
    $("#latitude").html(`${position.coords.latitude}`);
    $("#longitude").html(`${position.coords.longitude}`);
    
   
});
</script>



<script>
	var x = document.getElementById("demo");

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else { 
			x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
		}
	}

	function showPosition(position) {
		x.innerHTML = "Latitude: " + position.coords.latitude + 
		"<br>Longitude: " + position.coords.longitude + 
		"<br><b>Lokasi Telah Aktif</b>"; 
	}
</script>  
</body>
</html>