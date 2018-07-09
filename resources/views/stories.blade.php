@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Stories</h1>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                @if (count($resources) > 0)
                <div id="main-table-container">
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
                                    <p><b>{{ $resource->title }}</b></p>
                                </td>
                                <td class="table-text">
                                    <p>{{ $resource->summary }}</p>
                                </td>
                                <td class="table-text">
                                    <p>{{ $resource->bio }}</p>
                                </td>
                                <td>
                                    @if($resource->sound)
                                        <audio controls controlsList="nodownload">
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
                                    <button type="button" class="modal-btn-w3 btn btn-primary update-story" onclick="openUpdateStoryModal({{$resource}})"><i class="fa fa-2x fa-edit"></i></button>
                                </td>
                                @endif
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
<div class="row">
    <div class="col-md-12">
        @if (Auth:: check())
            <div id="customized-modal" class="modal-w3">
                <div class="modal-content-w3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header-w3">
                                <span class="close-w3" onclick="closeModal()">&times;</span>
                                <h3>Update Story</h3>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-w3">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <input class="form-control" id="notes">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <textarea class="form-control" id="bio" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="summary">Summary</label>
                                        <textarea class="form-control" id="summary" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="storyTeller">Story Teller</label>
                                        <input class="form-control" id="storyTeller">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="interviewer">Interviewer</label>
                                        <input class="form-control" id="interviewer">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timeOfStory">Time of Story</label>
                                        <input class="form-control" id="timeOfStory">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="attributes">Attributes</label>
                                        <input class="form-control" id="attributes">
                                    </div>
                                </div>
                            </div>
                            <div id="tags-update-story" class="row">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input class="form-control" id="latitude">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input class="form-control" id="longitude">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer-w3" id="editStoryBtnPanel">
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
