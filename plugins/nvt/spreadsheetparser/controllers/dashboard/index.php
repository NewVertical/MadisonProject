<head>
    <title>Dashboard</title>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        ...
    </script>
</head>

<h2>Home Dashboard</h2>
<br/>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-row">
            <div class="dashboard-box small">
                <h4>Freight P/L</h4>
                <h3>$</h3>
                <br/>
                <div>
                    <span id="freight_PL" class="small-text">% </span><span class="small-text"> Since last week</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Trucks YTD</h4>
                <h3></h3>
                <br/>
                <div>
                    <span id="trucks_YTD" class="small-text">% </span><span class="small-text"> Since last year</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Left to Stage (bdft)</h4>
                <h3>M</h3>
                <br/>
                <div>
                    <span id="left_to_stage" class="small-text">% </span><span class="small-text"> Since last week</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Diesel Pricing</h4>
                <h3>$</h3>
                <br/>
                <div>
                    <span id="diesel_pricing" class="small-text">$ </span><span class="small-text"> Since last week</span>
                </div>
            </div>
        </div>
        <div class="dashboard-row">
            <div class="dashboard-box small">
                <h4>Logs to Peel</h4>
                <h3></h3>
                <br/>
                <div>
                    <span id="logs_to_peel" class="small-text">% </span><span class="small-text"> Since last week</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Posts to Treat</h4>
                <h3></h3>
                <br/>
                <div>
                    <span id="posts_to_treat" class="small-text">% </span><span class="small-text"> Since last week</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Employees</h4>
                <h3> Prod. Total</h3>
                <br/>
                <div>
                    <span id="employees" class="small-text"> </span><span class="small-text"> Since last week</span>
                </div>
            </div>
            <div class="dashboard-box small">
                <h4>Flatbed Ratio</h4>
                <h3> loads/trucks</h3>
                <div>
                    <span id="flatbed_ratio" class="small-text"> </span><span class="small-text"> Since last week</span>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-column" style="padding: 10px 0;">
        <div class="dashboard-box medium">
            <h4>Copper Market</h4>
            <div>
                <span><h3>$ </h3></span> <span id="copper_market">$ </span> <span class="small-text"> M dd, YYYY</span>
            </div>
            <div id="copper_chart"></div>
        </div>
    </div>
</div>
