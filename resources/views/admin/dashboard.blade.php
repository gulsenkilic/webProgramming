@extends('admin.layouts.index')
@section('content')
    <div class="card-body">
        <div class="content-container">
            <div class="card border-dark mb-3 mt-3 mw-100">
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header h-auto">
                                <!--begin::Title-->
                                <div class="card-title py-5">
                                    <h3 class="card-label">Ay Bazında ortalama site ziyaretçi sayıları</h3>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <div class="card-body" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="chart_1" style="min-height: 365px;">
                                    <div id="apexcharts6k6063mh"
                                        class="apexcharts-canvas apexcharts6k6063mh apexcharts-theme-light"
                                        style="width: 404px; height: 350px;"><svg id="SvgjsSvg3494" width="404" height="350"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3496" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(44.34375, 30)">
                                                <defs id="SvgjsDefs3495">
                                                    <clipPath id="gridRectMask6k6063mh">
                                                        <rect id="SvgjsRect3502" width="346.35546875" height="283.303"
                                                            x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask6k6063mh">
                                                        <rect id="SvgjsRect3503" width="341.35546875" height="282.303"
                                                            x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine3501" x1="0" y1="0" x2="0" y2="278.303" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="278.303" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3509" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3510" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText3512"
                                                            font-family="Helvetica, Arial, sans-serif" x="0" y="307.303"
                                                            text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3513">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText3515"
                                                            font-family="Helvetica, Arial, sans-serif" x="42.16943359375"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3516">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText3518"
                                                            font-family="Helvetica, Arial, sans-serif" x="84.3388671875"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3519">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText3521"
                                                            font-family="Helvetica, Arial, sans-serif" x="126.50830078125"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3522">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText3524"
                                                            font-family="Helvetica, Arial, sans-serif" x="168.677734375"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3525">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText3527"
                                                            font-family="Helvetica, Arial, sans-serif" x="210.84716796875"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3528">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText3530"
                                                            font-family="Helvetica, Arial, sans-serif" x="253.0166015625"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3531">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText3533"
                                                            font-family="Helvetica, Arial, sans-serif" x="295.18603515625"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3534">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText3536"
                                                            font-family="Helvetica, Arial, sans-serif" x="337.35546875"
                                                            y="307.303" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3537">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text></g>
                                                    <line id="SvgjsLine3538" x1="0" y1="279.303" x2="337.35546875"
                                                        y2="279.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG3553" class="apexcharts-grid">
                                                    <g id="SvgjsG3554" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine3565" x1="0" y1="0" x2="337.35546875" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine3566" x1="0" y1="55.6606" x2="337.35546875"
                                                            y2="55.6606" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3567" x1="0" y1="111.3212" x2="337.35546875"
                                                            y2="111.3212" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3568" x1="0" y1="166.98180000000002"
                                                            x2="337.35546875" y2="166.98180000000002" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3569" x1="0" y1="222.6424" x2="337.35546875"
                                                            y2="222.6424" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3570" x1="0" y1="278.303" x2="337.35546875"
                                                            y2="278.303" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3555" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine3556" x1="0" y1="279.303" x2="0" y2="285.303"
                                                        stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                                    </line>
                                                    <line id="SvgjsLine3557" x1="42.16943359375" y1="279.303"
                                                        x2="42.16943359375" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3558" x1="84.3388671875" y1="279.303"
                                                        x2="84.3388671875" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3559" x1="126.50830078125" y1="279.303"
                                                        x2="126.50830078125" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3560" x1="168.677734375" y1="279.303"
                                                        x2="168.677734375" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3561" x1="210.84716796875" y1="279.303"
                                                        x2="210.84716796875" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3562" x1="253.0166015625" y1="279.303"
                                                        x2="253.0166015625" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3563" x1="295.18603515625" y1="279.303"
                                                        x2="295.18603515625" y2="285.303" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3564" x1="337.35546875" y1="279.303"
                                                        x2="337.35546875" y2="285.303" stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <rect id="SvgjsRect3571" width="337.35546875" height="55.6606" x="0"
                                                        y="0" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#f3f3f3"
                                                        clip-path="url(#gridRectMask6k6063mh)" class="apexcharts-grid-row">
                                                    </rect>
                                                    <rect id="SvgjsRect3572" width="337.35546875" height="55.6606" x="0"
                                                        y="55.6606" rx="0" ry="0" opacity="0.5" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="transparent"
                                                        clip-path="url(#gridRectMask6k6063mh)" class="apexcharts-grid-row">
                                                    </rect>
                                                    <rect id="SvgjsRect3573" width="337.35546875" height="55.6606" x="0"
                                                        y="111.3212" rx="0" ry="0" opacity="0.5" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#f3f3f3"
                                                        clip-path="url(#gridRectMask6k6063mh)" class="apexcharts-grid-row">
                                                    </rect>
                                                    <rect id="SvgjsRect3574" width="337.35546875" height="55.6606" x="0"
                                                        y="166.98180000000002" rx="0" ry="0" opacity="0.5" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="transparent"
                                                        clip-path="url(#gridRectMask6k6063mh)" class="apexcharts-grid-row">
                                                    </rect>
                                                    <rect id="SvgjsRect3575" width="337.35546875" height="55.6606" x="0"
                                                        y="222.6424" rx="0" ry="0" opacity="0.5" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#f3f3f3"
                                                        clip-path="url(#gridRectMask6k6063mh)" class="apexcharts-grid-row">
                                                    </rect>
                                                    <line id="SvgjsLine3577" x1="0" y1="278.303" x2="337.35546875"
                                                        y2="278.303" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3576" x1="0" y1="1" x2="0" y2="278.303"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3504" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3505" class="apexcharts-series" seriesName="Desktops"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3508"
                                                            d="M 0 259.74946666666665L 42.16943359375 202.23351333333332L 84.3388671875 213.36563333333334L 126.50830078125 183.67998L 168.677734375 187.39068666666665L 210.84716796875 163.27109333333334L 253.0166015625 150.28361999999998L 295.18603515625 109.46584666666666L 337.35546875 3.710706666666624"
                                                            fill="none" fill-opacity="1" stroke="rgba(105,147,255,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMask6k6063mh)"
                                                            pathTo="M 0 259.74946666666665L 42.16943359375 202.23351333333332L 84.3388671875 213.36563333333334L 126.50830078125 183.67998L 168.677734375 187.39068666666665L 210.84716796875 163.27109333333334L 253.0166015625 150.28361999999998L 295.18603515625 109.46584666666666L 337.35546875 3.710706666666624"
                                                            pathFrom="M -1 278.303L -1 278.303L 42.16943359375 278.303L 84.3388671875 278.303L 126.50830078125 278.303L 168.677734375 278.303L 210.84716796875 278.303L 253.0166015625 278.303L 295.18603515625 278.303L 337.35546875 278.303">
                                                        </path>
                                                        <g id="SvgjsG3506" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3583" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wpuhb2yrb no-pointer-events"
                                                                    stroke="#ffffff" fill="#6993ff" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3507" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine3578" x1="0" y1="0" x2="337.35546875" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3579" x1="0" y1="0" x2="337.35546875" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden">
                                                </line>
                                                <g id="SvgjsG3580" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3581" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3582" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3500" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG3539" class="apexcharts-yaxis" rel="0"
                                                transform="translate(14.34375, 0)">
                                                <g id="SvgjsG3540" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3541"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3542">150</tspan>
                                                    </text><text id="SvgjsText3543"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="87.1606"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3544">120</tspan>
                                                    </text><text id="SvgjsText3545"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="142.8212"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3546">90</tspan>
                                                    </text><text id="SvgjsText3547"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="198.48180000000002" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3548">60</tspan>
                                                    </text><text id="SvgjsText3549"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="254.1424"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3550">30</tspan>
                                                    </text><text id="SvgjsText3551"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="309.803"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan3552">0</tspan>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG3497" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 147, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                            <div class="apexcharts-menu-icon" title="Menu"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                </svg></div>
                                            <div class="apexcharts-menu">
                                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download
                                                    SVG
                                                </div>
                                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download
                                                    PNG
                                                </div>
                                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download
                                                    CSV
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 463px; height: 418px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Saat başı ziyaretçi sayısı</h3>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="chart_7" style="min-height: 365px;">
                                    <div id="apexchartsaoil7vu8i"
                                        class="apexcharts-canvas apexchartsaoil7vu8i apexcharts-theme-light"
                                        style="width: 404px; height: 350px;"><svg id="SvgjsSvg4346" width="404" height="350"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG4348" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(70.9921875, 30)">
                                                <defs id="SvgjsDefs4347">
                                                    <clipPath id="gridRectMaskaoil7vu8i">
                                                        <rect id="SvgjsRect4386" width="328.0078125" height="286.2" x="-2.5"
                                                            y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskaoil7vu8i">
                                                        <rect id="SvgjsRect4387" width="327.0078125" height="289.2" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine4354" x1="0" y1="0" x2="0" y2="285.2" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="285.2" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                    stroke-width="1"></line>
                                                <g id="SvgjsG4451" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG4452" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText4454"
                                                            font-family="Helvetica, Arial, sans-serif" x="5.474708686440678"
                                                            y="314.2" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4455">23:00</tspan>
                                                            <title>23:00</title>
                                                        </text><text id="SvgjsText4457"
                                                            font-family="Helvetica, Arial, sans-serif" x="60.22179555084746"
                                                            y="314.2" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4458">05:00</tspan>
                                                            <title>05:00</title>
                                                        </text><text id="SvgjsText4460"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="114.96888241525424" y="314.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4461">10:00</tspan>
                                                            <title>10:00</title>
                                                        </text><text id="SvgjsText4463"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="158.76655190677968" y="314.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4464">14:00</tspan>
                                                            <title>14:00</title>
                                                        </text><text id="SvgjsText4466"
                                                            font-family="Helvetica, Arial, sans-serif" x="202.5642213983051"
                                                            y="314.2" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4467">18:00</tspan>
                                                            <title>18:00</title>
                                                        </text><text id="SvgjsText4469"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="246.36189088983053" y="314.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4470">22:00</tspan>
                                                            <title>22:00</title>
                                                        </text><text id="SvgjsText4472"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="301.10897775423746" y="314.2" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4473">03:00</tspan>
                                                            <title>03:00</title>
                                                        </text></g>
                                                    <line id="SvgjsLine4474" x1="0" y1="286.2" x2="323.0078125" y2="286.2"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                                </g>
                                                <g id="SvgjsG4489" class="apexcharts-grid">
                                                    <g id="SvgjsG4490" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine4499" x1="0" y1="0" x2="323.0078125" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine4500" x1="0" y1="57.04" x2="323.0078125"
                                                            y2="57.04" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine4501" x1="0" y1="114.08" x2="323.0078125"
                                                            y2="114.08" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine4502" x1="0" y1="171.12" x2="323.0078125"
                                                            y2="171.12" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine4503" x1="0" y1="228.16" x2="323.0078125"
                                                            y2="228.16" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                        <line id="SvgjsLine4504" x1="0" y1="285.2" x2="323.0078125"
                                                            y2="285.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG4491" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine4492" x1="5.474708686440678" y1="286.2"
                                                        x2="5.474708686440678" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4493" x1="60.22179555084746" y1="286.2"
                                                        x2="60.22179555084746" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4494" x1="114.96888241525424" y1="286.2"
                                                        x2="114.96888241525424" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4495" x1="158.76655190677968" y1="286.2"
                                                        x2="158.76655190677968" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4496" x1="202.5642213983051" y1="286.2"
                                                        x2="202.5642213983051" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4497" x1="246.36189088983053" y1="286.2"
                                                        x2="246.36189088983053" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4498" x1="301.10897775423746" y1="286.2"
                                                        x2="301.10897775423746" y2="292.2" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4506" x1="0" y1="285.2" x2="323.0078125" y2="285.2"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine4505" x1="0" y1="1" x2="0" y2="285.2"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG4388"
                                                    class="apexcharts-candlestick-series apexcharts-plot-series">
                                                    <g id="SvgjsG4389" class="apexcharts-series" seriesName="seriesx1"
                                                        rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath4391"
                                                            d="M -1.9161480402542372 76.06283999999869L 0 76.06283999999869L 0 27.09400000000096L 0 76.06283999999869L 1.9161480402542372 76.06283999999869L 1.9161480402542372 86.10187999999835L 0 86.10187999999835L 0 105.40991999999824L 0 86.10187999999835L -1.9161480402542372 86.10187999999835L -1.9161480402542372 75.56283999999869"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M -1.9161480402542372 76.06283999999869L 0 76.06283999999869L 0 27.09400000000096L 0 76.06283999999869L 1.9161480402542372 76.06283999999869L 1.9161480402542372 86.10187999999835L 0 86.10187999999835L 0 105.40991999999824L 0 86.10187999999835L -1.9161480402542372 86.10187999999835L -1.9161480402542372 75.56283999999869"
                                                            pathFrom="M -1.9161480402542372 86.10187999999835M -1.9161480402542372 86.10187999999835"
                                                            cy="76.06283999999869" cx="1.4161480402542372" j="0"
                                                            val="6633.33" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4392"
                                                            d="M 3.558560646186441 79.82747999999992L 5.474708686440678 79.82747999999992L 5.474708686440678 46.80131999999867L 5.474708686440678 79.82747999999992L 7.390856726694915 79.82747999999992L 7.390856726694915 85.24627999999939L 5.474708686440678 85.24627999999939L 5.474708686440678 114.07999999999811L 5.474708686440678 85.24627999999939L 3.558560646186441 85.24627999999939L 3.558560646186441 79.32747999999992"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 3.558560646186441 79.82747999999992L 5.474708686440678 79.82747999999992L 5.474708686440678 46.80131999999867L 5.474708686440678 79.82747999999992L 7.390856726694915 79.82747999999992L 7.390856726694915 85.24627999999939L 5.474708686440678 85.24627999999939L 5.474708686440678 114.07999999999811L 5.474708686440678 85.24627999999939L 3.558560646186441 85.24627999999939L 3.558560646186441 79.32747999999992"
                                                            pathFrom="M 3.558560646186441 85.24627999999939M 3.558560646186441 85.24627999999939"
                                                            cy="79.82747999999992" cx="6.890856726694915" j="1"
                                                            val="6630.11" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4393"
                                                            d="M 9.03326933262712 69.4461999999985L 10.949417372881356 69.4461999999985L 10.949417372881356 31.51459999999861L 10.949417372881356 69.4461999999985L 12.865565413135593 69.4461999999985L 12.865565413135593 83.53507999999783L 10.949417372881356 83.53507999999783L 10.949417372881356 104.55431999999928L 10.949417372881356 83.53507999999783L 9.03326933262712 83.53507999999783L 9.03326933262712 68.9461999999985"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 9.03326933262712 69.4461999999985L 10.949417372881356 69.4461999999985L 10.949417372881356 31.51459999999861L 10.949417372881356 69.4461999999985L 12.865565413135593 69.4461999999985L 12.865565413135593 83.53507999999783L 10.949417372881356 83.53507999999783L 10.949417372881356 104.55431999999928L 10.949417372881356 83.53507999999783L 9.03326933262712 83.53507999999783L 9.03326933262712 68.9461999999985"
                                                            pathFrom="M 9.03326933262712 83.53507999999783M 9.03326933262712 83.53507999999783"
                                                            cy="69.4461999999985" cx="12.365565413135593" j="2"
                                                            val="6635.65" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4394"
                                                            d="M 14.507978019067798 62.059519999998884L 16.424126059322035 62.059519999998884L 16.424126059322035 25.667999999997846L 16.424126059322035 62.059519999998884L 18.340274099576273 62.059519999998884L 18.340274099576273 69.4461999999985L 16.424126059322035 69.4461999999985L 16.424126059322035 86.5011599999998L 16.424126059322035 69.4461999999985L 14.507978019067798 69.4461999999985L 14.507978019067798 61.559519999998884"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 14.507978019067798 62.059519999998884L 16.424126059322035 62.059519999998884L 16.424126059322035 25.667999999997846L 16.424126059322035 62.059519999998884L 18.340274099576273 62.059519999998884L 18.340274099576273 69.4461999999985L 16.424126059322035 69.4461999999985L 16.424126059322035 86.5011599999998L 16.424126059322035 69.4461999999985L 14.507978019067798 69.4461999999985L 14.507978019067798 61.559519999998884"
                                                            pathFrom="M 14.507978019067798 69.4461999999985M 14.507978019067798 69.4461999999985"
                                                            cy="62.059519999998884" cx="17.840274099576273" j="3"
                                                            val="6638.24" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4395"
                                                            d="M 19.982686705508474 62.059519999998884L 21.898834745762713 62.059519999998884L 21.898834745762713 57.04000000000087L 21.898834745762713 62.059519999998884L 23.814982786016948 62.059519999998884L 23.814982786016948 101.33155999999872L 21.898834745762713 101.33155999999872L 21.898834745762713 114.07999999999811L 21.898834745762713 101.33155999999872L 19.982686705508474 101.33155999999872L 19.982686705508474 61.559519999998884"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 19.982686705508474 62.059519999998884L 21.898834745762713 62.059519999998884L 21.898834745762713 57.04000000000087L 21.898834745762713 62.059519999998884L 23.814982786016948 62.059519999998884L 23.814982786016948 101.33155999999872L 21.898834745762713 101.33155999999872L 21.898834745762713 114.07999999999811L 21.898834745762713 101.33155999999872L 19.982686705508474 101.33155999999872L 19.982686705508474 61.559519999998884"
                                                            pathFrom="M 19.982686705508474 101.33155999999872M 19.982686705508474 101.33155999999872"
                                                            cy="62.059519999998884" cx="23.314982786016948" j="4"
                                                            val="6624.47" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4396"
                                                            d="M 25.457395391949152 101.16043999999965L 27.37354343220339 101.16043999999965L 27.37354343220339 68.36244000000079L 27.37354343220339 101.16043999999965L 29.289691472457626 101.16043999999965L 29.289691472457626 101.78787999999986L 27.37354343220339 101.78787999999986L 27.37354343220339 109.28863999999885L 27.37354343220339 101.78787999999986L 25.457395391949152 101.78787999999986L 25.457395391949152 100.66043999999965"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 25.457395391949152 101.16043999999965L 27.37354343220339 101.16043999999965L 27.37354343220339 68.36244000000079L 27.37354343220339 101.16043999999965L 29.289691472457626 101.16043999999965L 29.289691472457626 101.78787999999986L 27.37354343220339 101.78787999999986L 27.37354343220339 109.28863999999885L 27.37354343220339 101.78787999999986L 25.457395391949152 101.78787999999986L 25.457395391949152 100.66043999999965"
                                                            pathFrom="M 25.457395391949152 101.78787999999986M 25.457395391949152 101.78787999999986"
                                                            cy="101.16043999999965" cx="28.789691472457626" j="5"
                                                            val="6624.31" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4397"
                                                            d="M 30.93210407838983 96.91095999999743L 32.84825211864407 96.91095999999743L 32.84825211864407 79.28559999999925L 32.84825211864407 96.91095999999743L 34.764400158898304 96.91095999999743L 34.764400158898304 100.9322800000009L 32.84825211864407 100.9322800000009L 32.84825211864407 122.6359999999986L 32.84825211864407 100.9322800000009L 30.93210407838983 100.9322800000009L 30.93210407838983 96.41095999999743"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 30.93210407838983 96.91095999999743L 32.84825211864407 96.91095999999743L 32.84825211864407 79.28559999999925L 32.84825211864407 96.91095999999743L 34.764400158898304 96.91095999999743L 34.764400158898304 100.9322800000009L 32.84825211864407 100.9322800000009L 32.84825211864407 122.6359999999986L 32.84825211864407 100.9322800000009L 30.93210407838983 100.9322800000009L 30.93210407838983 96.41095999999743"
                                                            pathFrom="M 30.93210407838983 100.9322800000009M 30.93210407838983 100.9322800000009"
                                                            cy="96.91095999999743" cx="34.264400158898304" j="6"
                                                            val="6626.02" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4398"
                                                            d="M 36.40681276483051 94.11599999999817L 38.32296080508475 94.11599999999817L 38.32296080508475 92.34776000000056L 38.32296080508475 94.11599999999817L 40.23910884533899 94.11599999999817L 40.23910884533899 162.5069599999988L 38.32296080508475 162.5069599999988L 38.32296080508475 216.1245600000002L 38.32296080508475 162.5069599999988L 36.40681276483051 162.5069599999988L 36.40681276483051 93.61599999999817"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 36.40681276483051 94.11599999999817L 38.32296080508475 94.11599999999817L 38.32296080508475 92.34776000000056L 38.32296080508475 94.11599999999817L 40.23910884533899 94.11599999999817L 40.23910884533899 162.5069599999988L 38.32296080508475 162.5069599999988L 38.32296080508475 216.1245600000002L 38.32296080508475 162.5069599999988L 36.40681276483051 162.5069599999988L 36.40681276483051 93.61599999999817"
                                                            pathFrom="M 36.40681276483051 162.5069599999988M 36.40681276483051 162.5069599999988"
                                                            cy="94.11599999999817" cx="39.73910884533899" j="7"
                                                            val="6603.02" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4399"
                                                            d="M 41.88152145127119 156.86000000000058L 43.797669491525426 156.86000000000058L 43.797669491525426 148.21844000000056L 43.797669491525426 156.86000000000058L 45.71381753177967 156.86000000000058L 45.71381753177967 159.6834799999997L 43.797669491525426 159.6834799999997L 43.797669491525426 174.1146000000008L 43.797669491525426 159.6834799999997L 41.88152145127119 159.6834799999997L 41.88152145127119 156.36000000000058"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 41.88152145127119 156.86000000000058L 43.797669491525426 156.86000000000058L 43.797669491525426 148.21844000000056L 43.797669491525426 156.86000000000058L 45.71381753177967 156.86000000000058L 45.71381753177967 159.6834799999997L 43.797669491525426 159.6834799999997L 43.797669491525426 174.1146000000008L 43.797669491525426 159.6834799999997L 41.88152145127119 159.6834799999997L 41.88152145127119 156.36000000000058"
                                                            pathFrom="M 41.88152145127119 159.6834799999997M 41.88152145127119 159.6834799999997"
                                                            cy="156.86000000000058" cx="45.21381753177967" j="8"
                                                            val="6604.01" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4400"
                                                            d="M 47.35623013771187 148.24695999999676L 49.272378177966104 148.24695999999676L 49.272378177966104 130.0512000000017L 49.272378177966104 148.24695999999676L 51.188526218220346 148.24695999999676L 51.188526218220346 158.28600000000006L 49.272378177966104 158.28600000000006L 49.272378177966104 164.67447999999786L 49.272378177966104 158.28600000000006L 47.35623013771187 158.28600000000006L 47.35623013771187 147.74695999999676"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 47.35623013771187 148.24695999999676L 49.272378177966104 148.24695999999676L 49.272378177966104 130.0512000000017L 49.272378177966104 148.24695999999676L 51.188526218220346 148.24695999999676L 51.188526218220346 158.28600000000006L 49.272378177966104 158.28600000000006L 49.272378177966104 164.67447999999786L 49.272378177966104 158.28600000000006L 47.35623013771187 158.28600000000006L 47.35623013771187 147.74695999999676"
                                                            pathFrom="M 47.35623013771187 158.28600000000006M 47.35623013771187 158.28600000000006"
                                                            cy="148.24695999999676" cx="50.688526218220346" j="9"
                                                            val="6608.02" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4401"
                                                            d="M 52.83093882415255 145.70867999999973L 54.74708686440678 145.70867999999973L 54.74708686440678 140.66063999999824L 54.74708686440678 145.70867999999973L 56.663234904661024 145.70867999999973L 56.663234904661024 148.24695999999676L 54.74708686440678 148.24695999999676L 54.74708686440678 165.44452000000092L 54.74708686440678 148.24695999999676L 52.83093882415255 148.24695999999676L 52.83093882415255 145.20867999999973"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 52.83093882415255 145.70867999999973L 54.74708686440678 145.70867999999973L 54.74708686440678 140.66063999999824L 54.74708686440678 145.70867999999973L 56.663234904661024 145.70867999999973L 56.663234904661024 148.24695999999676L 54.74708686440678 148.24695999999676L 54.74708686440678 165.44452000000092L 54.74708686440678 148.24695999999676L 52.83093882415255 148.24695999999676L 52.83093882415255 145.20867999999973"
                                                            pathFrom="M 52.83093882415255 148.24695999999676M 52.83093882415255 148.24695999999676"
                                                            cy="145.70867999999973" cx="56.163234904661024" j="10"
                                                            val="6608.91" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4402"
                                                            d="M 58.305647510593225 136.89600000000064L 60.22179555084746 136.89600000000064L 60.22179555084746 116.96052000000054L 60.22179555084746 136.89600000000064L 62.1379435911017 136.89600000000064L 62.1379435911017 145.70867999999973L 60.22179555084746 145.70867999999973L 60.22179555084746 148.27548000000024L 60.22179555084746 145.70867999999973L 58.305647510593225 145.70867999999973L 58.305647510593225 136.39600000000064"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 58.305647510593225 136.89600000000064L 60.22179555084746 136.89600000000064L 60.22179555084746 116.96052000000054L 60.22179555084746 136.89600000000064L 62.1379435911017 136.89600000000064L 62.1379435911017 145.70867999999973L 60.22179555084746 145.70867999999973L 60.22179555084746 148.27548000000024L 60.22179555084746 145.70867999999973L 58.305647510593225 145.70867999999973L 58.305647510593225 136.39600000000064"
                                                            pathFrom="M 58.305647510593225 145.70867999999973M 58.305647510593225 145.70867999999973"
                                                            cy="136.89600000000064" cx="61.6379435911017" j="11" val="6612"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4403"
                                                            d="M 63.7803561970339 136.89600000000064L 65.69650423728814 136.89600000000064L 65.69650423728814 127.96923999999854L 65.69650423728814 136.89600000000064L 67.61265227754238 136.89600000000064L 67.61265227754238 136.89600000000064L 65.69650423728814 136.89600000000064L 65.69650423728814 156.60331999999835L 65.69650423728814 136.89600000000064L 63.7803561970339 136.89600000000064L 63.7803561970339 136.39600000000064"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 63.7803561970339 136.89600000000064L 65.69650423728814 136.89600000000064L 65.69650423728814 127.96923999999854L 65.69650423728814 136.89600000000064L 67.61265227754238 136.89600000000064L 67.61265227754238 136.89600000000064L 65.69650423728814 136.89600000000064L 65.69650423728814 156.60331999999835L 65.69650423728814 136.89600000000064L 63.7803561970339 136.89600000000064L 63.7803561970339 136.39600000000064"
                                                            pathFrom="M 63.7803561970339 136.89600000000064M 63.7803561970339 136.89600000000064"
                                                            cy="136.89600000000064" cx="67.11265227754238" j="12" val="6612"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4404"
                                                            d="M 69.25506488347457 105.66660000000047L 71.17121292372882 105.66660000000047L 71.17121292372882 102.32976000000053L 71.17121292372882 105.66660000000047L 73.08736096398304 105.66660000000047L 73.08736096398304 136.89600000000064L 71.17121292372882 136.89600000000064L 71.17121292372882 147.07763999999952L 71.17121292372882 136.89600000000064L 69.25506488347457 136.89600000000064L 69.25506488347457 105.16660000000047"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 69.25506488347457 105.66660000000047L 71.17121292372882 105.66660000000047L 71.17121292372882 102.32976000000053L 71.17121292372882 105.66660000000047L 73.08736096398304 105.66660000000047L 73.08736096398304 136.89600000000064L 71.17121292372882 136.89600000000064L 71.17121292372882 147.07763999999952L 71.17121292372882 136.89600000000064L 69.25506488347457 136.89600000000064L 69.25506488347457 105.16660000000047"
                                                            pathFrom="M 69.25506488347457 136.89600000000064M 69.25506488347457 136.89600000000064"
                                                            cy="105.66660000000047" cx="72.58736096398304" j="13"
                                                            val="6622.95" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4405"
                                                            d="M 74.72977356991525 102.9286800000009L 76.6459216101695 102.9286800000009L 76.6459216101695 102.9286800000009L 76.6459216101695 102.9286800000009L 78.56206965042372 102.9286800000009L 78.56206965042372 126.42915999999968L 76.6459216101695 126.42915999999968L 76.6459216101695 128.34000000000015L 76.6459216101695 126.42915999999968L 74.72977356991525 126.42915999999968L 74.72977356991525 102.4286800000009"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 74.72977356991525 102.9286800000009L 76.6459216101695 102.9286800000009L 76.6459216101695 102.9286800000009L 76.6459216101695 102.9286800000009L 78.56206965042372 102.9286800000009L 78.56206965042372 126.42915999999968L 76.6459216101695 126.42915999999968L 76.6459216101695 128.34000000000015L 76.6459216101695 126.42915999999968L 74.72977356991525 126.42915999999968L 74.72977356991525 102.4286800000009"
                                                            pathFrom="M 74.72977356991525 126.42915999999968M 74.72977356991525 126.42915999999968"
                                                            cy="102.9286800000009" cx="78.06206965042372" j="14"
                                                            val="6615.67" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4406"
                                                            d="M 80.20448225635593 117.8161199999995L 82.12063029661017 117.8161199999995L 82.12063029661017 117.67352000000028L 82.12063029661017 117.8161199999995L 84.0367783368644 117.8161199999995L 84.0367783368644 141.45920000000115L 82.12063029661017 141.45920000000115L 82.12063029661017 142.59999999999854L 82.12063029661017 141.45920000000115L 80.20448225635593 141.45920000000115L 80.20448225635593 117.3161199999995"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 80.20448225635593 117.8161199999995L 82.12063029661017 117.8161199999995L 82.12063029661017 117.67352000000028L 82.12063029661017 117.8161199999995L 84.0367783368644 117.8161199999995L 84.0367783368644 141.45920000000115L 82.12063029661017 141.45920000000115L 82.12063029661017 142.59999999999854L 82.12063029661017 141.45920000000115L 80.20448225635593 141.45920000000115L 80.20448225635593 117.3161199999995"
                                                            pathFrom="M 80.20448225635593 141.45920000000115M 80.20448225635593 141.45920000000115"
                                                            cy="117.8161199999995" cx="83.5367783368644" j="15" val="6610.4"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4407"
                                                            d="M 85.67919094279661 128.62519999999859L 87.59533898305085 128.62519999999859L 87.59533898305085 106.15144000000146L 87.59533898305085 128.62519999999859L 89.51148702330508 128.62519999999859L 89.51148702330508 139.7479999999996L 87.59533898305085 139.7479999999996L 87.59533898305085 141.45920000000115L 87.59533898305085 139.7479999999996L 85.67919094279661 139.7479999999996L 85.67919094279661 128.12519999999859"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 85.67919094279661 128.62519999999859L 87.59533898305085 128.62519999999859L 87.59533898305085 106.15144000000146L 87.59533898305085 128.62519999999859L 89.51148702330508 128.62519999999859L 89.51148702330508 139.7479999999996L 87.59533898305085 139.7479999999996L 87.59533898305085 141.45920000000115L 87.59533898305085 139.7479999999996L 85.67919094279661 139.7479999999996L 85.67919094279661 128.12519999999859"
                                                            pathFrom="M 85.67919094279661 139.7479999999996M 85.67919094279661 139.7479999999996"
                                                            cy="128.62519999999859" cx="89.01148702330508" j="16"
                                                            val="6614.9" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4408"
                                                            d="M 91.15389962923729 104.240600000001L 93.07004766949153 104.240600000001L 93.07004766949153 96.39760000000024L 93.07004766949153 104.240600000001L 94.98619570974576 104.240600000001L 94.98619570974576 128.62519999999859L 93.07004766949153 128.62519999999859L 93.07004766949153 133.10283999999956L 93.07004766949153 128.62519999999859L 91.15389962923729 128.62519999999859L 91.15389962923729 103.740600000001"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 91.15389962923729 104.240600000001L 93.07004766949153 104.240600000001L 93.07004766949153 96.39760000000024L 93.07004766949153 104.240600000001L 94.98619570974576 104.240600000001L 94.98619570974576 128.62519999999859L 93.07004766949153 128.62519999999859L 93.07004766949153 133.10283999999956L 93.07004766949153 128.62519999999859L 91.15389962923729 128.62519999999859L 91.15389962923729 103.740600000001"
                                                            pathFrom="M 91.15389962923729 128.62519999999859M 91.15389962923729 128.62519999999859"
                                                            cy="104.240600000001" cx="94.48619570974576" j="17"
                                                            val="6623.45" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4409"
                                                            d="M 96.62860831567797 104.15504000000146L 98.54475635593221 104.15504000000146L 98.54475635593221 94.11599999999817L 98.54475635593221 104.15504000000146L 100.46090439618644 104.15504000000146L 100.46090439618644 113.08179999999993L 98.54475635593221 113.08179999999993L 98.54475635593221 118.7002399999983L 98.54475635593221 113.08179999999993L 96.62860831567797 113.08179999999993L 96.62860831567797 103.65504000000146"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 96.62860831567797 104.15504000000146L 98.54475635593221 104.15504000000146L 98.54475635593221 94.11599999999817L 98.54475635593221 104.15504000000146L 100.46090439618644 104.15504000000146L 100.46090439618644 113.08179999999993L 98.54475635593221 113.08179999999993L 98.54475635593221 118.7002399999983L 98.54475635593221 113.08179999999993L 96.62860831567797 113.08179999999993L 96.62860831567797 103.65504000000146"
                                                            pathFrom="M 96.62860831567797 113.08179999999993M 96.62860831567797 113.08179999999993"
                                                            cy="104.15504000000146" cx="99.96090439618644" j="18"
                                                            val="6620.35" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4410"
                                                            d="M 102.10331700211864 115.70564000000013L 104.01946504237289 115.70564000000013L 104.01946504237289 113.08179999999993L 104.01946504237289 115.70564000000013L 105.93561308262711 115.70564000000013L 105.93561308262711 126.82844000000114L 104.01946504237289 126.82844000000114L 104.01946504237289 142.45739999999932L 104.01946504237289 126.82844000000114L 102.10331700211864 126.82844000000114L 102.10331700211864 115.20564000000013"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 102.10331700211864 115.70564000000013L 104.01946504237289 115.70564000000013L 104.01946504237289 113.08179999999993L 104.01946504237289 115.70564000000013L 105.93561308262711 115.70564000000013L 105.93561308262711 126.82844000000114L 104.01946504237289 126.82844000000114L 104.01946504237289 142.45739999999932L 104.01946504237289 126.82844000000114L 102.10331700211864 126.82844000000114L 102.10331700211864 115.20564000000013"
                                                            pathFrom="M 102.10331700211864 126.82844000000114M 102.10331700211864 126.82844000000114"
                                                            cy="115.70564000000013" cx="105.43561308262711" j="19"
                                                            val="6615.53" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4411"
                                                            d="M 107.57802568855932 126.82844000000114L 109.49417372881356 126.82844000000114L 109.49417372881356 119.98363999999856L 109.49417372881356 126.82844000000114L 111.41032176906779 126.82844000000114L 111.41032176906779 127.79811999999947L 109.49417372881356 127.79811999999947L 109.49417372881356 142.59999999999854L 109.49417372881356 127.79811999999947L 107.57802568855932 127.79811999999947L 107.57802568855932 126.32844000000114"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 107.57802568855932 126.82844000000114L 109.49417372881356 126.82844000000114L 109.49417372881356 119.98363999999856L 109.49417372881356 126.82844000000114L 111.41032176906779 126.82844000000114L 111.41032176906779 127.79811999999947L 109.49417372881356 127.79811999999947L 109.49417372881356 142.59999999999854L 109.49417372881356 127.79811999999947L 107.57802568855932 127.79811999999947L 107.57802568855932 126.32844000000114"
                                                            pathFrom="M 107.57802568855932 127.79811999999947M 107.57802568855932 127.79811999999947"
                                                            cy="126.82844000000114" cx="110.91032176906779" j="20"
                                                            val="6615.19" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4412"
                                                            d="M 113.052734375 114.07999999999811L 114.96888241525424 114.07999999999811L 114.96888241525424 109.5167999999976L 114.96888241525424 114.07999999999811L 116.88503045550847 114.07999999999811L 116.88503045550847 127.79811999999947L 114.96888241525424 127.79811999999947L 114.96888241525424 147.73359999999957L 114.96888241525424 127.79811999999947L 113.052734375 127.79811999999947L 113.052734375 113.57999999999811"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 113.052734375 114.07999999999811L 114.96888241525424 114.07999999999811L 114.96888241525424 109.5167999999976L 114.96888241525424 114.07999999999811L 116.88503045550847 114.07999999999811L 116.88503045550847 127.79811999999947L 114.96888241525424 127.79811999999947L 114.96888241525424 147.73359999999957L 114.96888241525424 127.79811999999947L 113.052734375 127.79811999999947L 113.052734375 113.57999999999811"
                                                            pathFrom="M 113.052734375 127.79811999999947M 113.052734375 127.79811999999947"
                                                            cy="114.07999999999811" cx="116.38503045550847" j="21"
                                                            val="6620" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4413"
                                                            d="M 118.52744306144068 114.07999999999811L 120.44359110169492 114.07999999999811L 120.44359110169492 99.33515999999872L 120.44359110169492 114.07999999999811L 122.35973914194915 114.07999999999811L 122.35973914194915 115.39191999999821L 120.44359110169492 115.39191999999821L 120.44359110169492 130.76420000000144L 120.44359110169492 115.39191999999821L 118.52744306144068 115.39191999999821L 118.52744306144068 113.57999999999811"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 118.52744306144068 114.07999999999811L 120.44359110169492 114.07999999999811L 120.44359110169492 99.33515999999872L 120.44359110169492 114.07999999999811L 122.35973914194915 114.07999999999811L 122.35973914194915 115.39191999999821L 120.44359110169492 115.39191999999821L 120.44359110169492 130.76420000000144L 120.44359110169492 115.39191999999821L 118.52744306144068 115.39191999999821L 118.52744306144068 113.57999999999811"
                                                            pathFrom="M 118.52744306144068 115.39191999999821M 118.52744306144068 115.39191999999821"
                                                            cy="114.07999999999811" cx="121.85973914194915" j="22"
                                                            val="6620" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4414"
                                                            d="M 124.00215174788136 100.9322800000009L 125.9182997881356 100.9322800000009L 125.9182997881356 73.72420000000056L 125.9182997881356 100.9322800000009L 127.83444782838983 100.9322800000009L 127.83444782838983 113.13883999999962L 125.9182997881356 113.13883999999962L 125.9182997881356 121.95151999999871L 125.9182997881356 113.13883999999962L 124.00215174788136 113.13883999999962L 124.00215174788136 100.4322800000009"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 124.00215174788136 100.9322800000009L 125.9182997881356 100.9322800000009L 125.9182997881356 73.72420000000056L 125.9182997881356 100.9322800000009L 127.83444782838983 100.9322800000009L 127.83444782838983 113.13883999999962L 125.9182997881356 113.13883999999962L 125.9182997881356 121.95151999999871L 125.9182997881356 113.13883999999962L 124.00215174788136 113.13883999999962L 124.00215174788136 100.4322800000009"
                                                            pathFrom="M 124.00215174788136 113.13883999999962M 124.00215174788136 113.13883999999962"
                                                            cy="100.9322800000009" cx="127.33444782838983" j="23"
                                                            val="6624.61" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4415"
                                                            d="M 129.47686043432205 97.11059999999998L 131.39300847457628 97.11059999999998L 131.39300847457628 96.96800000000076L 131.39300847457628 97.11059999999998L 133.30915651483053 97.11059999999998L 133.30915651483053 120.98184000000037L 131.39300847457628 120.98184000000037L 131.39300847457628 137.86567999999897L 131.39300847457628 120.98184000000037L 129.47686043432205 120.98184000000037L 129.47686043432205 96.61059999999998"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 129.47686043432205 97.11059999999998L 131.39300847457628 97.11059999999998L 131.39300847457628 96.96800000000076L 131.39300847457628 97.11059999999998L 133.30915651483053 97.11059999999998L 133.30915651483053 120.98184000000037L 131.39300847457628 120.98184000000037L 131.39300847457628 137.86567999999897L 131.39300847457628 120.98184000000037L 129.47686043432205 120.98184000000037L 129.47686043432205 96.61059999999998"
                                                            pathFrom="M 129.47686043432205 120.98184000000037M 129.47686043432205 120.98184000000037"
                                                            cy="97.11059999999998" cx="132.80915651483053" j="24"
                                                            val="6617.58" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4416"
                                                            d="M 134.95156912076274 116.9320000000007L 136.86771716101697 116.9320000000007L 136.86771716101697 97.05355999999665L 136.86771716101697 116.9320000000007L 138.78386520127123 116.9320000000007L 138.78386520127123 174.3712799999994L 136.86771716101697 174.3712799999994L 136.86771716101697 184.60995999999795L 136.86771716101697 174.3712799999994L 134.95156912076274 174.3712799999994L 134.95156912076274 116.4320000000007"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 134.95156912076274 116.9320000000007L 136.86771716101697 116.9320000000007L 136.86771716101697 97.05355999999665L 136.86771716101697 116.9320000000007L 138.78386520127123 116.9320000000007L 138.78386520127123 174.3712799999994L 136.86771716101697 174.3712799999994L 136.86771716101697 184.60995999999795L 136.86771716101697 174.3712799999994L 134.95156912076274 174.3712799999994L 134.95156912076274 116.4320000000007"
                                                            pathFrom="M 134.95156912076274 174.3712799999994M 134.95156912076274 174.3712799999994"
                                                            cy="116.9320000000007" cx="138.28386520127123" j="25"
                                                            val="6598.86" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4417"
                                                            d="M 140.4262778072034 174.3712799999994L 142.34242584745763 174.3712799999994L 142.34242584745763 174.3142399999997L 142.34242584745763 174.3712799999994L 144.2585738877119 174.3712799999994L 144.2585738877119 207.73967999999877L 142.34242584745763 207.73967999999877L 142.34242584745763 256.6800000000003L 142.34242584745763 207.73967999999877L 140.4262778072034 207.73967999999877L 140.4262778072034 173.8712799999994"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 140.4262778072034 174.3712799999994L 142.34242584745763 174.3712799999994L 142.34242584745763 174.3142399999997L 142.34242584745763 174.3712799999994L 144.2585738877119 174.3712799999994L 144.2585738877119 207.73967999999877L 142.34242584745763 207.73967999999877L 142.34242584745763 256.6800000000003L 142.34242584745763 207.73967999999877L 140.4262778072034 207.73967999999877L 140.4262778072034 173.8712799999994"
                                                            pathFrom="M 140.4262778072034 207.73967999999877M 140.4262778072034 207.73967999999877"
                                                            cy="174.3712799999994" cx="143.7585738877119" j="26"
                                                            val="6587.16" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4418"
                                                            d="M 145.9009864936441 189.94320000000153L 147.81713453389833 189.94320000000153L 147.81713453389833 171.11999999999898L 147.81713453389833 189.94320000000153L 149.73328257415258 189.94320000000153L 149.73328257415258 202.89127999999982L 147.81713453389833 202.89127999999982L 147.81713453389833 228.15999999999985L 147.81713453389833 202.89127999999982L 145.9009864936441 202.89127999999982L 145.9009864936441 189.44320000000153"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 145.9009864936441 189.94320000000153L 147.81713453389833 189.94320000000153L 147.81713453389833 171.11999999999898L 147.81713453389833 189.94320000000153L 149.73328257415258 189.94320000000153L 149.73328257415258 202.89127999999982L 147.81713453389833 202.89127999999982L 147.81713453389833 228.15999999999985L 147.81713453389833 202.89127999999982L 145.9009864936441 202.89127999999982L 145.9009864936441 189.44320000000153"
                                                            pathFrom="M 145.9009864936441 202.89127999999982M 145.9009864936441 202.89127999999982"
                                                            cy="189.94320000000153" cx="149.23328257415258" j="27"
                                                            val="6593.4" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4419"
                                                            d="M 151.37569518008476 188.26051999999981L 153.291843220339 188.26051999999981L 153.291843220339 174.28571999999986L 153.291843220339 188.26051999999981L 155.20799126059325 188.26051999999981L 155.20799126059325 205.885879999998L 153.291843220339 205.885879999998L 153.291843220339 213.89999999999782L 153.291843220339 205.885879999998L 151.37569518008476 205.885879999998L 151.37569518008476 187.76051999999981"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 151.37569518008476 188.26051999999981L 153.291843220339 188.26051999999981L 153.291843220339 174.28571999999986L 153.291843220339 188.26051999999981L 155.20799126059325 188.26051999999981L 155.20799126059325 205.885879999998L 153.291843220339 205.885879999998L 153.291843220339 213.89999999999782L 153.291843220339 205.885879999998L 151.37569518008476 205.885879999998L 151.37569518008476 187.76051999999981"
                                                            pathFrom="M 151.37569518008476 205.885879999998M 151.37569518008476 205.885879999998"
                                                            cy="188.26051999999981" cx="154.70799126059325" j="28"
                                                            val="6587.81" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4420"
                                                            d="M 156.85040386652545 205.885879999998L 158.76655190677968 205.885879999998L 158.76655190677968 191.854040000002L 158.76655190677968 205.885879999998L 160.68269994703394 205.885879999998L 160.68269994703394 233.86399999999776L 158.76655190677968 233.86399999999776L 158.76655190677968 264.83671999999933L 158.76655190677968 233.86399999999776L 156.85040386652545 233.86399999999776L 156.85040386652545 205.385879999998"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 156.85040386652545 205.885879999998L 158.76655190677968 205.885879999998L 158.76655190677968 191.854040000002L 158.76655190677968 205.885879999998L 160.68269994703394 205.885879999998L 160.68269994703394 233.86399999999776L 158.76655190677968 233.86399999999776L 158.76655190677968 264.83671999999933L 158.76655190677968 233.86399999999776L 156.85040386652545 233.86399999999776L 156.85040386652545 205.385879999998"
                                                            pathFrom="M 156.85040386652545 233.86399999999776M 156.85040386652545 233.86399999999776"
                                                            cy="205.885879999998" cx="160.18269994703394" j="29" val="6578"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4421"
                                                            d="M 162.32511255296612 231.0119999999988L 164.24126059322035 231.0119999999988L 164.24126059322035 223.25455999999758L 164.24126059322035 231.0119999999988L 166.1574086334746 231.0119999999988L 166.1574086334746 232.86579999999958L 164.24126059322035 232.86579999999958L 164.24126059322035 264.1237199999996L 164.24126059322035 232.86579999999958L 162.32511255296612 232.86579999999958L 162.32511255296612 230.5119999999988"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 162.32511255296612 231.0119999999988L 164.24126059322035 231.0119999999988L 164.24126059322035 223.25455999999758L 164.24126059322035 231.0119999999988L 166.1574086334746 231.0119999999988L 166.1574086334746 232.86579999999958L 164.24126059322035 232.86579999999958L 164.24126059322035 264.1237199999996L 164.24126059322035 232.86579999999958L 162.32511255296612 232.86579999999958L 162.32511255296612 230.5119999999988"
                                                            pathFrom="M 162.32511255296612 232.86579999999958M 162.32511255296612 232.86579999999958"
                                                            cy="231.0119999999988" cx="165.6574086334746" j="30" val="6579"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4422"
                                                            d="M 167.7998212394068 229.92823999999746L 169.71596927966104 229.92823999999746L 169.71596927966104 225.53615999999965L 169.71596927966104 229.92823999999746L 171.6321173199153 229.92823999999746L 171.6321173199153 239.68207999999868L 169.71596927966104 239.68207999999868L 169.71596927966104 265.8919599999972L 169.71596927966104 239.68207999999868L 167.7998212394068 239.68207999999868L 167.7998212394068 229.42823999999746"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 167.7998212394068 229.92823999999746L 169.71596927966104 229.92823999999746L 169.71596927966104 225.53615999999965L 169.71596927966104 229.92823999999746L 171.6321173199153 229.92823999999746L 171.6321173199153 239.68207999999868L 169.71596927966104 239.68207999999868L 169.71596927966104 265.8919599999972L 169.71596927966104 239.68207999999868L 167.7998212394068 239.68207999999868L 167.7998212394068 229.42823999999746"
                                                            pathFrom="M 167.7998212394068 239.68207999999868M 167.7998212394068 239.68207999999868"
                                                            cy="229.92823999999746" cx="171.1321173199153" j="31"
                                                            val="6575.96" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4423"
                                                            d="M 173.27452992584747 202.72016000000076L 175.1906779661017 202.72016000000076L 175.1906779661017 202.49199999999837L 175.1906779661017 202.72016000000076L 177.10682600635596 202.72016000000076L 177.10682600635596 239.68207999999868L 175.1906779661017 239.68207999999868L 175.1906779661017 251.6319599999988L 175.1906779661017 239.68207999999868L 173.27452992584747 239.68207999999868L 173.27452992584747 202.22016000000076"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 173.27452992584747 202.72016000000076L 175.1906779661017 202.72016000000076L 175.1906779661017 202.49199999999837L 175.1906779661017 202.72016000000076L 177.10682600635596 202.72016000000076L 177.10682600635596 239.68207999999868L 175.1906779661017 239.68207999999868L 175.1906779661017 251.6319599999988L 175.1906779661017 239.68207999999868L 173.27452992584747 239.68207999999868L 173.27452992584747 202.22016000000076"
                                                            pathFrom="M 173.27452992584747 239.68207999999868M 173.27452992584747 239.68207999999868"
                                                            cy="202.72016000000076" cx="176.60682600635596" j="32"
                                                            val="6588.92" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4424"
                                                            d="M 178.74923861228817 201.86455999999816L 180.6653866525424 201.86455999999816L 180.6653866525424 188.23199999999997L 180.6653866525424 201.86455999999816L 182.58153469279665 201.86455999999816L 182.58153469279665 202.72016000000076L 180.6653866525424 202.72016000000076L 180.6653866525424 235.14739999999802L 180.6653866525424 202.72016000000076L 178.74923861228817 202.72016000000076L 178.74923861228817 201.36455999999816"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 178.74923861228817 201.86455999999816L 180.6653866525424 201.86455999999816L 180.6653866525424 188.23199999999997L 180.6653866525424 201.86455999999816L 182.58153469279665 201.86455999999816L 182.58153469279665 202.72016000000076L 180.6653866525424 202.72016000000076L 180.6653866525424 235.14739999999802L 180.6653866525424 202.72016000000076L 178.74923861228817 202.72016000000076L 178.74923861228817 201.36455999999816"
                                                            pathFrom="M 178.74923861228817 202.72016000000076M 178.74923861228817 202.72016000000076"
                                                            cy="201.86455999999816" cx="182.08153469279665" j="33"
                                                            val="6589.22" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4425"
                                                            d="M 184.22394729872883 182.29983999999968L 186.14009533898306 182.29983999999968L 186.14009533898306 174.28571999999986L 186.14009533898306 182.29983999999968L 188.05624337923732 182.29983999999968L 188.05624337923732 201.6363999999994L 186.14009533898306 201.6363999999994L 186.14009533898306 202.20679999999993L 186.14009533898306 201.6363999999994L 184.22394729872883 201.6363999999994L 184.22394729872883 181.79983999999968"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 184.22394729872883 182.29983999999968L 186.14009533898306 182.29983999999968L 186.14009533898306 174.28571999999986L 186.14009533898306 182.29983999999968L 188.05624337923732 182.29983999999968L 188.05624337923732 201.6363999999994L 186.14009533898306 201.6363999999994L 186.14009533898306 202.20679999999993L 186.14009533898306 201.6363999999994L 184.22394729872883 201.6363999999994L 184.22394729872883 181.79983999999968"
                                                            pathFrom="M 184.22394729872883 201.6363999999994M 184.22394729872883 201.6363999999994"
                                                            cy="182.29983999999968" cx="187.55624337923732" j="34"
                                                            val="6596.08" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4426"
                                                            d="M 189.69865598516952 178.25L 191.61480402542375 178.25L 191.61480402542375 171.11999999999898L 191.61480402542375 178.25L 193.530952065678 178.25L 193.530952065678 181.8149999999987L 191.61480402542375 181.8149999999987L 191.61480402542375 204.23171999999977L 191.61480402542375 181.8149999999987L 189.69865598516952 181.8149999999987L 189.69865598516952 177.75"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 189.69865598516952 178.25L 191.61480402542375 178.25L 191.61480402542375 171.11999999999898L 191.61480402542375 178.25L 193.530952065678 178.25L 193.530952065678 181.8149999999987L 191.61480402542375 181.8149999999987L 191.61480402542375 204.23171999999977L 191.61480402542375 181.8149999999987L 189.69865598516952 181.8149999999987L 189.69865598516952 177.75"
                                                            pathFrom="M 189.69865598516952 181.8149999999987M 189.69865598516952 181.8149999999987"
                                                            cy="178.25" cx="193.030952065678" j="35" val="6596.25"
                                                            barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4427"
                                                            d="M 195.1733646716102 176.738440000001L 197.08951271186442 176.738440000001L 197.08951271186442 171.11999999999898L 197.08951271186442 176.738440000001L 199.00566075211867 176.738440000001L 199.00566075211867 182.61355999999796L 197.08951271186442 182.61355999999796L 197.08951271186442 203.26204000000143L 197.08951271186442 182.61355999999796L 195.1733646716102 182.61355999999796L 195.1733646716102 176.238440000001"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 195.1733646716102 176.738440000001L 197.08951271186442 176.738440000001L 197.08951271186442 171.11999999999898L 197.08951271186442 176.738440000001L 199.00566075211867 176.738440000001L 199.00566075211867 182.61355999999796L 197.08951271186442 182.61355999999796L 197.08951271186442 203.26204000000143L 197.08951271186442 182.61355999999796L 195.1733646716102 182.61355999999796L 195.1733646716102 176.238440000001"
                                                            pathFrom="M 195.1733646716102 182.61355999999796M 195.1733646716102 182.61355999999796"
                                                            cy="176.738440000001" cx="198.50566075211867" j="36"
                                                            val="6595.97" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4428"
                                                            d="M 200.64807335805088 165.41599999999744L 202.5642213983051 165.41599999999744L 202.5642213983051 165.3874799999976L 202.5642213983051 165.41599999999744L 204.48036943855936 165.41599999999744L 204.48036943855936 182.61355999999796L 202.5642213983051 182.61355999999796L 202.5642213983051 204.85915999999997L 202.5642213983051 182.61355999999796L 200.64807335805088 182.61355999999796L 200.64807335805088 164.91599999999744"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 200.64807335805088 165.41599999999744L 202.5642213983051 165.41599999999744L 202.5642213983051 165.3874799999976L 202.5642213983051 165.41599999999744L 204.48036943855936 165.41599999999744L 204.48036943855936 182.61355999999796L 202.5642213983051 182.61355999999796L 202.5642213983051 204.85915999999997L 202.5642213983051 182.61355999999796L 200.64807335805088 182.61355999999796L 200.64807335805088 164.91599999999744"
                                                            pathFrom="M 200.64807335805088 182.61355999999796M 200.64807335805088 182.61355999999796"
                                                            cy="165.41599999999744" cx="203.98036943855936" j="37"
                                                            val="6602" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4429"
                                                            d="M 206.12278204449154 165.41599999999744L 208.03893008474577 165.41599999999744L 208.03893008474577 151.15599999999904L 208.03893008474577 165.41599999999744L 209.95507812500003 165.41599999999744L 209.95507812500003 171.2625999999982L 208.03893008474577 171.2625999999982L 208.03893008474577 181.0734799999991L 208.03893008474577 171.2625999999982L 206.12278204449154 171.2625999999982L 206.12278204449154 164.91599999999744"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 206.12278204449154 165.41599999999744L 208.03893008474577 165.41599999999744L 208.03893008474577 151.15599999999904L 208.03893008474577 165.41599999999744L 209.95507812500003 165.41599999999744L 209.95507812500003 171.2625999999982L 208.03893008474577 171.2625999999982L 208.03893008474577 181.0734799999991L 208.03893008474577 171.2625999999982L 206.12278204449154 171.2625999999982L 206.12278204449154 164.91599999999744"
                                                            pathFrom="M 206.12278204449154 171.2625999999982M 206.12278204449154 171.2625999999982"
                                                            cy="165.41599999999744" cx="209.45507812500003" j="38"
                                                            val="6599.95" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4430"
                                                            d="M 211.59749073093224 169.3232399999979L 213.51363877118646 169.3232399999979L 213.51363877118646 167.66907999999967L 213.51363877118646 169.3232399999979L 215.42978681144072 169.3232399999979L 215.42978681144072 196.73095999999714L 213.51363877118646 196.73095999999714L 213.51363877118646 198.52771999999823L 213.51363877118646 196.73095999999714L 211.59749073093224 196.73095999999714L 211.59749073093224 168.8232399999979"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 211.59749073093224 169.3232399999979L 213.51363877118646 169.3232399999979L 213.51363877118646 167.66907999999967L 213.51363877118646 169.3232399999979L 215.42978681144072 169.3232399999979L 215.42978681144072 196.73095999999714L 213.51363877118646 196.73095999999714L 213.51363877118646 198.52771999999823L 213.51363877118646 196.73095999999714L 211.59749073093224 196.73095999999714L 211.59749073093224 168.8232399999979"
                                                            pathFrom="M 211.59749073093224 196.73095999999714M 211.59749073093224 196.73095999999714"
                                                            cy="169.3232399999979" cx="214.92978681144072" j="39"
                                                            val="6591.02" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4431"
                                                            d="M 217.0721994173729 196.73095999999714L 218.98834745762713 196.73095999999714L 218.98834745762713 162.33583999999973L 218.98834745762713 196.73095999999714L 220.90449549788138 196.73095999999714L 220.90449549788138 196.78800000000047L 218.98834745762713 196.78800000000047L 218.98834745762713 196.78800000000047L 218.98834745762713 196.78800000000047L 217.0721994173729 196.78800000000047L 217.0721994173729 196.23095999999714"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 217.0721994173729 196.73095999999714L 218.98834745762713 196.73095999999714L 218.98834745762713 162.33583999999973L 218.98834745762713 196.73095999999714L 220.90449549788138 196.73095999999714L 220.90449549788138 196.78800000000047L 218.98834745762713 196.78800000000047L 218.98834745762713 196.78800000000047L 218.98834745762713 196.78800000000047L 217.0721994173729 196.78800000000047L 217.0721994173729 196.23095999999714"
                                                            pathFrom="M 217.0721994173729 196.78800000000047M 217.0721994173729 196.78800000000047"
                                                            cy="196.73095999999714" cx="220.40449549788138" j="40"
                                                            val="6591" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4432"
                                                            d="M 222.5469081038136 193.93599999999788L 224.46305614406782 193.93599999999788L 224.46305614406782 167.35536000000138L 224.46305614406782 193.93599999999788L 226.37920418432208 193.93599999999788L 226.37920418432208 196.78800000000047L 224.46305614406782 196.78800000000047L 224.46305614406782 213.89999999999782L 224.46305614406782 196.78800000000047L 222.5469081038136 196.78800000000047L 222.5469081038136 193.43599999999788"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 222.5469081038136 193.93599999999788L 224.46305614406782 193.93599999999788L 224.46305614406782 167.35536000000138L 224.46305614406782 193.93599999999788L 226.37920418432208 193.93599999999788L 226.37920418432208 196.78800000000047L 224.46305614406782 196.78800000000047L 224.46305614406782 213.89999999999782L 224.46305614406782 196.78800000000047L 222.5469081038136 196.78800000000047L 222.5469081038136 193.43599999999788"
                                                            pathFrom="M 222.5469081038136 196.78800000000047M 222.5469081038136 196.78800000000047"
                                                            cy="193.93599999999788" cx="225.87920418432208" j="41"
                                                            val="6592" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4433"
                                                            d="M 228.02161679025426 190.1143200000006L 229.93776483050848 190.1143200000006L 229.93776483050848 182.49947999999858L 229.93776483050848 190.1143200000006L 231.85391287076274 190.1143200000006L 231.85391287076274 190.7132399999973L 229.93776483050848 190.7132399999973L 229.93776483050848 199.63999999999942L 229.93776483050848 190.7132399999973L 228.02161679025426 190.7132399999973L 228.02161679025426 189.6143200000006"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 228.02161679025426 190.1143200000006L 229.93776483050848 190.1143200000006L 229.93776483050848 182.49947999999858L 229.93776483050848 190.1143200000006L 231.85391287076274 190.1143200000006L 231.85391287076274 190.7132399999973L 229.93776483050848 190.7132399999973L 229.93776483050848 199.63999999999942L 229.93776483050848 190.7132399999973L 228.02161679025426 190.7132399999973L 228.02161679025426 189.6143200000006"
                                                            pathFrom="M 228.02161679025426 190.7132399999973M 228.02161679025426 190.7132399999973"
                                                            cy="190.1143200000006" cx="231.35391287076274" j="42"
                                                            val="6593.34" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4434"
                                                            d="M 233.49632547669495 188.63128000000142L 235.41247351694918 188.63128000000142L 235.41247351694918 157.54447999999684L 235.41247351694918 188.63128000000142L 237.32862155720343 188.63128000000142L 237.32862155720343 190.1143200000006L 235.41247351694918 190.1143200000006L 235.41247351694918 220.65923999999723L 235.41247351694918 190.1143200000006L 233.49632547669495 190.1143200000006L 233.49632547669495 188.13128000000142"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 233.49632547669495 188.63128000000142L 235.41247351694918 188.63128000000142L 235.41247351694918 157.54447999999684L 235.41247351694918 188.63128000000142L 237.32862155720343 188.63128000000142L 237.32862155720343 190.1143200000006L 235.41247351694918 190.1143200000006L 235.41247351694918 220.65923999999723L 235.41247351694918 190.1143200000006L 233.49632547669495 190.1143200000006L 233.49632547669495 188.13128000000142"
                                                            pathFrom="M 233.49632547669495 190.1143200000006M 233.49632547669495 190.1143200000006"
                                                            cy="188.63128000000142" cx="236.82862155720343" j="43"
                                                            val="6593.86" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4435"
                                                            d="M 238.9710341631356 171.09147999999914L 240.88718220338984 171.09147999999914L 240.88718220338984 158.91344000000026L 240.88718220338984 171.09147999999914L 242.8033302436441 171.09147999999914L 242.8033302436441 188.63128000000142L 240.88718220338984 188.63128000000142L 240.88718220338984 209.42236000000048L 240.88718220338984 188.63128000000142L 238.9710341631356 188.63128000000142L 238.9710341631356 170.59147999999914"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 238.9710341631356 171.09147999999914L 240.88718220338984 171.09147999999914L 240.88718220338984 158.91344000000026L 240.88718220338984 171.09147999999914L 242.8033302436441 171.09147999999914L 242.8033302436441 188.63128000000142L 240.88718220338984 188.63128000000142L 240.88718220338984 209.42236000000048L 240.88718220338984 188.63128000000142L 238.9710341631356 188.63128000000142L 238.9710341631356 170.59147999999914"
                                                            pathFrom="M 238.9710341631356 188.63128000000142M 238.9710341631356 188.63128000000142"
                                                            cy="171.09147999999914" cx="242.3033302436441" j="44"
                                                            val="6600.01" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4436"
                                                            d="M 244.4457428495763 165.9578799999981L 246.36189088983053 165.9578799999981L 246.36189088983053 161.96507999999812L 246.36189088983053 165.9578799999981L 248.2780389300848 165.9578799999981L 248.2780389300848 181.8149999999987L 246.36189088983053 181.8149999999987L 246.36189088983053 191.71143999999913L 246.36189088983053 181.8149999999987L 244.4457428495763 181.8149999999987L 244.4457428495763 165.4578799999981"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 244.4457428495763 165.9578799999981L 246.36189088983053 165.9578799999981L 246.36189088983053 161.96507999999812L 246.36189088983053 165.9578799999981L 248.2780389300848 165.9578799999981L 248.2780389300848 181.8149999999987L 246.36189088983053 181.8149999999987L 246.36189088983053 191.71143999999913L 246.36189088983053 181.8149999999987L 244.4457428495763 181.8149999999987L 244.4457428495763 165.4578799999981"
                                                            pathFrom="M 244.4457428495763 181.8149999999987M 244.4457428495763 181.8149999999987"
                                                            cy="165.9578799999981" cx="247.7780389300848" j="45"
                                                            val="6596.25" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4437"
                                                            d="M 249.92045153601697 162.59251999999833L 251.8365995762712 162.59251999999833L 251.8365995762712 159.14159999999902L 251.8365995762712 162.59251999999833L 253.75274761652545 162.59251999999833L 253.75274761652545 181.8149999999987L 251.8365995762712 181.8149999999987L 251.8365995762712 199.63999999999942L 251.8365995762712 181.8149999999987L 249.92045153601697 181.8149999999987L 249.92045153601697 162.09251999999833"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 249.92045153601697 162.59251999999833L 251.8365995762712 162.59251999999833L 251.8365995762712 159.14159999999902L 251.8365995762712 162.59251999999833L 253.75274761652545 162.59251999999833L 253.75274761652545 181.8149999999987L 251.8365995762712 181.8149999999987L 251.8365995762712 199.63999999999942L 251.8365995762712 181.8149999999987L 249.92045153601697 181.8149999999987L 249.92045153601697 162.09251999999833"
                                                            pathFrom="M 249.92045153601697 181.8149999999987M 249.92045153601697 181.8149999999987"
                                                            cy="162.59251999999833" cx="253.25274761652545" j="46"
                                                            val="6602.99" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4438"
                                                            d="M 255.39516022245763 162.59251999999833L 257.31130826271186 162.59251999999833L 257.31130826271186 154.007999999998L 257.31130826271186 162.59251999999833L 259.2274563029661 162.59251999999833L 259.2274563029661 205.885879999998L 257.31130826271186 205.885879999998L 257.31130826271186 213.9285200000013L 257.31130826271186 205.885879999998L 255.39516022245763 205.885879999998L 255.39516022245763 162.09251999999833"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 255.39516022245763 162.59251999999833L 257.31130826271186 162.59251999999833L 257.31130826271186 154.007999999998L 257.31130826271186 162.59251999999833L 259.2274563029661 162.59251999999833L 259.2274563029661 205.885879999998L 257.31130826271186 205.885879999998L 257.31130826271186 213.9285200000013L 257.31130826271186 205.885879999998L 255.39516022245763 205.885879999998L 255.39516022245763 162.09251999999833"
                                                            pathFrom="M 255.39516022245763 205.885879999998M 255.39516022245763 205.885879999998"
                                                            cy="162.59251999999833" cx="258.7274563029661" j="47"
                                                            val="6587.81" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4439"
                                                            d="M 260.8698689088983 194.0500800000009L 262.78601694915255 194.0500800000009L 262.78601694915255 185.37999999999738L 262.78601694915255 194.0500800000009L 264.70216498940675 194.0500800000009L 264.70216498940675 205.885879999998L 262.78601694915255 205.885879999998L 262.78601694915255 218.8339599999963L 262.78601694915255 205.885879999998L 260.8698689088983 205.885879999998L 260.8698689088983 193.5500800000009"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 260.8698689088983 194.0500800000009L 262.78601694915255 194.0500800000009L 262.78601694915255 185.37999999999738L 262.78601694915255 194.0500800000009L 264.70216498940675 194.0500800000009L 264.70216498940675 205.885879999998L 262.78601694915255 205.885879999998L 262.78601694915255 218.8339599999963L 262.78601694915255 205.885879999998L 260.8698689088983 205.885879999998L 260.8698689088983 193.5500800000009"
                                                            pathFrom="M 260.8698689088983 205.885879999998M 260.8698689088983 205.885879999998"
                                                            cy="194.0500800000009" cx="264.20216498940675" j="48"
                                                            val="6591.96" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4440"
                                                            d="M 266.344577595339 194.0215599999974L 268.26072563559325 194.0215599999974L 268.26072563559325 182.32835999999952L 268.26072563559325 194.0215599999974L 270.17687367584745 194.0215599999974L 270.17687367584745 204.23171999999977L 268.26072563559325 204.23171999999977L 268.26072563559325 213.89999999999782L 268.26072563559325 204.23171999999977L 266.344577595339 204.23171999999977L 266.344577595339 193.5215599999974"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 266.344577595339 194.0215599999974L 268.26072563559325 194.0215599999974L 268.26072563559325 182.32835999999952L 268.26072563559325 194.0215599999974L 270.17687367584745 194.0215599999974L 270.17687367584745 204.23171999999977L 268.26072563559325 204.23171999999977L 268.26072563559325 213.89999999999782L 268.26072563559325 204.23171999999977L 266.344577595339 204.23171999999977L 266.344577595339 193.5215599999974"
                                                            pathFrom="M 266.344577595339 204.23171999999977M 266.344577595339 204.23171999999977"
                                                            cy="194.0215599999974" cx="269.67687367584745" j="49"
                                                            val="6588.39" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4441"
                                                            d="M 271.8192862817797 187.4619599999969L 273.73543432203394 187.4619599999969L 273.73543432203394 176.22508000000016L 273.73543432203394 187.4619599999969L 275.65158236228814 187.4619599999969L 275.65158236228814 206.48479999999836L 273.73543432203394 206.48479999999836L 273.73543432203394 206.48479999999836L 273.73543432203394 206.48479999999836L 271.8192862817797 206.48479999999836L 271.8192862817797 186.9619599999969"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 271.8192862817797 187.4619599999969L 273.73543432203394 187.4619599999969L 273.73543432203394 176.22508000000016L 273.73543432203394 187.4619599999969L 275.65158236228814 187.4619599999969L 275.65158236228814 206.48479999999836L 273.73543432203394 206.48479999999836L 273.73543432203394 206.48479999999836L 273.73543432203394 206.48479999999836L 271.8192862817797 206.48479999999836L 271.8192862817797 186.9619599999969"
                                                            pathFrom="M 271.8192862817797 206.48479999999836M 271.8192862817797 206.48479999999836"
                                                            cy="187.4619599999969" cx="275.15158236228814" j="50"
                                                            val="6594.27" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4442"
                                                            d="M 277.2939949682203 180.95939999999973L 279.2101430084746 180.95939999999973L 279.2101430084746 168.26800000000003L 279.2101430084746 180.95939999999973L 281.1262910487288 180.95939999999973L 281.1262910487288 181.27312000000165L 279.2101430084746 181.27312000000165L 279.2101430084746 199.63999999999942L 279.2101430084746 181.27312000000165L 277.2939949682203 181.27312000000165L 277.2939949682203 180.45939999999973"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 277.2939949682203 180.95939999999973L 279.2101430084746 180.95939999999973L 279.2101430084746 168.26800000000003L 279.2101430084746 180.95939999999973L 281.1262910487288 180.95939999999973L 281.1262910487288 181.27312000000165L 279.2101430084746 181.27312000000165L 279.2101430084746 199.63999999999942L 279.2101430084746 181.27312000000165L 277.2939949682203 181.27312000000165L 277.2939949682203 180.45939999999973"
                                                            pathFrom="M 277.2939949682203 181.27312000000165M 277.2939949682203 181.27312000000165"
                                                            cy="180.95939999999973" cx="280.6262910487288" j="51"
                                                            val="6596.55" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4443"
                                                            d="M 282.768703654661 171.0629599999993L 284.68485169491527 171.0629599999993L 284.68485169491527 156.86000000000058L 284.68485169491527 171.0629599999993L 286.60099973516947 171.0629599999993L 286.60099973516947 174.22868000000017L 284.68485169491527 174.22868000000017L 284.68485169491527 180.78828000000067L 284.68485169491527 174.22868000000017L 282.768703654661 174.22868000000017L 282.768703654661 170.5629599999993"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 282.768703654661 171.0629599999993L 284.68485169491527 171.0629599999993L 284.68485169491527 156.86000000000058L 284.68485169491527 171.0629599999993L 286.60099973516947 171.0629599999993L 286.60099973516947 174.22868000000017L 284.68485169491527 174.22868000000017L 284.68485169491527 180.78828000000067L 284.68485169491527 174.22868000000017L 282.768703654661 174.22868000000017L 282.768703654661 170.5629599999993"
                                                            pathFrom="M 282.768703654661 174.22868000000017M 282.768703654661 174.22868000000017"
                                                            cy="171.0629599999993" cx="286.10099973516947" j="52"
                                                            val="6600.02" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4444"
                                                            d="M 288.2434123411017 169.55140000000029L 290.15956038135596 169.55140000000029L 290.15956038135596 156.86000000000058L 290.15956038135596 169.55140000000029L 292.07570842161016 169.55140000000029L 292.07570842161016 191.05547999999908L 290.15956038135596 191.05547999999908L 290.15956038135596 202.09271999999692L 290.15956038135596 191.05547999999908L 288.2434123411017 191.05547999999908L 288.2434123411017 169.05140000000029"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 288.2434123411017 169.55140000000029L 290.15956038135596 169.55140000000029L 290.15956038135596 156.86000000000058L 290.15956038135596 169.55140000000029L 292.07570842161016 169.55140000000029L 292.07570842161016 191.05547999999908L 290.15956038135596 191.05547999999908L 290.15956038135596 202.09271999999692L 290.15956038135596 191.05547999999908L 288.2434123411017 191.05547999999908L 288.2434123411017 169.05140000000029"
                                                            pathFrom="M 288.2434123411017 191.05547999999908M 288.2434123411017 191.05547999999908"
                                                            cy="169.55140000000029" cx="291.57570842161016" j="53"
                                                            val="6593.01" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4445"
                                                            d="M 293.7181210275424 162.39287999999942L 295.63426906779665 162.39287999999942L 295.63426906779665 156.86000000000058L 295.63426906779665 162.39287999999942L 297.55041710805085 162.39287999999942L 297.55041710805085 190.65620000000126L 295.63426906779665 190.65620000000126L 295.63426906779665 193.93599999999788L 295.63426906779665 190.65620000000126L 293.7181210275424 190.65620000000126L 293.7181210275424 161.89287999999942"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 293.7181210275424 162.39287999999942L 295.63426906779665 162.39287999999942L 295.63426906779665 156.86000000000058L 295.63426906779665 162.39287999999942L 297.55041710805085 162.39287999999942L 297.55041710805085 190.65620000000126L 295.63426906779665 190.65620000000126L 295.63426906779665 193.93599999999788L 295.63426906779665 190.65620000000126L 293.7181210275424 190.65620000000126L 293.7181210275424 161.89287999999942"
                                                            pathFrom="M 293.7181210275424 190.65620000000126M 293.7181210275424 190.65620000000126"
                                                            cy="162.39287999999942" cx="297.05041710805085" j="54"
                                                            val="6603.06" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4446"
                                                            d="M 299.19282971398303 160.02571999999782L 301.1089777542373 160.02571999999782L 301.1089777542373 158.28600000000006L 301.1089777542373 160.02571999999782L 303.0251257944915 160.02571999999782L 303.0251257944915 162.36435999999958L 301.1089777542373 162.36435999999958L 301.1089777542373 173.71531999999934L 301.1089777542373 162.36435999999958L 299.19282971398303 162.36435999999958L 299.19282971398303 159.52571999999782"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 299.19282971398303 160.02571999999782L 301.1089777542373 160.02571999999782L 301.1089777542373 158.28600000000006L 301.1089777542373 160.02571999999782L 303.0251257944915 160.02571999999782L 303.0251257944915 162.36435999999958L 301.1089777542373 162.36435999999958L 301.1089777542373 173.71531999999934L 301.1089777542373 162.36435999999958L 299.19282971398303 162.36435999999958L 299.19282971398303 159.52571999999782"
                                                            pathFrom="M 299.19282971398303 162.36435999999958M 299.19282971398303 162.36435999999958"
                                                            cy="160.02571999999782" cx="302.5251257944915" j="55"
                                                            val="6603.89" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4447"
                                                            d="M 304.6675384004237 158.45711999999912L 306.583686440678 158.45711999999912L 306.583686440678 158.45711999999912L 306.583686440678 158.45711999999912L 308.4998344809322 158.45711999999912L 308.4998344809322 161.137999999999L 306.583686440678 161.137999999999L 306.583686440678 171.11999999999898L 306.583686440678 161.137999999999L 304.6675384004237 161.137999999999L 304.6675384004237 157.95711999999912"
                                                            fill="rgba(239,64,60,1)" fill-opacity="1" stroke="#ef403c"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 304.6675384004237 158.45711999999912L 306.583686440678 158.45711999999912L 306.583686440678 158.45711999999912L 306.583686440678 158.45711999999912L 308.4998344809322 158.45711999999912L 308.4998344809322 161.137999999999L 306.583686440678 161.137999999999L 306.583686440678 171.11999999999898L 306.583686440678 161.137999999999L 304.6675384004237 161.137999999999L 304.6675384004237 157.95711999999912"
                                                            pathFrom="M 304.6675384004237 161.137999999999M 304.6675384004237 161.137999999999"
                                                            cy="158.45711999999912" cx="307.9998344809322" j="56"
                                                            val="6603.5" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4448"
                                                            d="M 310.1422470868644 160.111280000001L 312.0583951271187 160.111280000001L 312.0583951271187 159.74051999999938L 312.0583951271187 160.111280000001L 313.9745431673729 160.111280000001L 313.9745431673729 161.137999999999L 312.0583951271187 161.137999999999L 312.0583951271187 178.25L 312.0583951271187 161.137999999999L 310.1422470868644 161.137999999999L 310.1422470868644 159.611280000001"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 310.1422470868644 160.111280000001L 312.0583951271187 160.111280000001L 312.0583951271187 159.74051999999938L 312.0583951271187 160.111280000001L 313.9745431673729 160.111280000001L 313.9745431673729 161.137999999999L 312.0583951271187 161.137999999999L 312.0583951271187 178.25L 312.0583951271187 161.137999999999L 310.1422470868644 161.137999999999L 310.1422470868644 159.611280000001"
                                                            pathFrom="M 310.1422470868644 161.137999999999M 310.1422470868644 161.137999999999"
                                                            cy="160.111280000001" cx="313.4745431673729" j="57"
                                                            val="6603.86" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4449"
                                                            d="M 315.6169557733051 159.51236000000063L 317.53310381355936 159.51236000000063L 317.53310381355936 156.86000000000058L 317.53310381355936 159.51236000000063L 319.44925185381356 159.51236000000063L 319.44925185381356 160.1397999999972L 317.53310381355936 160.1397999999972L 317.53310381355936 171.11999999999898L 317.53310381355936 160.1397999999972L 315.6169557733051 160.1397999999972L 315.6169557733051 159.01236000000063"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 315.6169557733051 159.51236000000063L 317.53310381355936 159.51236000000063L 317.53310381355936 156.86000000000058L 317.53310381355936 159.51236000000063L 319.44925185381356 159.51236000000063L 319.44925185381356 160.1397999999972L 317.53310381355936 160.1397999999972L 317.53310381355936 171.11999999999898L 317.53310381355936 160.1397999999972L 315.6169557733051 160.1397999999972L 315.6169557733051 159.01236000000063"
                                                            pathFrom="M 315.6169557733051 160.1397999999972M 315.6169557733051 160.1397999999972"
                                                            cy="159.51236000000063" cx="318.94925185381356" j="58"
                                                            val="6604.07" barWidth="3.8322960805084745"></path>
                                                        <path id="SvgjsPath4450"
                                                            d="M 321.09166445974574 154.007999999998L 323.0078125 154.007999999998L 323.0078125 154.007999999998L 323.0078125 154.007999999998L 324.9239605402542 154.007999999998L 324.9239605402542 156.91704000000027L 323.0078125 156.91704000000027L 323.0078125 159.51236000000063L 323.0078125 156.91704000000027L 321.09166445974574 156.91704000000027L 321.09166445974574 153.507999999998"
                                                            fill="rgba(0,183,70,1)" fill-opacity="1" stroke="#00b746"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                            stroke-dasharray="0" class="apexcharts-candlestick-area"
                                                            index="0" clip-path="url(#gridRectMaskaoil7vu8i)"
                                                            pathTo="M 321.09166445974574 154.007999999998L 323.0078125 154.007999999998L 323.0078125 154.007999999998L 323.0078125 154.007999999998L 324.9239605402542 154.007999999998L 324.9239605402542 156.91704000000027L 323.0078125 156.91704000000027L 323.0078125 159.51236000000063L 323.0078125 156.91704000000027L 321.09166445974574 156.91704000000027L 321.09166445974574 153.507999999998"
                                                            pathFrom="M 321.09166445974574 156.91704000000027M 321.09166445974574 156.91704000000027"
                                                            cy="154.007999999998" cx="324.4239605402542" j="59" val="6606"
                                                            barWidth="3.8322960805084745"></path>
                                                    </g>
                                                    <g id="SvgjsG4390" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine4507" x1="0" y1="0" x2="323.0078125" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs">
                                                </line>
                                                <line id="SvgjsLine4508" x1="0" y1="0" x2="323.0078125" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG4509" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG4510" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG4511" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect4512" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect4513" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect4353" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG4475" class="apexcharts-yaxis" rel="0"
                                                transform="translate(40.9921875, 0)">
                                                <g id="SvgjsG4476" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText4477" font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4478">6660.00</tspan>
                                                    </text><text id="SvgjsText4479"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="88.53999999999999" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4480">6640.00</tspan>
                                                    </text><text id="SvgjsText4481"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="145.57999999999998" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4482">6620.00</tspan>
                                                    </text><text id="SvgjsText4483"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="202.61999999999998" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4484">6600.00</tspan>
                                                    </text><text id="SvgjsText4485"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="259.65999999999997" text-anchor="end" dominant-baseline="auto"
                                                        font-size="11px" font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4486">6580.00</tspan>
                                                    </text><text id="SvgjsText4487"
                                                        font-family="Helvetica, Arial, sans-serif" x="20" y="316.7"
                                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4488">6560.00</tspan>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG4349" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(27, 197, 189);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                            <div class="apexcharts-zoomin-icon" title="Zoom In"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="apexcharts-zoomout-icon" title="Zoom Out"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24"
                                                    viewBox="0 0 24 24" width="24">
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                    </path>
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                                </svg></div>
                                            <div class="apexcharts-pan-icon" title="Panning"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24"
                                                    viewBox="0 0 24 24" width="24">
                                                    <defs>
                                                        <path d="M0 0h24v24H0z" id="a"></path>
                                                    </defs>
                                                    <clipPath id="b">
                                                        <use overflow="visible" xlink:href="#a"></use>
                                                    </clipPath>
                                                    <path clip-path="url(#b)"
                                                        d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                                    </path>
                                                </svg></div>
                                            <div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000"
                                                    height="24" viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg></div>
                                            <div class="apexcharts-menu-icon" title="Menu"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                </svg></div>
                                            <div class="apexcharts-menu">
                                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download
                                                    SVG
                                                </div>
                                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download
                                                    PNG
                                                </div>
                                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download
                                                    CSV
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 463px; height: 418px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Donut Chart</h3>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="chart_11" class="d-flex justify-content-center" style="min-height: 241.7px;">
                                    <div id="apexchartsxiyfzkkg"
                                        class="apexcharts-canvas apexchartsxiyfzkkg apexcharts-theme-light"
                                        style="width: 380px; height: 241.7px;"><svg id="SvgjsSvg5417" width="380"
                                            height="241.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="380" height="241.7">
                                                <div class="apexcharts-legend apexcharts-align-center position-right"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="position: absolute; left: auto; top: 24px; right: 5px;">
                                                    <div class="apexcharts-legend-series" rel="1" seriesname="seriesx1"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="1"
                                                            data:collapsed="false"
                                                            style="background: rgb(105, 147, 255) !important; color: rgb(105, 147, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="series-1" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-1</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2" seriesname="seriesx2"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="2"
                                                            data:collapsed="false"
                                                            style="background: rgb(27, 197, 189) !important; color: rgb(27, 197, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="series-2" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-2</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="3" seriesname="seriesx3"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="3"
                                                            data:collapsed="false"
                                                            style="background: rgb(255, 168, 0) !important; color: rgb(255, 168, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="3" i="2"
                                                            data:default-text="series-3" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-3</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="4" seriesname="seriesx4"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="4"
                                                            data:collapsed="false"
                                                            style="background: rgb(246, 78, 96) !important; color: rgb(246, 78, 96); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="4" i="3"
                                                            data:default-text="series-4" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-4</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="5" seriesname="seriesx5"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="5"
                                                            data:collapsed="false"
                                                            style="background: rgb(137, 80, 252) !important; color: rgb(137, 80, 252); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="5" i="4"
                                                            data:default-text="series-5" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">series-5</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.position-bottom,
                                                    .apexcharts-legend.position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.position-right,
                                                    .apexcharts-legend.position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.position-top.apexcharts-align-left,
                                                    .apexcharts-legend.position-right,
                                                    .apexcharts-legend.position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.position-top .apexcharts-legend-series {
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
                                            <g id="SvgjsG5419" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 0)">
                                                <defs id="SvgjsDefs5418">
                                                    <clipPath id="gridRectMaskxiyfzkkg">
                                                        <rect id="SvgjsRect5421" width="245" height="263" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskxiyfzkkg">
                                                        <rect id="SvgjsRect5422" width="243" height="265" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter5431" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5432" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5432Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5433" in="SvgjsFeFlood5432Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5433Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5434" dx="1" dy="1"
                                                            result="SvgjsFeOffset5434Out" in="SvgjsFeComposite5433Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5435" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5435Out"
                                                            in="SvgjsFeOffset5434Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5436" result="SvgjsFeMerge5436Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5437"
                                                                in="SvgjsFeGaussianBlur5435Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5438"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5439" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5436Out" mode="normal"
                                                            result="SvgjsFeBlend5439Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5444" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5445" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5445Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5446" in="SvgjsFeFlood5445Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5446Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5447" dx="1" dy="1"
                                                            result="SvgjsFeOffset5447Out" in="SvgjsFeComposite5446Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5448" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5448Out"
                                                            in="SvgjsFeOffset5447Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5449" result="SvgjsFeMerge5449Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5450"
                                                                in="SvgjsFeGaussianBlur5448Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5451"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5452" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5449Out" mode="normal"
                                                            result="SvgjsFeBlend5452Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5457" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5458" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5458Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5459" in="SvgjsFeFlood5458Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5459Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5460" dx="1" dy="1"
                                                            result="SvgjsFeOffset5460Out" in="SvgjsFeComposite5459Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5461" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5461Out"
                                                            in="SvgjsFeOffset5460Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5462" result="SvgjsFeMerge5462Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5463"
                                                                in="SvgjsFeGaussianBlur5461Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5464"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5465" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5462Out" mode="normal"
                                                            result="SvgjsFeBlend5465Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5470" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5471" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5471Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5472" in="SvgjsFeFlood5471Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5472Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5473" dx="1" dy="1"
                                                            result="SvgjsFeOffset5473Out" in="SvgjsFeComposite5472Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5474" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5474Out"
                                                            in="SvgjsFeOffset5473Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5475" result="SvgjsFeMerge5475Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5476"
                                                                in="SvgjsFeGaussianBlur5474Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5477"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5478" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5475Out" mode="normal"
                                                            result="SvgjsFeBlend5478Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5483" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5484" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5484Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5485" in="SvgjsFeFlood5484Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5485Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5486" dx="1" dy="1"
                                                            result="SvgjsFeOffset5486Out" in="SvgjsFeComposite5485Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5487" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5487Out"
                                                            in="SvgjsFeOffset5486Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5488" result="SvgjsFeMerge5488Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5489"
                                                                in="SvgjsFeGaussianBlur5487Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5490"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5491" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5488Out" mode="normal"
                                                            result="SvgjsFeBlend5491Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <g id="SvgjsG5423" class="apexcharts-pie">
                                                    <g id="SvgjsG5424" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle5425" r="71.88048780487806" cx="119.5"
                                                            cy="119.5" fill="transparent"></circle>
                                                        <g id="SvgjsG5426" class="apexcharts-slices">
                                                            <g id="SvgjsG5427"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath5428"
                                                                    d="M 119.5 8.914634146341456 A 110.58536585365854 110.58536585365854 0 0 1 230.0115886466016 123.53880128154694 L 191.33253262029103 122.12522083300551 A 71.88048780487806 71.88048780487806 0 0 0 119.5 47.61951219512194 L 119.5 8.914634146341456 z"
                                                                    fill="rgba(105,147,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="92.09302325581395"
                                                                    data:startAngle="0" data:strokeWidth="2"
                                                                    data:value="44"
                                                                    data:pathOrig="M 119.5 8.914634146341456 A 110.58536585365854 110.58536585365854 0 0 1 230.0115886466016 123.53880128154694 L 191.33253262029103 122.12522083300551 A 71.88048780487806 71.88048780487806 0 0 0 119.5 47.61951219512194 L 119.5 8.914634146341456 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5440"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="seriesx2" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath5441"
                                                                    d="M 230.0115886466016 123.53880128154694 A 110.58536585365854 110.58536585365854 0 0 1 68.93569039357973 217.84822690325223 L 86.63319875582683 183.42634748711396 A 71.88048780487806 71.88048780487806 0 0 0 191.33253262029103 122.12522083300551 L 230.0115886466016 123.53880128154694 z"
                                                                    fill="rgba(27,197,189,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="115.11627906976746"
                                                                    data:startAngle="92.09302325581395"
                                                                    data:strokeWidth="2" data:value="55"
                                                                    data:pathOrig="M 230.0115886466016 123.53880128154694 A 110.58536585365854 110.58536585365854 0 0 1 68.93569039357973 217.84822690325223 L 86.63319875582683 183.42634748711396 A 71.88048780487806 71.88048780487806 0 0 0 191.33253262029103 122.12522083300551 L 230.0115886466016 123.53880128154694 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5453"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="seriesx3" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath5454"
                                                                    d="M 68.93569039357973 217.84822690325223 A 110.58536585365854 110.58536585365854 0 0 1 17.723180577986113 76.24954139750324 L 53.345067375690974 91.3872019083771 A 71.88048780487806 71.88048780487806 0 0 0 86.63319875582683 183.42634748711396 L 68.93569039357973 217.84822690325223 z"
                                                                    fill="rgba(255,168,0,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                    index="0" j="2" data:angle="85.81395348837208"
                                                                    data:startAngle="207.2093023255814"
                                                                    data:strokeWidth="2" data:value="41"
                                                                    data:pathOrig="M 68.93569039357973 217.84822690325223 A 110.58536585365854 110.58536585365854 0 0 1 17.723180577986113 76.24954139750324 L 53.345067375690974 91.3872019083771 A 71.88048780487806 71.88048780487806 0 0 0 86.63319875582683 183.42634748711396 L 68.93569039357973 217.84822690325223 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5466"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="seriesx4" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath5467"
                                                                    d="M 17.723180577986113 76.24954139750324 A 110.58536585365854 110.58536585365854 0 0 1 61.89162185921272 25.105095958650537 L 82.05455420848827 58.143312373122846 A 71.88048780487806 71.88048780487806 0 0 0 53.345067375690974 91.3872019083771 L 17.723180577986113 76.24954139750324 z"
                                                                    fill="rgba(246,78,96,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                    index="0" j="3" data:angle="35.58139534883719"
                                                                    data:startAngle="293.0232558139535"
                                                                    data:strokeWidth="2" data:value="17"
                                                                    data:pathOrig="M 17.723180577986113 76.24954139750324 A 110.58536585365854 110.58536585365854 0 0 1 61.89162185921272 25.105095958650537 L 82.05455420848827 58.143312373122846 A 71.88048780487806 71.88048780487806 0 0 0 53.345067375690974 91.3872019083771 L 17.723180577986113 76.24954139750324 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5479"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="seriesx5" rel="5" data:realIndex="4">
                                                                <path id="SvgjsPath5480"
                                                                    d="M 61.89162185921272 25.105095958650537 A 110.58536585365854 110.58536585365854 0 0 1 119.48069921271129 8.914635830652884 L 119.48745448826233 47.61951328992437 A 71.88048780487806 71.88048780487806 0 0 0 82.05455420848827 58.143312373122846 L 61.89162185921272 25.105095958650537 z"
                                                                    fill="rgba(137,80,252,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-4"
                                                                    index="0" j="4" data:angle="31.395348837209326"
                                                                    data:startAngle="328.6046511627907"
                                                                    data:strokeWidth="2" data:value="15"
                                                                    data:pathOrig="M 61.89162185921272 25.105095958650537 A 110.58536585365854 110.58536585365854 0 0 1 119.48069921271129 8.914635830652884 L 119.48745448826233 47.61951328992437 A 71.88048780487806 71.88048780487806 0 0 0 82.05455420848827 58.143312373122846 L 61.89162185921272 25.105095958650537 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5429" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5430"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="185.17890094549932" y="56.17757973335262"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5431)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">25.6%</text>
                                                            </g>
                                                            <g id="SvgjsG5442" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5443"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="165.59665633833887" y="198.23084028676251"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5444)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">32.0%</text>
                                                            </g>
                                                            <g id="SvgjsG5455" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5456"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="33.705942456078034" y="150.52944775507342"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5457)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">23.8%</text>
                                                            </g>
                                                            <g id="SvgjsG5468" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5469"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="50.451645452032295" y="59.86970843562165"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5470)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">9.9%</text>
                                                            </g>
                                                            <g id="SvgjsG5481" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5482"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="94.81589423606835" y="31.669812362322375"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5483)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">8.7%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine5492" x1="0" y1="0" x2="239" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine5493" x1="0" y1="0" x2="239" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG5420" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 147, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(27, 197, 189);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 168, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(246, 78, 96);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 5;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(137, 80, 252);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 463px; height: 295px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Pie Chart</h3>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="chart_12" class="d-flex justify-content-center" style="min-height: 243.7px;">
                                    <div id="apexcharts0u8zdbcx"
                                        class="apexcharts-canvas apexcharts0u8zdbcx apexcharts-theme-light"
                                        style="width: 380px; height: 243.7px;"><svg id="SvgjsSvg5494" width="380"
                                            height="243.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="380" height="243.70000000000002">
                                                <div class="apexcharts-legend apexcharts-align-center position-right"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="position: absolute; left: auto; top: 24px; right: 5px;">
                                                    <div class="apexcharts-legend-series" rel="1" seriesname="TeamxA"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="1"
                                                            data:collapsed="false"
                                                            style="background: rgb(105, 147, 255) !important; color: rgb(105, 147, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="Team%20A" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                            A</span></div>
                                                    <div class="apexcharts-legend-series" rel="2" seriesname="TeamxB"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="2"
                                                            data:collapsed="false"
                                                            style="background: rgb(27, 197, 189) !important; color: rgb(27, 197, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="Team%20B" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                            B</span></div>
                                                    <div class="apexcharts-legend-series" rel="3" seriesname="TeamxC"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="3"
                                                            data:collapsed="false"
                                                            style="background: rgb(255, 168, 0) !important; color: rgb(255, 168, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="3" i="2"
                                                            data:default-text="Team%20C" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                            C</span></div>
                                                    <div class="apexcharts-legend-series" rel="4" seriesname="TeamxD"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="4"
                                                            data:collapsed="false"
                                                            style="background: rgb(246, 78, 96) !important; color: rgb(246, 78, 96); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="4" i="3"
                                                            data:default-text="Team%20D" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                            D</span></div>
                                                    <div class="apexcharts-legend-series" rel="5" seriesname="TeamxE"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="5"
                                                            data:collapsed="false"
                                                            style="background: rgb(137, 80, 252) !important; color: rgb(137, 80, 252); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="5" i="4"
                                                            data:default-text="Team%20E" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                            E</span></div>
                                                </div>
                                                <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.position-bottom,
                                                    .apexcharts-legend.position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.position-right,
                                                    .apexcharts-legend.position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.position-top.apexcharts-align-left,
                                                    .apexcharts-legend.position-right,
                                                    .apexcharts-legend.position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.position-top .apexcharts-legend-series {
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
                                            <g id="SvgjsG5496" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 0)">
                                                <defs id="SvgjsDefs5495">
                                                    <clipPath id="gridRectMask0u8zdbcx">
                                                        <rect id="SvgjsRect5498" width="247" height="265" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask0u8zdbcx">
                                                        <rect id="SvgjsRect5499" width="245" height="267" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter5507" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5508" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5508Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5509" in="SvgjsFeFlood5508Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5509Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5510" dx="1" dy="1"
                                                            result="SvgjsFeOffset5510Out" in="SvgjsFeComposite5509Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5511" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5511Out"
                                                            in="SvgjsFeOffset5510Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5512" result="SvgjsFeMerge5512Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5513"
                                                                in="SvgjsFeGaussianBlur5511Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5514"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5515" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5512Out" mode="normal"
                                                            result="SvgjsFeBlend5515Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5520" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5521" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5521Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5522" in="SvgjsFeFlood5521Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5522Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5523" dx="1" dy="1"
                                                            result="SvgjsFeOffset5523Out" in="SvgjsFeComposite5522Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5524" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5524Out"
                                                            in="SvgjsFeOffset5523Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5525" result="SvgjsFeMerge5525Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5526"
                                                                in="SvgjsFeGaussianBlur5524Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5527"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5528" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5525Out" mode="normal"
                                                            result="SvgjsFeBlend5528Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5533" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5534" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5534Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5535" in="SvgjsFeFlood5534Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5535Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5536" dx="1" dy="1"
                                                            result="SvgjsFeOffset5536Out" in="SvgjsFeComposite5535Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5537" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5537Out"
                                                            in="SvgjsFeOffset5536Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5538" result="SvgjsFeMerge5538Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5539"
                                                                in="SvgjsFeGaussianBlur5537Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5540"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5541" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5538Out" mode="normal"
                                                            result="SvgjsFeBlend5541Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5546" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5547" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5547Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5548" in="SvgjsFeFlood5547Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5548Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5549" dx="1" dy="1"
                                                            result="SvgjsFeOffset5549Out" in="SvgjsFeComposite5548Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5550" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5550Out"
                                                            in="SvgjsFeOffset5549Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5551" result="SvgjsFeMerge5551Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5552"
                                                                in="SvgjsFeGaussianBlur5550Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5553"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5554" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5551Out" mode="normal"
                                                            result="SvgjsFeBlend5554Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter5559" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood5560" flood-color="#000000"
                                                            flood-opacity="0.45" result="SvgjsFeFlood5560Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite5561" in="SvgjsFeFlood5560Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite5561Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset5562" dx="1" dy="1"
                                                            result="SvgjsFeOffset5562Out" in="SvgjsFeComposite5561Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur5563" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur5563Out"
                                                            in="SvgjsFeOffset5562Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge5564" result="SvgjsFeMerge5564Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode5565"
                                                                in="SvgjsFeGaussianBlur5563Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode5566"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend5567" in="SourceGraphic"
                                                            in2="SvgjsFeMerge5564Out" mode="normal"
                                                            result="SvgjsFeBlend5567Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <g id="SvgjsG5500" class="apexcharts-pie">
                                                    <g id="SvgjsG5501" transform="translate(0, 0) scale(1)">
                                                        <g id="SvgjsG5502" class="apexcharts-slices">
                                                            <g id="SvgjsG5503"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="TeamxA" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath5504"
                                                                    d="M 120.5 8.939024390243887 A 111.56097560975611 111.56097560975611 0 0 1 232.05658249367576 119.50995892392531 L 120.5 120.5 L 120.5 8.939024390243887"
                                                                    fill="rgba(105,147,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-pie-slice-0"
                                                                    index="0" j="0" data:angle="89.49152542372882"
                                                                    data:startAngle="0" data:strokeWidth="2"
                                                                    data:value="44"
                                                                    data:pathOrig="M 120.5 8.939024390243887 A 111.56097560975611 111.56097560975611 0 0 1 232.05658249367576 119.50995892392531 L 120.5 120.5 L 120.5 8.939024390243887"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5516"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="TeamxB" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath5517"
                                                                    d="M 232.05658249367576 119.50995892392531 A 111.56097560975611 111.56097560975611 0 0 1 79.87389094618513 224.4007725772438 L 120.5 120.5 L 232.05658249367576 119.50995892392531"
                                                                    fill="rgba(27,197,189,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-pie-slice-1"
                                                                    index="0" j="1" data:angle="111.86440677966102"
                                                                    data:startAngle="89.49152542372882"
                                                                    data:strokeWidth="2" data:value="55"
                                                                    data:pathOrig="M 232.05658249367576 119.50995892392531 A 111.56097560975611 111.56097560975611 0 0 1 79.87389094618513 224.4007725772438 L 120.5 120.5 L 232.05658249367576 119.50995892392531"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5529"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="TeamxC" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath5530"
                                                                    d="M 79.87389094618513 224.4007725772438 A 111.56097560975611 111.56097560975611 0 0 1 37.85955024472911 195.44269372825573 L 120.5 120.5 L 79.87389094618513 224.4007725772438"
                                                                    fill="rgba(255,168,0,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-pie-slice-2"
                                                                    index="0" j="2" data:angle="26.440677966101703"
                                                                    data:startAngle="201.35593220338984"
                                                                    data:strokeWidth="2" data:value="13"
                                                                    data:pathOrig="M 79.87389094618513 224.4007725772438 A 111.56097560975611 111.56097560975611 0 0 1 37.85955024472911 195.44269372825573 L 120.5 120.5 L 79.87389094618513 224.4007725772438"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5542"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="TeamxD" rel="4" data:realIndex="3">
                                                                <path id="SvgjsPath5543"
                                                                    d="M 37.85955024472911 195.44269372825573 A 111.56097560975611 111.56097560975611 0 0 1 41.96529006019071 41.26521840964905 L 120.5 120.5 L 37.85955024472911 195.44269372825573"
                                                                    fill="rgba(246,78,96,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-pie-slice-3"
                                                                    index="0" j="3" data:angle="87.4576271186441"
                                                                    data:startAngle="227.79661016949154"
                                                                    data:strokeWidth="2" data:value="43"
                                                                    data:pathOrig="M 37.85955024472911 195.44269372825573 A 111.56097560975611 111.56097560975611 0 0 1 41.96529006019071 41.26521840964905 L 120.5 120.5 L 37.85955024472911 195.44269372825573"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5555"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="TeamxE" rel="5" data:realIndex="4">
                                                                <path id="SvgjsPath5556"
                                                                    d="M 41.96529006019071 41.26521840964905 A 111.56097560975611 111.56097560975611 0 0 1 120.48052893668756 8.93902608941471 L 120.5 120.5 L 41.96529006019071 41.26521840964905"
                                                                    fill="rgba(137,80,252,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-pie-slice-4"
                                                                    index="0" j="4" data:angle="44.745762711864415"
                                                                    data:startAngle="315.25423728813564"
                                                                    data:strokeWidth="2" data:value="22"
                                                                    data:pathOrig="M 41.96529006019071 41.26521840964905 A 111.56097560975611 111.56097560975611 0 0 1 120.48052893668756 8.93902608941471 L 120.5 120.5 L 41.96529006019071 41.26521840964905"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG5505" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5506"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="183.32776795184748" y="57.11217472771927"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5507)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">24.9%</text>
                                                            </g>
                                                            <g id="SvgjsG5518" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5519"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="171.14893262647576" y="193.98489941722113"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5520)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">31.1%</text>
                                                            </g>
                                                            <g id="SvgjsG5531" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5532"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="69.85106737352422" y="193.98489941722107"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5533)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">7.3%</text>
                                                            </g>
                                                            <g id="SvgjsG5544" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5545"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="31.282848287245415" y="118.12415092572905"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5546)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">24.3%</text>
                                                            </g>
                                                            <g id="SvgjsG5557" class="apexcharts-datalabels"><text
                                                                    id="SvgjsText5558"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="86.52899239619722" y="37.96930594655855"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px" font-weight="600" fill="#ffffff"
                                                                    class="apexcharts-text apexcharts-pie-label"
                                                                    filter="url(#SvgjsFilter5559)"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">12.4%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine5568" x1="0" y1="0" x2="241" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine5569" x1="0" y1="0" x2="241" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG5497" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 147, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(27, 197, 189);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 168, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(246, 78, 96);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 5;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(137, 80, 252);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 463px; height: 297px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
