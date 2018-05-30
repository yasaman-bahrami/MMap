@extends('layouts.app')

@section('content')
<div id="mainTop" class="row">
    <div class="col-md-10">
        <div id="map" class="jumbotron"></div>
        <div id="info" class="info">
            <button type="button" class="close" data-dismiss="info" onclick="hideInfo();">&times;</button>
            <div id="infoBody"></div>
            <audio style="width: 100%">
                <source type="audio/mp3" src="musics/2-Walter Burry-caplin.mp3" />
            </audio>
        </div>
    </div>
    <div class="col-md-2">
        <div id="search" class="row">
            <div class="col-md-12">
                @if (count($tags) > 0)
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input
                                id="tagSearchInput"
                                type="text"
                                class="form-control"
                                placeholder="Search Tags"
                                onChange="handleTagInputChange()"
                            >
                            <div class="input-group-append">
                                <button class=" btn input-group-text searchStoryByTags">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <br/>
                <table id="filterTable" class="col-md-12">
                    <tbody id="tagTableBody">
                    @foreach ($tags as $tag)
                        <tr>
                            <!-- Tag Name -->
                            <td class="btn btn-primary tags">
                                {{ $tag->name }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
<div id="mainBottom" class="col-md-12">
    @if (count($resources) > 0)
        <input id="storySearchInput" class="form-control col-md-4" type="text" placeholder="Type To Filter">
            <br/>
        <table id= "mainTable" class="table table-striped table-hover table-bordered">
            <thead class="table-secondary">
            <tr>
                <th>Summary</th>
                <th>Tags</th>
            </tr>
            </thead>
            <tbody id="storyTableBody" class="table-light">
            @foreach ($resources as $resource)
                <tr class="resource-row" id={{$resource->id}}>
                    <td class="table-text">
                        <div>{{ $resource->summary }}</div>
                    </td>
                    <td>
                        @if(count($resource->tags) > 0)
                            @foreach($resource->tags as $tag)
                                <button class="btn btn-primary">{{$tag->name }}</button>
                            @endforeach
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6omCnwmT7ov_f6jtY63FCteo7o_c-tg"></script>
<script src="{{ asset('js/custom.js') }}"></script>


<script type="text/javascript">
    const resources = {!! $resources !!}
    var markers = [];
    resources.map(function(resource){
    markers.push([resource.bio, parseFloat(resource.latitude), parseFloat(resource.longitude), resource.url]);
    });
    initMap(resources);
    $( document ).ready(function() {
        var map;
        var x = document.getElementById('errorBox');
        filterSearch('tagSearchInput', 'tagTableBody');
        filterSearch('storySearchInput', 'storyTableBody');
        $('video, audio').mediaelementplayer({
            pluginPath: 'https://cdnjs.com/libraries/mediaelement/',
            shimScriptAccess: 'always'
        });

    });
</script>
@endsection

