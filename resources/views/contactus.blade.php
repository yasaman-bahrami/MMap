@extends('layouts.app')

@section('content')
    <div id="mainBottom" class="col-md-12">
        <div class="contact">
            <form class="contactus-form" onsubmit="javascript: void(0)">
                <div class="form-group">
                    <label class="white-label" for="inputName">Full name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter your full name...">
                </div>
                <div class="form-group">
                    <label class="white-label" for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email...">
                </div>
                <div class="form-group">
                    <label class="white-label" for="inputStory">Your story</label>
                    <textarea class="form-control" id="inputStory" placeholder="Tell us your story..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
