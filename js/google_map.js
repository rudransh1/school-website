function initMap() { 
  var test= {lat: 25.430568, lng: 81.770961}; 
  var map = new google.maps.Map(document.getElementById('map'), { 
    zoom: 15, 
    center: test 
  }); 
  var marker = new google.maps.Marker({ 
    position: test, 
    map: map 
  }); 
} 