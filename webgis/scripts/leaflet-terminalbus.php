<script type="text/javascript" src="assets/jkt-terminalbus.js"></script>
<script>
        var centerLatLng = [-6.175296396300177, 106.82714206788756];
        var mapOptions = {
            center: centerLatLng,
            zoom: 11
        }
        var map = L.map('map', mapOptions);

        var tileLayer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });
        tileLayer.addTo(map);

        var geojsonMarkerOptions = {
            radius: 4,
            fillColor: "#ff7800",
            color: "#000",
            weight: 1,
            opacity: 1,
            fillOpacity: 0.8
        };
        
        function setCircleMarker(feature, latlng) {
            return L.circleMarker(latlng, geojsonMarkerOptions);
        }

        function getDescription(feature, layer) {
            if (feature.properties) {
                var popupContent = "";
                if (feature.properties.NAMOBJ); {
                    popupContent += feature.properties.NAMOBJ;
                }
                layer.bindPopup(popupContent);
            }
        }

        geojson = L.geoJSON(data, {
            pointToLayer: setCircleMarker,
            onEachFeature: getDescription
        }).addTo(map);
</script>