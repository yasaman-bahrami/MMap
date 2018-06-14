@extends('layouts.app')

@section('content')
<div id="main-top" class="row">
    <div class="col-md-10">
        <div id="map" class="jumbotron"></div>
        <div id="info" class="info">
            <button type="button" class="close" data-dismiss="info" onclick="hideInfo();">&times;</button>
            <div id="info-title"></div>
            <p id="info-body"></p>
            <audio style="width: 100%" controls>
                <source id="audio-src" type="audio/mp3" src=""/>
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
                            id="tag-search-input"
                            type="text"
                            class="form-control"
                            placeholder="Search Tags"
                            onChange="handleTagInputChange()"
                        >
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
                                <td class="btn btn-primary tags">
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
            @foreach ($resources as $resource)
                <div class="story-item row">
                    <div id="story-content" class="col-md-8" style="display: inline-block">
                        <h2>{{ $resource->title }}</h2>
                        <p>{{ $resource->summary }}</p>
                        @if(count($resource->tags) > 0)
                            @foreach($resource->tags as $tag)
                                <span class="badge badge-pill badge-primary">{{$tag->name }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-3" style="display: inline-block">
                        @if($resource->sound)
                            <audio controls>
                                <source src="sounds/{{ $resource->sound }}" type="audio/mpeg">
                            </audio>
                        @endif
                    </div>
                    <hr/>
                </div>
            @endforeach
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
<div id="customized-modal" class="modal-w3">
    <div class="modal-content-w3">
        <div class="row">
            <div class="col-md-12">
                <div class="modal-header-w3">
                    <span class="close-w3" onclick="closeModal()">&times;</span>
                    <p>Update Story</p>
                </div>
            </div>
        </div>
        <div class="modal-body-w3">
            <p>dfdfd</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6omCnwmT7ov_f6jtY63FCteo7o_c-tg"></script>
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
        var isshow = localStorage.getItem('isshow');
        if (isshow== null) {
            localStorage.setItem('isshow', 1);
            openModal();
        }
    });
</script>
@endsection

