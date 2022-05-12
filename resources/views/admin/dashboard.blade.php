@extends('admin.layouts.index')
@section('content')
    <div class="card-body">
        <div class="content-container">
            <div class="card border-dark mb-3 mt-3 mw-100">
                <div class="card-header">
                    <p class="pt-7 text-dark">{{ __('admin.dashboard') }}</p>
                </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <b><label for="kt_apexcharts_3">{{ __('admin.total_selling') }}
                                    5</label></b>
                            <div id="kt_apexcharts_3" style="height: 350px;"></div>
                            <input type="hidden" value="10" id="daysArray">
                            <input type="hidden" value="10" id="todaysSellingArray">
                            <input type="hidden" value="10" id="pastSelling">
                            <input type="hidden" value="10" id="todaysSelling">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <b><label for="kt_apexcharts_4"> {{ __('admin.total_earning') }}
                                    6 € </label></b>
                            <div id="kt_apexcharts_4" style="height: 350px;"></div>
                            <input type="hidden" value="7" id="todayAmountOfSellingForEuroArray">
                            <input type="hidden" value="9" id="pastEarning">
                            <input type="hidden" value="8" id="todaysEarning">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
