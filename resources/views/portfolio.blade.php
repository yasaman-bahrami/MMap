@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Neighbours Project eBook</h1>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <div id="main-table-container">
                    <a class="btn btn-primary" href="/pdf/00.pdf" download style="border-radius: 4px 4px 0px 0px">Download the eBook as a PDF</a>
                    <table id= "main-table" class="table fulltable table-striped table-hover table-bordered">
                        <thead class="table-secondary">
                        <tr>
                            <th>Author</th>
                            <th>Chapter Title</th>
                        </tr>
                        </thead>
                        <tbody id="story-table-body" class="table-light">
                            <tr>
                                <td class="table-text">
                                    <b>Forsyth</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(0)"><b>Front Matter</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Diamond</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(1)"><b>Introduction</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Qashu</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(2)"><b>African</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Li</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(3)"><b>East Asian</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Swab</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(4)"><b>South Asian</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Whelan</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(5)"><b>Southeast Asian</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Porter</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(6)"><b>East European</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>McEwen</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(7)"><b>Jewish</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Small</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(8)"><b>Middle Eastern</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Pietropaolo</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(9)"><b>Mediterranean</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Finch</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(10)"><b>Scandinavian/Northern European</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Pollock</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(11)"><b>Latin American</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Tremblay</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(12)"><b>Immigration</b></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-text">
                                    <b>Forsyth</b>
                                </td>
                                <td class="table-text">
                                    <a class="portfolio-a" onclick="openEmbededPDF(13)"><b>Back Matter</b></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8">
                <div id="pdfDiv"></div>
            </div>
        </div>
    </div>
</div>
@endsection
