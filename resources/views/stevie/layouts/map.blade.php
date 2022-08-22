<script>
    var map = L.map('map').setView([-4.792381, 11.881439], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiY2hhbmVsNDIiLCJhIjoiY2s1Y2R4cjNpMGxqYjNsbnF1OWVnZHJsMCJ9.zHJ0G9oNjWIImEKlFXSuTA'
    }).addTo(map);
    var marker = L.marker([-4.792381, 11.881439]).addTo(map);
    var marker1 = L.marker([-4.748090, 11.874931]).addTo(map);
    var marker2 = L.marker([-4.737246, 11.878665]).addTo(map);
    var marker3 = L.marker([-4.740507, 11.862989]).addTo(map);
    var marker4 = L.marker([-4.741314, 11.859803]).addTo(map);
    var marker5 = L.marker([-4.801672, 11.847506]).addTo(map);
    var marker6 = L.marker([-4.804732, 11.869823]).addTo(map);
    var marker7 = L.marker([-4.801373, 11.845862]).addTo(map);
    var marker8 = L.marker([-4.799727, 11.849446]).addTo(map);
    var marker9 = L.marker([-4.795436, 11.856759]).addTo(map);
    var marker10 = L.marker([-4.790924, 11.854603]).addTo(map);
    var marker11 = L.marker([-4.785130, 11.851914]).addTo(map);
    var marker12 = L.marker([-4.790197, 11.855435]).addTo(map);
      marker.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker1.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker2.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker3.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker4.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker5.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker6.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker7.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker8.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker9.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker10.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker11.bindPopup("<b>Restaurant name</b><br>Catégory name.");
      marker12.bindPopup("<b>Restaurant name</b><br>Catégory name.");
</script>
