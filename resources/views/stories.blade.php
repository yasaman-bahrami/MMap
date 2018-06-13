@extends('layouts.app')

@section('content')
<div class="row">
    <div id="main-bottom" class="col-md-12">
        <h1>Stories</h1>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <a id="download-pdf" href="/resources/NeighboursTS-MF-7May2018.pdf" target="_blank" class="btn btn-primary" download>
                    <i class="fa fa-2x fa-download"></i> Download Stories
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (count($resources) > 0)
                    <table id= "main-table" class="table fulltable table-striped table-hover table-bordered">
                        <thead class="table-secondary">
                        <tr>
                            <th>Title</th>
                            <th>Summary</th>
                            <th>Bio</th>
                            <th>Sound</th>
                            <th>Tags</th>
                            @if (Auth:: check())
                                <th>Actions</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody id="story-table-body" class="table-light">
                        @foreach ($resources as $resource)
                            <tr>
                                <td class="table-text">
                                    <div><b>{{ $resource->title }}</b></div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $resource->summary }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $resource->bio }}</div>
                                </td>
                                <td>
                                    @if($resource->sound)
                                        <audio style="width: 100%" controls>
                                            <source id="audio-src" type="audio/mp3" src="/sounds/{{$resource->sound}}"/>
                                        </audio>
                                    @endif
                                </td>
                                <td>
                                    @if(count($resource->tags) > 0)
                                        @foreach($resource->tags as $tag)
                                            <span class="badge badge-pill badge-primary">{{$tag->name }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                @if (Auth:: check())
                                    <td>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-2x fa-trash"></i></button>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-2x fa-edit"></i></button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

    </div>
</div>
@if (Auth:: check())
<div class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea class="form-control" id="summary" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="storyTeller">Story Teller</label>
                        <input class="form-control" id="storyTeller">
                    </div>
                    <div class="form-group">
                        <label for="interviewer">Interviewer</label>
                        <input class="form-control" id="interviewer">
                    </div>
                    <div class="form-group">
                        <label for="yearOfStory">Year of Story</label>
                        <input class="form-control" id="yearOfStory">
                    </div>
                    <div class="form-group">
                        <label for="yearOfInterview">Year of Interview</label>
                        <input class="form-control" id="yearOfInterview">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input class="form-control" id="location">
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <input class="form-control" id="notes">
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input class="form-control" id="latitude">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input class="form-control" id="longitude">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endif
@endsection
