@extends('layouts.app')

@section('content')
<div id="mainBottom" class="col-md-12">
    @if (Auth:: check())
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button id="addStory" data-toggle="modal" data-target="#addStory" type="button" class="btn btn-default">
                <i class="fa fa-plus"></i> Add Story
            </button>
        </div>
    </div>
    @endif
    @if (count($resources) > 0)
        <table id= "mainTable" class="table fulltable table-striped table-hover table-bordered">
            <thead class="table-secondary">
            <tr>
                <th>Summary</th>
                <th>Bio</th>
                <th>Story Teller</th>
                <th>Interviewer</th>
                <th>Time of Interview</th>
                <th>Location</th>
                <th>Time Of Story</th>
                <th>Tags</th>
                @if (Auth:: check())
                <th>Actions</th>
                @endif
            </tr>
            </thead>
            <tbody id="storyTableBody" class="table-light">
                @foreach ($resources as $resource)
                <tr>
                    <td class="table-text">
                        <div>{{ $resource->summary }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->bio }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->storyteller }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->interviewer }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->time_of_interview }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->location }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $resource->time_of_story }}</div>
                    </td>
                    <td>
                        @if(count($resource->tags) > 0)
                            @foreach($resource->tags as $tag)
                                <button class="btn btn-primary">{{$tag->name }}</button>
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
