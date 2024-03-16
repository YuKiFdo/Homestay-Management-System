<div class="card border-0 px-25 h-100">
    <div class="card-header px-0 border-0">
        <h6>User Overview</h6>
        <div class="card-extra">
        <ul class="card-tab-links nav-tabs nav" role="tablist">
            <li>
            <a href="#salesgrowth" data-bs-toggle="tab" id="salesgrowth-tab" role="tab" aria-selected="false">Today</a>
            </li>
            <li>
            <a href="#salesgrowth2" data-bs-toggle="tab" id="salesgrowth2-tab" role="tab" aria-selected="false">Week</a>
            </li>
            <li>
            <a class="active" href="#salesgrowth3" data-bs-toggle="tab" id="salesgrowth3-tab" role="tab" aria-selected="true">Month</a>
            </li>
        </ul>
        </div>
    </div>
    <div class="card-body p-0 pb-sm-25">
        <div class="tab-content">
        <div class="tab-pane" id="salesgrowth" role="tabpanel" aria-labelledby="salesgrowth-tab">
            <div class="label-detailed label-detailed--two">
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--primary">Target</span>
                <strong class="label-detailed__total">$8,550</strong>
                <span class="label-detailed__status color-success">
                <img src="{{ asset('assets/img/svg/arrow-success-up.svg') }}" class="svg">
                <strong>25%</strong>
                </span>
            </div>
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--info">Gained</span>
                <strong class="label-detailed__total">$5,550</strong>
                <span class="label-detailed__status color-danger">
                <img src="{{ asset('assets/img/svg/arrow-danger-down.svg') }}" class="svg">
                <strong>15%</strong>
                </span>
            </div>
            </div>
            <div class="parentContainer">


            <div>
                <canvas id="salesGrowthNewToday"></canvas>
            </div>


            </div>
        </div>
        <div class="tab-pane" id="salesgrowth2" role="tabpanel" aria-labelledby="salesgrowth2-tab">
            <div class="label-detailed label-detailed--two">
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--primary">Target</span>
                <strong class="label-detailed__total">$8,550</strong>
                <span class="label-detailed__status color-success">
                <img src="{{ asset('assets/img/svg/arrow-success-up.svg') }}" class="svg">
                <strong>25%</strong>
                </span>
            </div>
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--info">Gained</span>
                <strong class="label-detailed__total">$5,550</strong>
                <span class="label-detailed__status color-danger">
                <img src="{{ asset('assets/img/svg/arrow-danger-down.svg') }}" class="svg">
                <strong>15%</strong>
                </span>
            </div>
            </div>
            <div class="parentContainer">


            <div>
                <canvas id="salesGrowthNewWeek"></canvas>
            </div>


            </div>
        </div>
        <div class="tab-pane  active show" id="salesgrowth3" role="tabpanel" aria-labelledby="salesgrowth3-tab">
            <div class="label-detailed label-detailed--two">
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--primary">Target</span>
                <strong class="label-detailed__total">$8,550</strong>
                <span class="label-detailed__status color-success">
                <img src="{{ asset('assets/img/svg/arrow-success-up.svg') }}" class="svg">
                <strong>25%</strong>
                </span>
            </div>
            <div class="label-detailed__single">
                <span class="label-detailed__type label-detailed__type--info">Gained</span>
                <strong class="label-detailed__total">$5,550</strong>
                <span class="label-detailed__status color-danger">
                <img src="{{ asset('assets/img/svg/arrow-danger-down.svg') }}" class="svg">
                <strong>15%</strong>
                </span>
            </div>
            </div>
            <div class="parentContainer">


            <div>
                <canvas id="salesGrowthNewMonth"></canvas>
            </div>


            </div>
        </div>
        </div>
    </div>
    </div>