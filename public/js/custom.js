

function initMap(markers) {
	var myLatLng = {lat: 47.5682313, lng: -52.7609158};
	map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 10
	});

	createdMarkers = [];
	markers.map(function (theMarker) {
		var alreadyExistingMarker = createdMarkers.find(function (marker) {
			return marker.latitude === theMarker.latitude && marker.longitude === theMarker.longitude;
		});
		if (alreadyExistingMarker) {
			alreadyExistingMarker.title = alreadyExistingMarker.title + '<br/>' + theMarker.summary;
			createdMarkers.push(alreadyExistingMarker)
		} else {
            var position = new google.maps.LatLng(theMarker.latitude, theMarker.longitude);
            var marker = new google.maps.Marker({
                id: theMarker.id,
                position: position,
                map: map,
                title: theMarker.summary,
                url: theMarker.sound,
                icon: 'img/pin.png',
                latitude: theMarker.latitude,
                longitude: theMarker.longitude
            });
            createdMarkers.push(marker);
		}

	});
	createdMarkers.map(function (marker) {
        marker.addListener('click', function() {
            $('#infoBody').html(this.title);
            $('#info').addClass('infoOpen');
        });
	});


}

function hideInfo() {
    $('#info').removeClass('infoOpen');
}

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	initMap(position.coords.latitude, position.coords.longitude);
}

function showError(error) {
	switch(error.code) {
		case error.PERMISSION_DENIED:
			x.innerHTML = "User denied the request for Geolocation."
			break;
		case error.POSITION_UNAVAILABLE:
			x.innerHTML = "Location information is unavailable."
			break;
		case error.TIMEOUT:
			x.innerHTML = "The request to get user location timed out."
			break;
		case error.UNKNOWN_ERROR:
			x.innerHTML = "An unknown error occurred."
			break;
	}
}

function filterSearch(searchInputId, tableBodyId) {
    $("#"+searchInputId).keyup(function () {
        var data = this.value.split(" ");
        var rows = $("#"+tableBodyId).find("tr");
        if (this.value == "") {
            rows.show();
            return;
        }
        rows.hide();

        rows.filter(function (i, v) {
            for (var d = 0; d < data.length; ++d) {
                if ($(this).is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
            .show();
    }).focus(function () {
        this.value = "";
        $(this).css({
            "color": "black"
        });
        $(this).unbind('focus');
    }).css({
        "color": "#C0C0C0"
    });
}

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

// clicking on table rows in main page
$('.resource-row').click(function(e){
    var resourceId = $(this).attr('id');
    if($("#tagSearchInput").val() !== ''){
        $("#tagSearchInput").val('');
        initMap(resources)
    }
    createdMarkers.map(function(marker){
       if (parseInt(marker.id) === parseInt(resourceId)) {
           marker.setIcon('img/pin-hover.png');
       } else {
           marker.setIcon('img/pin.png');
       }
    });
});

$( ".tags" ).click(function() {
    if($("#tagSearchInput").val() === ""){
        $("#tagSearchInput").focus();
        $("#tagSearchInput").val(this.innerText);
    } else {
        $("#tagSearchInput").val($("#tagSearchInput").val() +" "+ this.innerText);
    }
    var tagsList = $("#tagSearchInput").val().split(" ");
    getResourceByTagList(tagsList);

});

function handleTagInputChange(){
    var tagsValue = $('#tagSearchInput').val().trim();
    if (tagsValue !== ''){
        var tagsList = tagsValue.split(" ");
        getResourceByTagList(tagsList);
    } else {
        initMap(resources);
    }
}

function getResourceByTagList(tagsList) {
    $.ajax({
        data: {
            tagList: tagsList
        },
        url: "/resourcesByTags",
        type: "GET",
        parseJson: true
    }).done(function(response) {
        var parsedResponse = JSON.parse(response);
        if (parsedResponse.status === 'success'){
            initMap(parsedResponse.data)
        } else {
            console.log(parsedResponse);
        }
    });
}

$("#addStory").click(function () {

});

function saveResource() {
    $.ajax({
        type: "POST",
        url: host+'/comment/add',
        data: { name:name, message:message, post_id:postid },
        success: function( msg ) {
            alert( msg );
        }
    });
}