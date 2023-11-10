@extends('layouts.main')
@section('content')
@section('dashboard', 'active')

<div class="row">
    <div class="col-lg-8 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }}! 🎉</h5>
                        <p class="mb-4">
                            You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in
                            your profile.
                        </p>

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                    class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                    class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Sales</span>
                        <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Revenue -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-8">
                    <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                    <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                        <div id="apexchartsa3963r2d" class="apexcharts-canvas apexchartsa3963r2d apexcharts-theme-light"
                            style="width: 420px; height: 300px;"><svg id="SvgjsSvg1901" width="420" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="420" height="300">
                                    <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                        <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                            data:collapsed="false" style="margin: 2px 10px;"><span
                                                class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021"
                                                data:collapsed="false"
                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                        </div>
                                        <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                            data:collapsed="false" style="margin: 2px 10px;"><span
                                                class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020"
                                                data:collapsed="false"
                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom,
                                        .apexcharts-legend.apx-legend-position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1903" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(53.796875, 51)">
                                    <defs id="SvgjsDefs1902">
                                        <linearGradient id="SvgjsLinearGradient1907" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1908" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1909" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1910" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaska3963r2d">
                                            <rect id="SvgjsRect1912" width="356.203125" height="223.73" x="-5" y="-3"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaska3963r2d"></clipPath>
                                        <clipPath id="nonForecastMaska3963r2d"></clipPath>
                                        <clipPath id="gridRectMarkerMaska3963r2d">
                                            <rect id="SvgjsRect1913" width="350.203125" height="221.73" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1911" width="19.783035714285713" height="217.73" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1907)" class="apexcharts-xcrosshairs" y2="217.73"
                                        filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1933" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1934" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1936"
                                                font-family="Helvetica, Arial, sans-serif" x="24.728794642857142"
                                                y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1937">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1939" font-family="Helvetica, Arial, sans-serif"
                                                x="74.18638392857143" y="246.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1940">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1942" font-family="Helvetica, Arial, sans-serif"
                                                x="123.64397321428572" y="246.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1943">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1945" font-family="Helvetica, Arial, sans-serif"
                                                x="173.1015625" y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1946">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1948" font-family="Helvetica, Arial, sans-serif"
                                                x="222.55915178571428" y="246.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1949">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1951" font-family="Helvetica, Arial, sans-serif"
                                                x="272.01674107142856" y="246.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1952">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1954" font-family="Helvetica, Arial, sans-serif"
                                                x="321.47433035714283" y="246.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1955">Jul</tspan>
                                                <title>Jul</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1970" class="apexcharts-grid">
                                        <g id="SvgjsG1971" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1973" x1="0" y1="0" x2="346.203125" y2="0"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1974" x1="0" y1="43.546" x2="346.203125" y2="43.546"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1975" x1="0" y1="87.092" x2="346.203125" y2="87.092"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1976" x1="0" y1="130.638" x2="346.203125" y2="130.638"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1977" x1="0" y1="174.184" x2="346.203125" y2="174.184"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1978" x1="0" y1="217.73" x2="346.203125" y2="217.73"
                                                stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1972" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1980" x1="0" y1="217.73" x2="346.203125" y2="217.73"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1979" x1="0" y1="1" x2="0" y2="217.73" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1914" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1915" class="apexcharts-series" seriesName="2021" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1917"
                                                d="M 14.837276785714286 120.638L 14.837276785714286 62.255200000000016Q 14.837276785714286 52.255200000000016 24.837276785714288 52.255200000000016L 18.620312499999997 52.255200000000016Q 28.620312499999997 52.255200000000016 28.620312499999997 62.255200000000016L 28.620312499999997 62.255200000000016L 28.620312499999997 120.638Q 28.620312499999997 130.638 18.620312499999997 130.638L 24.837276785714288 130.638Q 14.837276785714286 130.638 14.837276785714286 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 14.837276785714286 120.638L 14.837276785714286 62.255200000000016Q 14.837276785714286 52.255200000000016 24.837276785714288 52.255200000000016L 18.620312499999997 52.255200000000016Q 28.620312499999997 52.255200000000016 28.620312499999997 62.255200000000016L 28.620312499999997 62.255200000000016L 28.620312499999997 120.638Q 28.620312499999997 130.638 18.620312499999997 130.638L 24.837276785714288 130.638Q 14.837276785714286 130.638 14.837276785714286 120.638z"
                                                pathFrom="M 14.837276785714286 120.638L 14.837276785714286 120.638L 28.620312499999997 120.638L 28.620312499999997 120.638L 28.620312499999997 120.638L 28.620312499999997 120.638L 28.620312499999997 120.638L 14.837276785714286 120.638"
                                                cy="52.255200000000016" cx="61.29486607142857" j="0" val="18"
                                                barHeight="78.38279999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1918"
                                                d="M 64.29486607142857 120.638L 64.29486607142857 110.15580000000001Q 64.29486607142857 100.15580000000001 74.29486607142857 100.15580000000001L 68.07790178571429 100.15580000000001Q 78.07790178571429 100.15580000000001 78.07790178571429 110.15580000000001L 78.07790178571429 110.15580000000001L 78.07790178571429 120.638Q 78.07790178571429 130.638 68.07790178571429 130.638L 74.29486607142857 130.638Q 64.29486607142857 130.638 64.29486607142857 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 64.29486607142857 120.638L 64.29486607142857 110.15580000000001Q 64.29486607142857 100.15580000000001 74.29486607142857 100.15580000000001L 68.07790178571429 100.15580000000001Q 78.07790178571429 100.15580000000001 78.07790178571429 110.15580000000001L 78.07790178571429 110.15580000000001L 78.07790178571429 120.638Q 78.07790178571429 130.638 68.07790178571429 130.638L 74.29486607142857 130.638Q 64.29486607142857 130.638 64.29486607142857 120.638z"
                                                pathFrom="M 64.29486607142857 120.638L 64.29486607142857 120.638L 78.07790178571429 120.638L 78.07790178571429 120.638L 78.07790178571429 120.638L 78.07790178571429 120.638L 78.07790178571429 120.638L 64.29486607142857 120.638"
                                                cy="100.15580000000001" cx="110.75245535714285" j="1" val="7"
                                                barHeight="30.482199999999995" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1919"
                                                d="M 113.75245535714285 120.638L 113.75245535714285 75.31900000000002Q 113.75245535714285 65.31900000000002 123.75245535714285 65.31900000000002L 117.53549107142857 65.31900000000002Q 127.53549107142857 65.31900000000002 127.53549107142857 75.31900000000002L 127.53549107142857 75.31900000000002L 127.53549107142857 120.638Q 127.53549107142857 130.638 117.53549107142857 130.638L 123.75245535714285 130.638Q 113.75245535714285 130.638 113.75245535714285 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 113.75245535714285 120.638L 113.75245535714285 75.31900000000002Q 113.75245535714285 65.31900000000002 123.75245535714285 65.31900000000002L 117.53549107142857 65.31900000000002Q 127.53549107142857 65.31900000000002 127.53549107142857 75.31900000000002L 127.53549107142857 75.31900000000002L 127.53549107142857 120.638Q 127.53549107142857 130.638 117.53549107142857 130.638L 123.75245535714285 130.638Q 113.75245535714285 130.638 113.75245535714285 120.638z"
                                                pathFrom="M 113.75245535714285 120.638L 113.75245535714285 120.638L 127.53549107142857 120.638L 127.53549107142857 120.638L 127.53549107142857 120.638L 127.53549107142857 120.638L 127.53549107142857 120.638L 113.75245535714285 120.638"
                                                cy="65.31900000000002" cx="160.21004464285713" j="2" val="15"
                                                barHeight="65.31899999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1920"
                                                d="M 163.21004464285713 120.638L 163.21004464285713 14.35460000000002Q 163.21004464285713 4.354600000000019 173.21004464285713 4.354600000000019L 166.99308035714284 4.354600000000019Q 176.99308035714284 4.354600000000019 176.99308035714284 14.35460000000002L 176.99308035714284 14.35460000000002L 176.99308035714284 120.638Q 176.99308035714284 130.638 166.99308035714284 130.638L 173.21004464285713 130.638Q 163.21004464285713 130.638 163.21004464285713 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 163.21004464285713 120.638L 163.21004464285713 14.35460000000002Q 163.21004464285713 4.354600000000019 173.21004464285713 4.354600000000019L 166.99308035714284 4.354600000000019Q 176.99308035714284 4.354600000000019 176.99308035714284 14.35460000000002L 176.99308035714284 14.35460000000002L 176.99308035714284 120.638Q 176.99308035714284 130.638 166.99308035714284 130.638L 173.21004464285713 130.638Q 163.21004464285713 130.638 163.21004464285713 120.638z"
                                                pathFrom="M 163.21004464285713 120.638L 163.21004464285713 120.638L 176.99308035714284 120.638L 176.99308035714284 120.638L 176.99308035714284 120.638L 176.99308035714284 120.638L 176.99308035714284 120.638L 163.21004464285713 120.638"
                                                cy="4.354600000000019" cx="209.6676339285714" j="3" val="29"
                                                barHeight="126.28339999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1921"
                                                d="M 212.6676339285714 120.638L 212.6676339285714 62.255200000000016Q 212.6676339285714 52.255200000000016 222.6676339285714 52.255200000000016L 216.45066964285712 52.255200000000016Q 226.45066964285712 52.255200000000016 226.45066964285712 62.255200000000016L 226.45066964285712 62.255200000000016L 226.45066964285712 120.638Q 226.45066964285712 130.638 216.45066964285712 130.638L 222.6676339285714 130.638Q 212.6676339285714 130.638 212.6676339285714 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 212.6676339285714 120.638L 212.6676339285714 62.255200000000016Q 212.6676339285714 52.255200000000016 222.6676339285714 52.255200000000016L 216.45066964285712 52.255200000000016Q 226.45066964285712 52.255200000000016 226.45066964285712 62.255200000000016L 226.45066964285712 62.255200000000016L 226.45066964285712 120.638Q 226.45066964285712 130.638 216.45066964285712 130.638L 222.6676339285714 130.638Q 212.6676339285714 130.638 212.6676339285714 120.638z"
                                                pathFrom="M 212.6676339285714 120.638L 212.6676339285714 120.638L 226.45066964285712 120.638L 226.45066964285712 120.638L 226.45066964285712 120.638L 226.45066964285712 120.638L 226.45066964285712 120.638L 212.6676339285714 120.638"
                                                cy="52.255200000000016" cx="259.1252232142857" j="4" val="18"
                                                barHeight="78.38279999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1922"
                                                d="M 262.1252232142857 120.638L 262.1252232142857 88.3828Q 262.1252232142857 78.3828 272.1252232142857 78.3828L 265.9082589285714 78.3828Q 275.9082589285714 78.3828 275.9082589285714 88.3828L 275.9082589285714 88.3828L 275.9082589285714 120.638Q 275.9082589285714 130.638 265.9082589285714 130.638L 272.1252232142857 130.638Q 262.1252232142857 130.638 262.1252232142857 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 262.1252232142857 120.638L 262.1252232142857 88.3828Q 262.1252232142857 78.3828 272.1252232142857 78.3828L 265.9082589285714 78.3828Q 275.9082589285714 78.3828 275.9082589285714 88.3828L 275.9082589285714 88.3828L 275.9082589285714 120.638Q 275.9082589285714 130.638 265.9082589285714 130.638L 272.1252232142857 130.638Q 262.1252232142857 130.638 262.1252232142857 120.638z"
                                                pathFrom="M 262.1252232142857 120.638L 262.1252232142857 120.638L 275.9082589285714 120.638L 275.9082589285714 120.638L 275.9082589285714 120.638L 275.9082589285714 120.638L 275.9082589285714 120.638L 262.1252232142857 120.638"
                                                cy="78.3828" cx="308.5828125" j="5" val="12"
                                                barHeight="52.255199999999995" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1923"
                                                d="M 311.5828125 120.638L 311.5828125 101.44660000000002Q 311.5828125 91.44660000000002 321.5828125 91.44660000000002L 315.3658482142857 91.44660000000002Q 325.3658482142857 91.44660000000002 325.3658482142857 101.44660000000002L 325.3658482142857 101.44660000000002L 325.3658482142857 120.638Q 325.3658482142857 130.638 315.3658482142857 130.638L 321.5828125 130.638Q 311.5828125 130.638 311.5828125 120.638z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 311.5828125 120.638L 311.5828125 101.44660000000002Q 311.5828125 91.44660000000002 321.5828125 91.44660000000002L 315.3658482142857 91.44660000000002Q 325.3658482142857 91.44660000000002 325.3658482142857 101.44660000000002L 325.3658482142857 101.44660000000002L 325.3658482142857 120.638Q 325.3658482142857 130.638 315.3658482142857 130.638L 321.5828125 130.638Q 311.5828125 130.638 311.5828125 120.638z"
                                                pathFrom="M 311.5828125 120.638L 311.5828125 120.638L 325.3658482142857 120.638L 325.3658482142857 120.638L 325.3658482142857 120.638L 325.3658482142857 120.638L 325.3658482142857 120.638L 311.5828125 120.638"
                                                cy="91.44660000000002" cx="358.04040178571427" j="6" val="9"
                                                barHeight="39.191399999999994" barWidth="19.783035714285713"></path>
                                        </g>
                                        <g id="SvgjsG1924" class="apexcharts-series" seriesName="2020" rel="2"
                                            data:realIndex="1">
                                            <path id="SvgjsPath1926"
                                                d="M 14.837276785714286 150.638L 14.837276785714286 187.24779999999998Q 14.837276785714286 197.24779999999998 24.837276785714288 197.24779999999998L 18.620312499999997 197.24779999999998Q 28.620312499999997 197.24779999999998 28.620312499999997 187.24779999999998L 28.620312499999997 187.24779999999998L 28.620312499999997 150.638Q 28.620312499999997 140.638 18.620312499999997 140.638L 24.837276785714288 140.638Q 14.837276785714286 140.638 14.837276785714286 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 14.837276785714286 150.638L 14.837276785714286 187.24779999999998Q 14.837276785714286 197.24779999999998 24.837276785714288 197.24779999999998L 18.620312499999997 197.24779999999998Q 28.620312499999997 197.24779999999998 28.620312499999997 187.24779999999998L 28.620312499999997 187.24779999999998L 28.620312499999997 150.638Q 28.620312499999997 140.638 18.620312499999997 140.638L 24.837276785714288 140.638Q 14.837276785714286 140.638 14.837276785714286 150.638z"
                                                pathFrom="M 14.837276785714286 150.638L 14.837276785714286 150.638L 28.620312499999997 150.638L 28.620312499999997 150.638L 28.620312499999997 150.638L 28.620312499999997 150.638L 28.620312499999997 150.638L 14.837276785714286 150.638"
                                                cy="177.24779999999998" cx="61.29486607142857" j="0" val="-13"
                                                barHeight="-56.60979999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1927"
                                                d="M 64.29486607142857 150.638L 64.29486607142857 209.0208Q 64.29486607142857 219.0208 74.29486607142857 219.0208L 68.07790178571429 219.0208Q 78.07790178571429 219.0208 78.07790178571429 209.0208L 78.07790178571429 209.0208L 78.07790178571429 150.638Q 78.07790178571429 140.638 68.07790178571429 140.638L 74.29486607142857 140.638Q 64.29486607142857 140.638 64.29486607142857 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 64.29486607142857 150.638L 64.29486607142857 209.0208Q 64.29486607142857 219.0208 74.29486607142857 219.0208L 68.07790178571429 219.0208Q 78.07790178571429 219.0208 78.07790178571429 209.0208L 78.07790178571429 209.0208L 78.07790178571429 150.638Q 78.07790178571429 140.638 68.07790178571429 140.638L 74.29486607142857 140.638Q 64.29486607142857 140.638 64.29486607142857 150.638z"
                                                pathFrom="M 64.29486607142857 150.638L 64.29486607142857 150.638L 78.07790178571429 150.638L 78.07790178571429 150.638L 78.07790178571429 150.638L 78.07790178571429 150.638L 78.07790178571429 150.638L 64.29486607142857 150.638"
                                                cy="199.0208" cx="110.75245535714285" j="1" val="-18"
                                                barHeight="-78.38279999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1928"
                                                d="M 113.75245535714285 150.638L 113.75245535714285 169.8294Q 113.75245535714285 179.8294 123.75245535714285 179.8294L 117.53549107142857 179.8294Q 127.53549107142857 179.8294 127.53549107142857 169.8294L 127.53549107142857 169.8294L 127.53549107142857 150.638Q 127.53549107142857 140.638 117.53549107142857 140.638L 123.75245535714285 140.638Q 113.75245535714285 140.638 113.75245535714285 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 113.75245535714285 150.638L 113.75245535714285 169.8294Q 113.75245535714285 179.8294 123.75245535714285 179.8294L 117.53549107142857 179.8294Q 127.53549107142857 179.8294 127.53549107142857 169.8294L 127.53549107142857 169.8294L 127.53549107142857 150.638Q 127.53549107142857 140.638 117.53549107142857 140.638L 123.75245535714285 140.638Q 113.75245535714285 140.638 113.75245535714285 150.638z"
                                                pathFrom="M 113.75245535714285 150.638L 113.75245535714285 150.638L 127.53549107142857 150.638L 127.53549107142857 150.638L 127.53549107142857 150.638L 127.53549107142857 150.638L 127.53549107142857 150.638L 113.75245535714285 150.638"
                                                cy="159.8294" cx="160.21004464285713" j="2" val="-9"
                                                barHeight="-39.191399999999994" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1929"
                                                d="M 163.21004464285713 150.638L 163.21004464285713 191.6024Q 163.21004464285713 201.6024 173.21004464285713 201.6024L 166.99308035714284 201.6024Q 176.99308035714284 201.6024 176.99308035714284 191.6024L 176.99308035714284 191.6024L 176.99308035714284 150.638Q 176.99308035714284 140.638 166.99308035714284 140.638L 173.21004464285713 140.638Q 163.21004464285713 140.638 163.21004464285713 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 163.21004464285713 150.638L 163.21004464285713 191.6024Q 163.21004464285713 201.6024 173.21004464285713 201.6024L 166.99308035714284 201.6024Q 176.99308035714284 201.6024 176.99308035714284 191.6024L 176.99308035714284 191.6024L 176.99308035714284 150.638Q 176.99308035714284 140.638 166.99308035714284 140.638L 173.21004464285713 140.638Q 163.21004464285713 140.638 163.21004464285713 150.638z"
                                                pathFrom="M 163.21004464285713 150.638L 163.21004464285713 150.638L 176.99308035714284 150.638L 176.99308035714284 150.638L 176.99308035714284 150.638L 176.99308035714284 150.638L 176.99308035714284 150.638L 163.21004464285713 150.638"
                                                cy="181.6024" cx="209.6676339285714" j="3" val="-14"
                                                barHeight="-60.96439999999999" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1930"
                                                d="M 212.6676339285714 150.638L 212.6676339285714 152.411Q 212.6676339285714 162.411 222.6676339285714 162.411L 216.45066964285712 162.411Q 226.45066964285712 162.411 226.45066964285712 152.411L 226.45066964285712 152.411L 226.45066964285712 150.638Q 226.45066964285712 140.638 216.45066964285712 140.638L 222.6676339285714 140.638Q 212.6676339285714 140.638 212.6676339285714 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 212.6676339285714 150.638L 212.6676339285714 152.411Q 212.6676339285714 162.411 222.6676339285714 162.411L 216.45066964285712 162.411Q 226.45066964285712 162.411 226.45066964285712 152.411L 226.45066964285712 152.411L 226.45066964285712 150.638Q 226.45066964285712 140.638 216.45066964285712 140.638L 222.6676339285714 140.638Q 212.6676339285714 140.638 212.6676339285714 150.638z"
                                                pathFrom="M 212.6676339285714 150.638L 212.6676339285714 150.638L 226.45066964285712 150.638L 226.45066964285712 150.638L 226.45066964285712 150.638L 226.45066964285712 150.638L 226.45066964285712 150.638L 212.6676339285714 150.638"
                                                cy="142.411" cx="259.1252232142857" j="4" val="-5"
                                                barHeight="-21.772999999999996" barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1931"
                                                d="M 262.1252232142857 150.638L 262.1252232142857 204.6662Q 262.1252232142857 214.6662 272.1252232142857 214.6662L 265.9082589285714 214.6662Q 275.9082589285714 214.6662 275.9082589285714 204.6662L 275.9082589285714 204.6662L 275.9082589285714 150.638Q 275.9082589285714 140.638 265.9082589285714 140.638L 272.1252232142857 140.638Q 262.1252232142857 140.638 262.1252232142857 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 262.1252232142857 150.638L 262.1252232142857 204.6662Q 262.1252232142857 214.6662 272.1252232142857 214.6662L 265.9082589285714 214.6662Q 275.9082589285714 214.6662 275.9082589285714 204.6662L 275.9082589285714 204.6662L 275.9082589285714 150.638Q 275.9082589285714 140.638 265.9082589285714 140.638L 272.1252232142857 140.638Q 262.1252232142857 140.638 262.1252232142857 150.638z"
                                                pathFrom="M 262.1252232142857 150.638L 262.1252232142857 150.638L 275.9082589285714 150.638L 275.9082589285714 150.638L 275.9082589285714 150.638L 275.9082589285714 150.638L 275.9082589285714 150.638L 262.1252232142857 150.638"
                                                cy="194.6662" cx="308.5828125" j="5" val="-17" barHeight="-74.0282"
                                                barWidth="19.783035714285713"></path>
                                            <path id="SvgjsPath1932"
                                                d="M 311.5828125 150.638L 311.5828125 195.957Q 311.5828125 205.957 321.5828125 205.957L 315.3658482142857 205.957Q 325.3658482142857 205.957 325.3658482142857 195.957L 325.3658482142857 195.957L 325.3658482142857 150.638Q 325.3658482142857 140.638 315.3658482142857 140.638L 321.5828125 140.638Q 311.5828125 140.638 311.5828125 150.638z"
                                                fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaska3963r2d)"
                                                pathTo="M 311.5828125 150.638L 311.5828125 195.957Q 311.5828125 205.957 321.5828125 205.957L 315.3658482142857 205.957Q 325.3658482142857 205.957 325.3658482142857 195.957L 325.3658482142857 195.957L 325.3658482142857 150.638Q 325.3658482142857 140.638 315.3658482142857 140.638L 321.5828125 140.638Q 311.5828125 140.638 311.5828125 150.638z"
                                                pathFrom="M 311.5828125 150.638L 311.5828125 150.638L 325.3658482142857 150.638L 325.3658482142857 150.638L 325.3658482142857 150.638L 325.3658482142857 150.638L 325.3658482142857 150.638L 311.5828125 150.638"
                                                cy="185.957" cx="358.04040178571427" j="6" val="-15"
                                                barHeight="-65.31899999999999" barWidth="19.783035714285713"></path>
                                        </g>
                                        <g id="SvgjsG1916" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1925" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1981" x1="0" y1="0" x2="346.203125" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1982" x1="0" y1="0" x2="346.203125" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                    <g id="SvgjsG1983" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1984" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1985" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1956" class="apexcharts-yaxis" rel="0" transform="translate(15.796875, 0)">
                                    <g id="SvgjsG1957" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1958"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="52.5" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1959">30</tspan>
                                            <title>30</title>
                                        </text><text id="SvgjsText1960" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="96.04599999999999" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1961">20</tspan>
                                            <title>20</title>
                                        </text><text id="SvgjsText1962" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="139.59199999999998" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1963">10</tspan>
                                            <title>10</title>
                                        </text><text id="SvgjsText1964" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="183.13799999999998" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1965">0</tspan>
                                            <title>0</title>
                                        </text><text id="SvgjsText1966" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="226.68399999999997" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1967">-10</tspan>
                                            <title>-10</title>
                                        </text><text id="SvgjsText1968" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="270.22999999999996" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1969">-20</tspan>
                                            <title>-20</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1904" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 437px; height: 377px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                    id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    2022
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                    <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="growthChart" style="min-height: 154.875px;">
                        <div id="apexcharts06cc8og3" class="apexcharts-canvas apexcharts06cc8og3 apexcharts-theme-light"
                            style="width: 218px; height: 154.875px;"><svg id="SvgjsSvg1986" width="218" height="154.875"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1988" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(2, -25)">
                                    <defs id="SvgjsDefs1987">
                                        <clipPath id="gridRectMask06cc8og3">
                                            <rect id="SvgjsRect1990" width="222" height="285" x="-3" y="-1" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask06cc8og3"></clipPath>
                                        <clipPath id="nonForecastMask06cc8og3"></clipPath>
                                        <clipPath id="gridRectMarkerMask06cc8og3">
                                            <rect id="SvgjsRect1991" width="220" height="287" x="-2" y="-2" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1996" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1997" stop-opacity="1" stop-color="rgba(105,108,255,1)"
                                                offset="0.3"></stop>
                                            <stop id="SvgjsStop1998" stop-opacity="0.6"
                                                stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop1999" stop-opacity="0.6"
                                                stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2007" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2008" stop-opacity="1" stop-color="rgba(105,108,255,1)"
                                                offset="0.3"></stop>
                                            <stop id="SvgjsStop2009" stop-opacity="0.6"
                                                stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop2010" stop-opacity="0.6"
                                                stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG1992" class="apexcharts-radialbar">
                                        <g id="SvgjsG1993">
                                            <g id="SvgjsG1994" class="apexcharts-tracks">
                                                <g id="SvgjsG1995" class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="1">
                                                    <path id="apexcharts-radialbarTrack-0"
                                                        d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                        fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt"
                                                        stroke-width="17.357317073170734" stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2001">
                                                <g id="SvgjsG2006" class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Growth" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2011"
                                                        d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                        fill="none" fill-opacity="0.85"
                                                        stroke="url(#SvgjsLinearGradient2007)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="17.357317073170734"
                                                        stroke-dasharray="5"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                        data:angle="234" data:value="78" index="0" j="0"
                                                        data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                    </path>
                                                </g>
                                                <circle id="SvgjsCircle2002" r="54.65121951219512" cx="108" cy="108"
                                                    class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG2003" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                        id="SvgjsText2004" font-family="Public Sans" x="108" y="123"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="15px"
                                                        font-weight="500" fill="#566a7f"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                        id="SvgjsText2005" font-family="Public Sans" x="108" y="99"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="22px"
                                                        font-weight="500" fill="#566a7f"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2012" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2013" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                </g>
                                <g id="SvgjsG1989" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                    <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-primary p-2"><i
                                        class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2022</small>
                                <h6 class="mb-0">$32.5k</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2021</small>
                                <h6 class="mb-0">$41.2k</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 219px; height: 377px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Total Revenue -->
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block mb-1">Payments</span>
                        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                        <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Transactions</span>
                        <h3 class="card-title mb-2">$14,857</h3>
                        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                    </div>
                </div>
            </div>
            <!-- </div>
