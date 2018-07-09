function initMap(markers) {
	var myLatLng = {lat: 47.6096027, lng: -52.6896071};
	map = new google.maps.Map(document.getElementById('map'), {
	  center: myLatLng,
	  zoom: 12
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
            $('#audio-src source').attr('src', '/sounds/'+this.sound);
            $('#audio-src').load();
        });
	});
}

function fuzzySearch(resources, term) {
    if(term === "")
        return resources;
    var options = {
        shouldSort: true,
        location: 0,
        threshold: 0.4,
        distance: 1000,
        maxPatternLength: 32,
        minMatchCharLength: 2,
        keys: ['title','tags.name','summary']
    };
    var fuse = new Fuse(resources, options);
    return fuse.search(term);
}

function hideInfo() {
    $('#info').removeClass('info-open');
}

$("#tag-search-input").keyup(function () {
    var data = this.value.split(",");
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
$('#story-container .story-item h2').click(function(e){
    var resourceId = $(this).attr('id').split('-')[1];
    if($("#tag-search-input").val() !== ''){
        $("#tag-search-input").val('');
        initMap(resources);
    }
    createdMarkers.map(function(marker){
       if (parseInt(marker.id) === parseInt(resourceId)) {
           marker.setIcon('img/pin-hover.png');
           hideInfo();
       } else {
           marker.setIcon('img/pin.png');
       }
    });
});

$( ".tags" ).click(function() {
    var tagInput = $("#tag-search-input");
    if(tagInput.val() === ""){
        tagInput.focus();
        tagInput.val(this.innerText);
    } else {
        tagInput.val($("#tag-search-input").val() +","+ this.innerText+",");
    }
    var tagsList = tagInput.val().split(",");
    getResourceByTagList(tagsList);

});

$("#story-search-input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    var storyHTML = "";
    $.each(fuzzySearch(resources, value), function(key, value){
        storyHTML += '<div class="story-item row">' +
            '<div class="col-md-8 story-content" style="display: inline-block">' +
            '<a href="#"><h2 id ="story-'+value.id+'">'+value.title+'</h2></a>' +
            '<p>'+value.summary+'</p>';
        $.each(value.tags, function (tagKey, tagValue) {
            storyHTML += '<span class="badge badge-pill badge-primary">'+tagValue.name+'</span>';
        });
        storyHTML += '</div>' +
            ' <div class="col-md-3" style="display: inline-block">' ;
        if(value.sound !== "")
           storyHTML += '<div class="audio-div">' +
            '<audio controls>' +
            '<source src="sounds/'+value.sound+'" type="audio/mpeg">' +
            '</audio>' +
            '</div>' ;

        storyHTML+= '</div>' +
            '<hr/>' +
            '</div>';

    });
    $('#story-container').empty();
    $('#story-container').append(storyHTML);
    $(".story-item").slice(0, 4).show();
});

function handleTagInputChange(){
    var tagsValue = $('#tag-search-input').val().trim();
    if (tagsValue !== ''){
        var tagsList = tagsValue.split(",");
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

function openUpdateStoryModal(story) {

    var tagsHtml = "";
    var tagOptions = "";
    $('#title').val(story.title);
    $('#summary').val(story.summary);
    $('#bio').val(story.bio);
    $('#notes').val(story.notes1+", "+story.notes2);
    $('#latitude').val(story.latitude);
    $('#longitude').val(story.longitude);
    $('#storyTeller').val(story.storyteller);
    $('#interviewer').val(story.interviewer);
    $('#timeOfStory').val(story.time_of_story);
    $('#attributes').val(story.attribute1+", "+story.attribute2);
    $('#tags-update-story').empty();
    var addNewTagHtml = '<div class="col-md-6">' +
        ' <div class="input-group add-new-tag">' +
        '<input id="save-tag-input" class="form-control" type="text" placeholder="Enter A New Tag">' +
        '<div class="input-group-append">' +
        '<button id="save-tag" class="btn btn-success input-group-text" style="background: #2A4A6A">' +
        'Save New Tag' +
        '</button>' +
        '</div>' +
        '</div>' +
        '</div>';
    $('#tags-update-story').append(addNewTagHtml);
    var count = 1;
    var oldTags = "";

    $.each(story.tags,function (key,value) {
        oldTags += value.id+"-";
        $.ajax({
            type: "GET",
            url: "/showTags",
            parseJson: true
        }).done(function(response) {
            response = (JSON.parse(response));
            $.each(response.tags, function (tagKey, tagValue) {
                if(tagValue.id === value.id)
                    tagOptions += ("<option selected>"+tagValue.name+"</option>");
                else
                    tagOptions += ("<option>"+tagValue.name+"</option>")
            });

            tagsHtml = '<div class="col-md-2">' +
                '<div class="form-group">' +
                '<label for="tags">Tag'+count+'</label>' +
                '<select class="form-control selectpicker select-tags" id="select-tags-'+count+'" data-live-search="true">' +
                tagOptions +
                '</select>' +
                '</div>' +
                '</div>';

            $('#tags-update-story').append(tagsHtml);
            count++;
        });
    });
    if(story.tags.length !== 9) {
        $.ajax({
            type: "GET",
            url: "/showTags",
            parseJson: true
        }).done(function(response) {
            response = (JSON.parse(response));
            responseTags = response.tags;
            $.each(responseTags, function (tagKey, tagValue) {
                tagOptions += ("<option>"+tagValue.name+"</option>")
            });

            tagsHtml = '<div class="col-md-2">' +
                '<div class="form-group">' +
                '<label for="tags">Tag'+count+'</label>' +
                '<select class="form-control selectpicker select-tags" id="select-tags-9" data-live-search="true">' +
                tagOptions +
                '</select>' +
                '</div>' +
                '</div>';

            $('#tags-update-story').append(tagsHtml);
        });
    }

    var EditBtnPanel = '<button id="update-story-submit" type="button" class="btn btn-primary" onclick=\"updateResource('+story.id+',\''+oldTags+'\')\">Save changes</button>'+
    '<button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>';
    $('#editStoryBtnPanel').empty();
    $('#editStoryBtnPanel').append(EditBtnPanel);
    openModal();
}

function updateResource(storyId, oldTags) {
    oldTags = oldTags.split("-");
    data = {
        id: storyId,
        title: $('#title').val(),
        notes: $('#notes').val(),
        bio: $('#bio').val(),
        summary: $('#summary').val(),
        storyTeller: $('#storyTeller').val(),
        interviewer: $('#interviewer').val(),
        timeOfStory: $('#timeOfStory').val(),
        attributes: $('#attributes').val(),
        latitude: $('#latitude').val(),
        longitude: $('#longitude').val(),
        tags :{
            tag1: $('#select-tags-1').val(),
            tag2: $('#select-tags-2').val(),
            tag3: $('#select-tags-3').val(),
            tag4: $('#select-tags-4').val(),
            tag5: $('#select-tags-5').val(),
            tag6: $('#select-tags-6').val(),
            tag7: $('#select-tags-7').val(),
            tag8: $('#select-tags-8').val(),
            tag9: $('#select-tags-9').val()
        },
        oldTags : oldTags
    };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/updateResource",
        data: data,
        success: function( msg ) {
            console.log( msg );
        }
    });
};

$("#save-tag").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    var name = $("#save-tag-input").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/tag",
        data: {name: name}
    }).done(function(response) {
        console.log(response);
    });
});
function openEmbededPDF(chapter) {
    var pdfDiv = "<object width='700' height='600' data='pdf/"+chapter+".pdf'></object>";
    console.log(pdfDiv);
    $('#pdfDiv').append(pdfDiv);
}
