@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Portfolio</h1>
        <hr/>
        <div class="row">
            <div class="col-md-2">
                <div id="main-table-container">
                    <table id= "main-table" class="table fulltable table-striped table-hover table-bordered">
                        <thead class="table-secondary">
                        <tr>
                            <th>Title</th>
                        </tr>
                        </thead>
                        <tbody id="story-table-body" class="table-light">
                        @for($count = 1 ; $count <= 7; $count++)
                            <tr>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF({{$count}})"><b>Chapter {{$count}}</b></a>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-10">
                <div id="pdfDiv"></div>
            </div>
        </div>
    </div>
</div>
@endsection
