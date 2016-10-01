

<!-- GET THE CONTENT FOR THE DATATABLE -->

$(document).ready(function() {

    $('#myTable').DataTable({
        "ajax": "/quote",
        "columns": [

          // {
          //       "className":      'details-control',
          //       "orderable":      false,
          //       "data":           null
            
          //   },
        
			{ "data": "id" },
			{ "data": "pick_city" },
            { "data": "pick_state"},
            { "data": "delivery_city" },
            { "data": "delivery_state"},
            { "data": "created_at" },
            { "data": "updated_at"}
         
            
        ],
        "order": [[1,'desc']], 

          "columnDefs": [
      { "width": "50px", "targets": 0 }, 
      { "width": "50px", "targets": 1 },
      { "width": "50px", "targets": 2 }, 
      { "width": "50px", "targets": 3 },
      { "width": "50px", "targets": 4 },
      { "width": "50px", "targets": 5 }, 
      { "width": "50px", "targets": 6 }
     
     
    ]


    });

// $('#example tbody').on( 'click', 'button', function () {

//     var data_new = table.row( $(this).parents('tr') ).data();
    
//     $('#pro_number').val(data_new.id);

    

});











/*


$('.datepicker').datepicker()

<!-- TAKES THE PICK ZIP AND FINDS THE COORESPONDING CITY, STATE AND PUTS THEM IN THE INPUT FIELDS -->

$(document).ready(function(){
	$('#pick_zip').keyup(function() {
		var zipCode = $(this).val();
			if(zipCode.length === 5 && $.isNumeric(zipCode)) {


		 $.ajax({
      type: "GET",
      beforeSend: function(request) {
        request.setRequestHeader("x-key", "7fdf923c5fb9dccddad8bdd98b828933e801fd73");
      },
      url: "https://zip.getziptastic.com/v3/US/"+zipCode,
      success: function(data) {
        //console.log(data[0].city);
		$("#pick_city").val(data[0].city);
		$('#pick_state').val(data[0].state_short);
      }
    });

	}

 });
  });

<!-- END -->

<!-- TAKES THE DELIVERY ZIP AND FINDS THE COORESPONDING CITY, STATE AND PUTS THEM IN THE INPUT FIELDS, PULLS UP GOOGLE MAP ROUTE, PUTS MILEAGE IN THE INPUT FIELD -->

$(document).ready(function(){
	$('#delivery_zip').keyup(function() {
		var zipCode = $(this).val();
			if(zipCode.length === 5 && $.isNumeric(zipCode)) {


		 $.ajax({
      type: "GET",
      beforeSend: function(request) {
        request.setRequestHeader("x-key", "7fdf923c5fb9dccddad8bdd98b828933e801fd73");
      },
      url: "https://zip.getziptastic.com/v3/US/"+zipCode,
      success: function(data) {
        //console.log(data[0].city);
		$("#delivery_city").val(data[0].city);
		$('#delivery_state').val(data[0].state_short);


		var pick_city = $("#pick_city").val();
		var pick_state = $("#pick_state").val();
		var delivery_city = $("#delivery_city").val();
		var delivery_state = $("#delivery_state").val();

		$('#quote_map_display').html("<iframe class='center-block' width='1050' height='400' frameborder='5' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr="+pick_city+","+pick_state+"&amp;daddr="+delivery_city+","+delivery_state+"&amp;hl=en&amp;geocode=FWICfwIdGuDG-inty_TQPCwOiDEAwMAJrabgrw%3BFbpmTQIdlKqf-in5ju36qbTYhzFb4Lsiyuo5vg&amp;aq=&amp;sll=40.00132,-82.909012&amp;sspn=0.397649,0.98053&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=40.25279,-88.91443&amp;spn=3.250649,2.569472&amp;output=embed'></iframe>");


		//code block

		var location1;
	var location2;
	var address1 = pick_city + "," + pick_state;
	var address2 = delivery_city + "," + delivery_state;
	var geocoder;
	//var map;
	var distance;



		geocoder = new google.maps.Geocoder(); //  creating a new geocode object




		// finding out the coordinates
		if (geocoder)
		{
			geocoder.geocode( { 'address': address1}, function(results, status)
			{
				if (status == google.maps.GeocoderStatus.OK)
				{
					location1 = results[0].geometry.location;
				}
			});
			geocoder.geocode( { 'address': address2}, function(results, status)
			{
				if (status == google.maps.GeocoderStatus.OK)
				{
					location2 = results[0].geometry.location;
					//both locations look good so we kick off the map
					showMap();
				}
			});
		}
	//}


	function showMap()
	{



		// show route between the points
		directionsService = new google.maps.DirectionsService();
		directionsDisplay = new google.maps.DirectionsRenderer();

		var request = {
			origin:location1,
			destination:location2,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		directionsService.route(request, function(response, status)
		{
			if (status == google.maps.DirectionsStatus.OK)
			{
				directionsDisplay.setDirections(response);
				distance = response.routes[0].legs[0].distance.text;
				myString = distance.replace(/\D/g,'');
				myNewMiles = Math.ceil(myString);

				$('#miles').val(myNewMiles);
			}
		});


		}

//});

		//code block end

      }
    });

	}

 });
  });

<!-- END - TAKES THE DELIVERY ZIP AND FINDS THE COORESPONDING CITY, STATE AND PUTS THEM IN THE INPUT FIELDS, PULLS UP GOOGLE MAP ROUTE, PUTS MILEAGE IN THE INPUT FIELD -->
*/

