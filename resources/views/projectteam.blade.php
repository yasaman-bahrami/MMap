@extends('layouts.app')

@section('content')
<div class="row">
    <div id="main-bottom" class="col-md-12">
        <h1>Project Team</h1>
        <hr/>
        <div class="row">
            <div class="col-md-8 aboutus-text">
                <ul>
                    <li><i>Producers:</i> Dr. Meghan Forsyth and Dr. Beverley Diamond</li>
                    <li><i>Back on Track Series Producer:</i> Dr. Harris M. Berger</li>
                    <li><i>Research Assistants:</i> Carolyn Chong, Hadi Milanloo, and Jordan Zalis</li>
                    <li><i>Website developer:</i> Yasaman Bahrami Samani</li>
                    <li><i>St. John’s Many Voices researchers:</i> Annie McEwan, Dr. Mark Finch, Dr. Leila Qashu,
                        Dr. Mu Li, Cristina Pietropaolo, Tiffany Pollock. Michelle Porter,
                        Contessa Small, Emily Urquhart, and Janna Whalen
                    </li>
                    <li><i>Editors:</i> Jane Dennison, Dr. Kristin Harris Walsh, and Dr. Barbara Rieti</li>
                    <p>
                        Some of the materials in this archive were originally developed for the Neighbours: St. John’s
                        phone app. We express our appreciation to Chris Brookes, who edited audio stories for that
                        project.
                    </p>
                    <p>
                        We are grateful for the support of Dr. C. Kati Szego (School of Music), Dr. Yuanzhu Chen,
                        (Department of Computer Science), and David Cantwell and the ITS department at Memorial
                        University of Newfoundland.
                    </p>
                    <p>
                        We gratefully acknowledge the support of the Canada Research Chairs Program, the Office of
                        Public Engagement, and Memorial University of Newfoundland.
                    </p>
                </ul>


            </div>
            <div class="col-md-4">
                <div class="image-frame">
                    <img class="image-size" src="/img/Portuguese-White-Fleet.JPG" >
                </div>
                <p style="font-size: 11px;">The Portuguese “White Fleet” in the St. John’s Harbour, early 1900s. (The Rooms Provincial Archive, A 34-28)</p>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col-md-4">
                <div class="image-frame">
                    <a href="https://www.mun.ca/mmap/"><img class="image-size" src="/img/MMaP-crop.jpg" ></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-frame">
                    <a href="https://www.mun.ca"><img class="image-size" src="/img/Mun-Logo.jpg" ></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-frame">
                    <a href="https://www.mun.ca/mmap/research_pub/back_on_track/"><img class="image-size" src="/img/BackonTrack-logo.jpg" ></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
