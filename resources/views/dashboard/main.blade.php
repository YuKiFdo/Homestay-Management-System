@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="demo2 mb-25 t-thead-bg">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ trans('page_title.dashboard') }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i
                                                class="uil uil-estate"></i>{{ trans('page_title.dashboard') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ trans('page_title.demo_two') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                @include('components.dashboard.main.overview_cards')
                @include('components.dashboard.main.sales_revenue')
                @include('components.dashboard.main.bookings')
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var successData = {!! json_encode(session('message')) !!};
                showMsg(successData);
            });
        </script>
    @endif
    <div class="message-wrapper"></div>
    <script>
        function fetchTodayData() {
            $.ajax({
                url: '/get-sales-revenue',
                method: 'GET',
                success: function(response) {
                    var hours = [];
                    var sales = [];

                    for (var i = 0; i < 24; i++) {
                        var hour = i.toString().padStart(2, '0');
                        var found = false;
                        for (var j = 0; j < response.length; j++) {
                            if (response[j].hour === hour) {
                                hours.push(response[j].hour);
                                sales.push(parseFloat(response[j].total_sales));
                                found = true;
                                break;
                            }
                        }
                        if (!found) {
                            hours.push(hour);
                            sales.push(0);
                        }
                    }

                    chartjsLineChart("saleRevenueToday", "113", sales, hours,
                        "Sales Revenue for Each Hour (Last 24 hours)", true);
                },
                error: function(error) {
                    console.error('Error fetching sales data:', error);
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function() {
            fetchTodayData();
        });

        document.getElementById("tl_revenue-week-tab").addEventListener("shown.bs.tab", function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/get-weekly-sales-revenue");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    var days = response.map(function(item) {
                        return item.date;
                    });
                    var sales = response.map(function(item) {
                        return parseFloat(item.total_sales);
                    });

                    chartjsLineChart("saleRevenueWeek", "113", sales, days,
                        "Weekly Earning", true);
                } else {
                    console.error('Error fetching weekly sales data:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed');
            };
            xhr.send();

            document.getElementById("tl_revenue-week-tab").removeEventListener("shown.bs.tab", arguments.callee);
        });


        document.getElementById("tl_revenue-month-tab").addEventListener("shown.bs.tab", function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/get-monthly-sales-revenue");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    var sales = response.map(function(item) {
                        return parseFloat(item.total_sales);
                    });
                    var months = response.map(function(item) {
                        return item.year + '-' + item
                            .month; // Concatenating year and month with a hyphen
                    });

                    console.log('Sales:', sales);
                    console.log('Months:', months);

                    chartjsLineChart("saleRevenueMonth", "113", sales, months,
                        "Monthly Earning", true);
                } else {
                    console.error('Error fetching monthly sales data:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed');
            };
            xhr.send();

            document.getElementById("tl_revenue-month-tab").removeEventListener("shown.bs.tab", arguments.callee);
        });
    </script>
@endsection
