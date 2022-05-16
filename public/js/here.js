if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(position => {
        localCoord = position.coords;
        objLocalCoord = {
            lat: localStorage.latitude,
            lng: localStorage.longitude
        }

        
      // Initialize the platform object
      var platform = new H.service.Platform({
        'apikey': window.hereApiKey
      });

      // Obtain the default map types from the platform object
      let defaultLayers = platform.createDefaultLayers();

      // Instantiate (and display) the map
      var map = new H.Map(
        document.getElementById('mapContainer'),
        defaultLayers.vector.normal.map,
        {
          zoom: 13,
          center: objLocalCoord,
          pixelRatio: window.devicePixelRatio || 1
        });
        window.addEventListener('resize', () => map.getViewPort().resize());

        let ui = H.ui.UI.createDefaultLayers(map, defaultLayers);
        let mapEvents = new H.mapevents.MapEvents(map);
        let behavior = new H.mapevents.Behavior(mapEvents);

    })
} else {
    console.log('Geolocation is not supported by this browser.');
}