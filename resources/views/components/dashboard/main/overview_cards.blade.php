<div class="col-xxl-4 col-sm-6  col-ssm-12 mb-25">
              <!-- Card 1  -->
              <div class="ap-po-details ap-po-details--luodcy  overview-card-shape radius-xl d-flex justify-content-between">





                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between w-100">
                  <div class="ap-po-details__titlebar">
                    <p>Total Customers</p>
                    {{-- get total count of customers in database --}}
                    <h1>{{ $totalCustomers }}</h1>
                    <div class="ap-po-details-time">
                      <span class="color-success"><i class="las la-user"></i>
                        <strong>{{ $recentCustomer }}</strong></span>
                      <small>Recent Customer</small>
                    </div>
                  </div>
                  <div class="ap-po-details__icon-area color-primary">
                    <i class="uil uil-users-alt"></i>
                  </div>
                </div>

              </div>
              <!-- Card 1 End  -->
            </div>

            <div class="col-xxl-4 col-sm-6  col-ssm-12 mb-25">
              <!-- Card 2 -->
              <div class="ap-po-details ap-po-details--luodcy  overview-card-shape radius-xl d-flex justify-content-between">





                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between w-100">
                  <div class="ap-po-details__titlebar">
                    <p>Monthly Revenue
                        <span><small>(${{ $monthlySalesUSD }})</small></span>
                    </p>
                    {{-- show monly sales in LKR and usd insmall --}}
                    <h1>{{ $monthlySales }} LKR </h1>

                    {{-- calculate the difference between current month and last month sales --}}

                    <div class="ap-po-details-time">
                        @if ($salesDifference > 0)
                        <span class="color-success"><i class="las la-arrow-up"></i>
                        <strong>{{ $salesDifference }}%</strong></span>
                        @else
                        <span class="color-danger"><i class="las la-arrow-down"></i>

                        <strong>{{ $salesDifference }}%</strong></span>
                        @endif
                      <small>Since last month</small>
                    </div>
                  </div>
                  <div class="ap-po-details__icon-area color-success">
                    <i class="uil uil-usd-circle"></i>
                  </div>
                </div>

              </div>
              <!-- Card 2 End  -->
            </div>


            <div class="col-xxl-4 col-sm-6  col-ssm-12 mb-25">
              <!-- Card 3  -->
              <div class="ap-po-details ap-po-details--luodcy  overview-card-shape radius-xl d-flex justify-content-between">





                <div class=" ap-po-details-content d-flex flex-wrap justify-content-between w-100">
                  <div class="ap-po-details__titlebar">
                    <p>Real-time Dollar Rate (1USD)</p>
                    <h1>{{ $exchangeRate }}LKR</h1>
                    <div class="ap-po-details-time">
                      <span class="color-danger"><i class="las la-arrow-down"></i>
                        <strong>1.36%</strong></span>
                      <small>Since last Day</small>
                    </div>
                  </div>
                  <div class="ap-po-details__icon-area color-info">
                    <i class="uil uil-tachometer-fast"></i>
                  </div>
                </div>

              </div>
              <!-- Card 3 End  -->
            </div>
