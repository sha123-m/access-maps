var map;
var geocoder;
function initMap() {
  
    var meru= {lat:  0.3557, lng:37.8088 };
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: meru
      });
  
      var marker = new google.maps.Marker({
        position: meru,
        map: map
      });
     
       var cdata = JSON.parse(document.getElementById('data').innerHTML);
       geocoder = new google.maps.Geocoder();
       codeAddress(cdata);
  
}
function codeAddress(cdata) {
  Array.prototype.forEach.call(cdata,function(data){
    var address = data .name + ' ' + data.address;
  

  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      console.log(results[0].geometry.location)
     
     
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
});
}