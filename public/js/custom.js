function initMap(markers) {
	var myLatLng = {lat: 47.5700861, lng: -52.7382426};
	map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 14
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
                title: theMarker.title,
                summary: theMarker.summary,
                url: theMarker.sound,
                icon: 'img/pin.png',
                latitude: theMarker.latitude,
                longitude: theMarker.longitude,
                sound: theMarker.sound
            });
            createdMarkers.push(marker);
		}

	});
	createdMarkers.map(function (marker) {
        marker.addListener('click', function() {
            $('#info-title').html(this.title);
            $('#info-body').html(this.summary);
            $('#info').addClass('info-open');
            $('#audio-src').attr('src', '/sounds/'+this.sound);
        });
	});


}

function hideInfo() {
    $('#info').removeClass('info-open');
}

$("#tag-search-input").keyup(function () {
    var data = this.value.split(" ");
    var rows = $("#tag-table-body").find("tr");
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

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

// clicking on table rows in main page
$('.resource-row').click(function(e){
    var resourceId = $(this).attr('id');
    if($("#tag-search-input").val() !== ''){
        $("#tag-search-input").val('');
        initMap(resources);
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
    if($("#tag-search-input").val() === ""){
        $("#tag-search-input").focus();
        $("#tag-search-input").val(this.innerText);
    } else {
        $("#tag-search-input").val($("#tag-search-input").val() +" "+ this.innerText);
    }
    var tagsList = $("#tag-search-input").val().split(" ");
    getResourceByTagList(tagsList);

});

$("#story-search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#story-content p").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

function handleTagInputChange(){
    var tagsValue = $('#tag-search-input').val().trim();
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

$("#update-story-submit").on("keyup", function(event){
    $.ajax({
        type: "PUT",
        url: "/resource",
        data: { name:name, message:message, post_id:postid },
        success: function( msg ) {
            alert( msg );
        }
    });
});
$("#select-tags").on("click", function (event) {
    $.ajax({
        type: "GET",
        url: "/showTags",
        parseJson: true
    }).done(function(response) {
        response = (JSON.parse(response));
        var options = "";
        $.each(response.tags, function (key, value) {
            options += ("<option>"+value.name+"</option>")
        });
        $("#select-tags").html(options);
    });
});
$("#save-tag").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    var name = $("#save-tag-input").val();
    console.log(name);
    $.ajax({
        type: "POST",
        url: "/tag",
        data: {name: name, _token: "{{ csrf_token() }}"}
    }).done(function(response) {

    });
});
$("#aboutus-menu").on("click", function (event) {
    $("#aboutus-open-menu").show();
    /*if($("#aboutus-open-menu").css('display') == 'block')
        $("#aboutus-open-menu").hide();*/

});