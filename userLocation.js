
// Google Geocoding API key : AIzaSyC4cnlyhnEYTluJRP8QKwVXbinzL6-qkFk


//to get longitude & latidude
document.getElementById('sub-btn').addEventListener('click', function(){	
	if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
        	latitude = position.coords.latitude ;
        	longitude = position.coords.longitude ;
        	console.log(latitude, longitude) ;


        	// to get exact address using the coordinates
        	// var reqAdd = new XMLHttpRequest();
        	// reqAdd.open('GET', "https://maps.googleapis.com/maps/api/geocode/json?latlng"+latitude+","+longitude+"&key=AIzaSyB2xmivRtuIxhWD1O7IMV8UoIFPg03XbfQ", true)
        	// if(request.readyState == 4 && request.status == 200){
            //    	var data = JSON.parse(request.responseText);
            //    	var address = data.results[0];
            //    	console.log(address.formatted_address);
            //  	}


            //this type of json object is returned fro google geocode
        	var reqAdd ={
        		"results" : [
     			 {
        			 "address_components" : [
		            {
		               "long_name" : "277",
		               "short_name" : "277",
		               "types" : [ "street_number" ]
		            },
		            {
		               "long_name" : "Bedford Avenue",
		               "short_name" : "Bedford Ave",
		               "types" : [ "route" ]
		            },
		            {
		               "long_name" : "Williamsburg",
		               "short_name" : "Williamsburg",
		               "types" : [ "neighborhood", "political" ]
		            },
		            {
		               "long_name" : "Brooklyn",
		               "short_name" : "Brooklyn",
		               "types" : [ "sublocality", "political" ]
		            },
		            {
		               "long_name" : "Kings",
		               "short_name" : "Kings",
		               "types" : [ "administrative_area_level_2", "political" ]
		            },
		            {
		               "long_name" : "New York",
		               "short_name" : "NY",
		               "types" : [ "administrative_area_level_1", "political" ]
		            },
		            {
		               "long_name" : "United States",
		               "short_name" : "US",
		               "types" : [ "country", "political" ]
		            },
		            {
		               "long_name" : "11211",
		               "short_name" : "11211",
		               "types" : [ "postal_code" ]
		            }
         		],
		         "formatted_address" : "277 Bedford Avenue, Brooklyn, NY 11211, USA",
		         "geometry" : {
		            "location" : {
		               "lat" : 40.714232,
		               "lng" : -73.9612889
		            },
		            "location_type" : "ROOFTOP",
		            "viewport" : {
		               "northeast" : {
		                  "lat" : 40.7155809802915,
		                  "lng" : -73.9599399197085
		               },
		               "southwest" : {
		                  "lat" : 40.7128830197085,
		                  "lng" : -73.96263788029151
		               }
            }
         },
         "place_id" : "ChIJd8BlQ2BZwokRAFUEcm_qrcA",
         "types" : [ "street_address" ]
        }

    ]}


    // to get the formatted address from json
	console.log(reqAdd.results[0].formatted_address)      	

        });
    } else {
        console.error("Geolocation is not supported by this browser!");
    }

 //   https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key="AIzaSyC4cnlyhnEYTluJRP8QKwVXbinzL6-qkFk"
 //   navigator.geolocation.getCurrentPosition(function(position) {
 //  		lat = position.coords.latitude ;
 //  		long = position.coords.longitude;
 //  		console.log(lat) ;
 //  		console.log(long) ;
	// });
});