<div class="row"> -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                            style="position: relative;">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2">Profile Report</h5>
                                    <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                </div>
                                <div class="mt-sm-auto">
                                    <small class="text-success text-nowrap fw-medium"><i class="bx bx-chevron-up"></i>
                                        68.2%</small>
                                    <h3 class="mb-0">$84,686k</h3>
                                </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px;">
                                <div id="apexchartsvx5d25ju"
                                    class="apexcharts-canvas apexchartsvx5d25ju apexcharts-theme-light"
                                    style="width: 131px; height: 80px;"><svg id="SvgjsSvg2015" width="131" height="80"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2017" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2016">
                                                <clipPath id="gridRectMaskvx5d25ju">
                                                    <rect id="SvgjsRect2022" width="132" height="85" x="-4.5" y="-2.5"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskvx5d25ju"></clipPath>
                                                <clipPath id="nonForecastMaskvx5d25ju"></clipPath>
                                                <clipPath id="gridRectMarkerMaskvx5d25ju">
                                                    <rect id="SvgjsRect2023" width="127" height="84" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter2029" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2030" flood-color="#ffab00"
                                                        flood-opacity="0.15" result="SvgjsFeFlood2030Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2031" in="SvgjsFeFlood2030Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite2031Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2032" dx="5" dy="10"
                                                        result="SvgjsFeOffset2032Out" in="SvgjsFeComposite2031Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2033" stdDeviation="3 "
                                                        result="SvgjsFeGaussianBlur2033Out" in="SvgjsFeOffset2032Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2034" result="SvgjsFeMerge2034Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2035"
                                                            in="SvgjsFeGaussianBlur2033Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2036" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2037" in="SourceGraphic"
                                                        in2="SvgjsFeMerge2034Out" mode="normal"
                                                        result="SvgjsFeBlend2037Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <line id="SvgjsLine2021" x1="24.1" y1="0" x2="24.1" y2="80" stroke="#b6b6b6"
                                                stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="24.1" y="0" width="1" height="80"
                                                fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2038" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2039" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2047" class="apexcharts-grid">
                                                <g id="SvgjsG2048" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2050" x1="0" y1="0" x2="123" y2="0"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2051" x1="0" y1="20" x2="123" y2="20"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2052" x1="0" y1="40" x2="123" y2="40"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2053" x1="0" y1="60" x2="123" y2="60"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2054" x1="0" y1="80" x2="123" y2="80"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2049" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2056" x1="0" y1="80" x2="123" y2="80"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine2055" x1="0" y1="1" x2="0" y2="80"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG2024" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2025" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2028"
                                                        d="M 0 76C 8.61 76 15.990000000000002 12 24.6 12C 33.21 12 40.59 62 49.2 62C 57.81 62 65.19 22 73.8 22C 82.41 22 89.79 38 98.4 38C 107.01 38 114.39 6 123 6"
                                                        fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMaskvx5d25ju)"
                                                        filter="url(#SvgjsFilter2029)"
                                                        pathTo="M 0 76C 8.61 76 15.990000000000002 12 24.6 12C 33.21 12 40.59 62 49.2 62C 57.81 62 65.19 22 73.8 22C 82.41 22 89.79 38 98.4 38C 107.01 38 114.39 6 123 6"
                                                        pathFrom="M -1 120L -1 120L 24.6 120L 49.2 120L 73.8 120L 98.4 120L 123 120">
                                                    </path>
                                                    <g id="SvgjsG2026" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2062" r="0" cx="24.6" cy="12"
                                                                class="apexcharts-marker wswvtdcmrg no-pointer-events"
                                                                stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2027" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2057" x1="0" y1="0" x2="123" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2058" x1="0" y1="0" x2="123" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2059" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2060" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2061" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect2020" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG2046" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2018" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                        style="left: 3.96875px; top: 15px;">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">2</div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 171, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label">series-1: </span><span
                                                        class="apexcharts-tooltip-text-y-value">270</span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 267px; height: 117px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection