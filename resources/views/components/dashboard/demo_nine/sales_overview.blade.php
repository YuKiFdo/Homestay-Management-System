<div class="col-xxl-4 col-lg-6 mb-25">

    <div class="card border-0">
    <div class="card-header">
        <h6>Sales Overview</h6>
        <div class="dropdown dropleft">
        <a href="#" role="button" id="performance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal" class="svg">
        </a>
        <div class="dropdown-menu" aria-labelledby="performance">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </div>
    </div>
    <!-- ends: .card-header -->
    <div class="card-body pt-20 pb-30">
        <div class="device-pieChart-wrap position-relative">

        <div class="">
            <div class="performance_overview"></div>
        </div>

        </div>
        <div class="session-wrap session-wrap--top--4">
        <div class="session-single">
            <div class="chart-label new">
            <span class="label-dot dot-primary"></span>
            Target
            </div>
        </div>
        <div class="session-single">
            <div class="chart-label new">
            <span class="label-dot dot-info"></span>
            In Progress
            </div>
        </div>
        <div class="session-single">
            <div class="chart-label new">
            <span class="label-dot dot-warning"></span>
            Completed
            </div>
        </div>
        </div>
        <!-- ends: .session-wrap -->
    </div>
    <!-- ends: .card-body -->
    </div>

</div>