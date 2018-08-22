@extends('layouts.app')

@section('content')
<div id="main-top" class="row">
    <div class="col-md-10">
        <div id="map" class="jumbotron"></div>
        <div id="info" class="info">
            <button type="button" class="close" data-dismiss="info" onclick="hideInfo();">&times;</button>
            <div id="info-title"></div>
            <p id="info-body"></p>
            <audio id="audio-src" style="width: 100%" controls controlsList="nodownload">
                <source type="audio/mp3" src=""/>
            </audio>
        </div>
    </div>
    <div class="col-md-2">
        <div id="search" class="row">
            <div class="col-md-12">
                @if (count($tags) > 0)
                <div class="form-group">
                    <div class="input-group mb-3">
                        <p style="font-size: 10px; text-align: justify;">
                            Please use commas to separate tags to search through the stories.
                        </p>
                        <input id="tag-search-input" type="text" class="form-control" placeholder="Search Tags" onChange="handleTagInputChange()">
                        <div class="input-group-append">
                            <button class=" btn input-group-text">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="tags-table">
                    <table id="filter-table" class="col-md-12">
                        <tbody id="tag-table-body">
                        @foreach ($tags as $tag)
                            <tr>
                                <!-- Tag Name -->
                                <td class="badge badge-pill badge-primary tags" onclick="showResourcesOnTheMap(this);">
                                    {{ $tag->name }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@if (count($resources) > 0)
<div id="main-bottom" class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input id="story-search-input" class="form-control col-md-6" type="text" placeholder="Search">
                        <div class="input-group-append">
                            <button class=" btn input-group-text">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="story-container">
            @foreach ($resources as $resource)
            <div class="story-item row">
                <div class="col-md-8 story-content" style="display: inline-block">
                    <a href="#"><h2 id ="story-{{$resource->id}}">{{ $resource->title }}</h2></a>
                    <p>{{ $resource->summary }}</p>
                    @if(count($resource->tags) > 0)
                        @foreach($resource->tags as $tag)
                            <span class="badge badge-pill badge-primary">{{$tag->name }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-3" style="display: inline-block">
                    @if($resource->sound)
                    <div class="audio-div">
                        <audio controls controlsList="nodownload">
                            <source src="sounds/{{ $resource->sound }}" type="audio/mpeg">
                        </audio>
                    </div>
                    @endif
                </div>
                <hr/>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div style="margin: 10px 40%">
                <button id="load-more" type="button" class="btn btn-outline-primary">Load More...</button>
            </div>
            <p class="to-top">
                <a href="#top">Back to top</a>
            </p>
        </div>
    </div>

</div>
@endif


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6omCnwmT7ov_f6jtY63FCteo7o_c-tg"></script>
<script src="{{ asset('js/fuse.min.js') }}"></script>
<script type="text/javascript">
    const resources = {!! $resources !!};
    var markers = [];
    resources.map(function(resource){
    markers.push([resource.bio, parseFloat(resource.latitude), parseFloat(resource.longitude), resource.url]);
    });

    initMap(resources);
    $( document ).ready(function() {
        $(".story-item").slice(0, 4).show();
        $("#load-more").on('click', function (e) {
            e.preventDefault();
            $(".story-item:hidden").slice(0, 4).slideDown();
            if ($(".story-item:hidden").length == 0) {
                $("#load-more").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
        $('a[href=#top]').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.to-top a').fadeIn();
            } else {
                $('.to-top a').fadeOut();
            }
        });

    });
</script>
@endsection

