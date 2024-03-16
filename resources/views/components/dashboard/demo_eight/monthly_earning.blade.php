<div class="col-xxl-7 mb-25">

  <div class="card revenueChartTwo border-0">
    <div class="card-header border-0">
      <h6>Monthly Earning</h6>
      <div class="card-extra">
        <ul class="card-tab-links nav-tabs nav" role="tablist">
          <li>
            <a class="active" href="#tl_revenue-today" data-bs-toggle="tab" id="tl_revenue-today-tab" role="tab" aria-selected="false">Today</a>
          </li>
          <li>
            <a href="#tl_revenue-week" data-bs-toggle="tab" id="tl_revenue-week-tab" role="tab" aria-selected="false">Week</a>
          </li>
          <li>
            <a href="#tl_revenue-month" data-bs-toggle="tab" id="tl_revenue-month-tab" role="tab" aria-selected="false">Month</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- ends: .card-header -->
    <div class="card-body pt-0 px-20">
      <div class="tab-content">
        <div class="tab-pane fade active show" id="tl_revenue-today" role="tabpanel" aria-labelledby="tl_revenue-today-tab">
          <div class="cashflow-display cashflow-display2 d-flex">

          </div>
          <!-- ends: .performance-stats -->

          <div class="wp-chart">
            <div class="parentContainer">


              <div>
                <canvas id="earningRevenueToday"></canvas>
              </div>


            </div>
          </div>

          <!-- ends: .performance-stats -->
        </div>
        <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
          <div class="cashflow-display cashflow-display2 d-flex">

          </div>
          <!-- ends: .performance-stats -->

          <div class="wp-chart">
            <div class="parentContainer">


              <div>
                <canvas id="earningRevenueWeek"></canvas>
              </div>


            </div>
          </div>

          <!-- ends: .performance-stats -->
        </div>
        <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
          <div class="cashflow-display cashflow-display2 d-flex">

          </div>
          <!-- ends: .performance-stats -->

          <div class="wp-chart">
            <div class="parentContainer">


              <div>
                <canvas id="earningRevenueMonth"></canvas>
              </div>


            </div>
          </div>

          <!-- ends: .performance-stats -->
        </div>
      </div>
    </div>
    <!-- ends: .card-body -->
  </div>

</div>