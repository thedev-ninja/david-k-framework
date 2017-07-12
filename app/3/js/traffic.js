             var shopMarkers = [
  ["YOU ARE HERE","44121 Harry Byrd Highway, Ashburn, VA 20147","39.066728","-77.474776","images/mainpin.png","52"  ]
];





gmarkers = [];

function initialize() {
  var myStyles =[
    {
        featureType: "poi",
        elementType: "labels",
        stylers: [
              { visibility: "off" }
        ]
    }
  ];

  var myLatlng = new google.maps.LatLng(39.066728, -77.474776);
  var mapOptions = {
            zoom: 15,
            center: myLatlng,
            draggable: false,
            streetViewControl: false,
            panControl: false,
            panControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_RIGHT
            },
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_RIGHT
            },
            mapTypeControl: false,
            mapTypeControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_CENTER,
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: myStyles
  }

  var map = new google.maps.Map(document.getElementById('listdata'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  var infowindow = new google.maps.InfoWindow();
  // trafficLayer.setMap(map);
function loadMarkers(category) {
            function createMarker(latlng, html) {
            var image = {
                url: category[i][4], // 'images/pin.png'
                // This marker is 20 pixels wide by 32 pixels tall.
                size: new google.maps.Size(category[i][5], category[i][5]), // new google.maps.Size(32, 32),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0,0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, category[i][5]) //new google.maps.Point(0, 32)
             };

            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                // icon: image
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(html);
                infowindow.open(map, marker);
                map.panTo(marker.getPosition());
            });
            return marker;
        };
        for (var i = 0; i < category.length; i++) {
            //gmarkers[category[i][0]].setMap(null);
            gmarkers[category[i][0]] =
            createMarker(new google.maps.LatLng(category[i][2], category[i][3]), "<p class='amenInfo'>" + category[i][0] + "<br><span class='infoBody'>" + category[i][1] + "</span></p>");
            //gmarkers[category[i][0]].setMap(null);
         };
     }
    loadMarkers(shopMarkers);
}

google.maps.event.addDomListener(window, 'load', initialize);