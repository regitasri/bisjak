<script type="text/javascript" src="assets/jkt-batasadm.js"></script>
<script>
        var centerLatLng = [-6.175296396300177, 106.82714206788756];
        var mapOptions = {
            center: centerLatLng,
            zoom: 10
        }
        var map = L.map('map', mapOptions);

        var tileLayer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });
        tileLayer.addTo(map);

        var geojson;
        
        geojson = L.geoJSON(data).addTo(map);
</script>