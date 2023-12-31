
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.js"></script>
</head>

<h2>Home Dashboard</h2>
<br/>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-row flexible" style="padding-left: 0;">
            <div class="mobile-row">
                <div class="dashboard-box small">
                    <h4>Freight P/L</h4>
                    <h3>$</h3>
                    <br/>
                    <div>
                        <span id="freight_PL" class="small-text color-change">% </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
                <div class="dashboard-box small">
                    <h4>Trucks YTD</h4>
                    <h3></h3>
                    <br/>
                    <div>
                        <span id="trucks_YTD" class="small-text color-change">% </span><span class="small-text"> Since last year</span>
                    </div>
                </div>
            </div>
            <div class="mobile-row">
                <div class="dashboard-box small">
                    <h4>Left to Stage (bdft)</h4>
                    <h3>M</h3>
                    <br/>
                    <div>
                        <span id="left_to_stage" class="small-text color-change">% </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
                <div class="dashboard-box small">
                    <h4>Diesel Pricing</h4>
                    <h3>$</h3>
                    <br/>
                    <div>
                        <span id="diesel_pricing" class="small-text color-change">$ </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-row flexible" style="padding-left: 0;">
            <div class="mobile-row">
                <div class="dashboard-box small">
                    <h4>Logs to Peel</h4>
                    <h3></h3>
                    <br/>
                    <div>
                        <span id="logs_to_peel" class="small-text color-change color-change">% </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
                <div class="dashboard-box small">
                    <h4>Posts to Treat</h4>
                    <h3></h3>
                    <br/>
                    <div>
                        <span id="posts_to_treat" class="small-text color-change">% </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
            </div>
            <div class="mobile-row">
                <div class="dashboard-box small">
                    <h4>Employees</h4>
                    <h3> Prod. Total</h3>
                    <br/>
                    <div>
                        <span id="employees" class="small-text color-change"> </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
                <div class="dashboard-box small">
                    <h4>Flatbed Ratio</h4>
                    <h3> loads/trucks</h3>
                    <div>
                        <span id="flatbed_ratio" class="small-text color-change"> </span><span class="small-text"> Since last week</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-column">
        <div class="dashboard-box medium">
            <h4>Copper Market</h4>
            <div style="display: flex;">
                <h3 style="margin-right: 10px;">$ </h3><span id="copper_market" class="color-change" style="margin-right: 5px;">$ </span> <span class="small-text"> Month dd, YYYY</span>
            </div>
            <div style="width: 100%; height: 70%;"><canvas id="copper_chart"></canvas></div>
        </div>
    </div>
</div>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-box xlarge">
            <h4>Lumber Market (2x4/2x12 Total)</h4>
            <div style="display: flex;">
                <h3 style="margin-right: 10px;">$ </h3><span id="lumber_market" class="color-change" style="margin-right: 5px;">$ </span> <span class="small-text"> Since last week</span>
            </div>
            <div style="width: 100%; height: 80%;"><canvas id="lumber_chart"></canvas></div>
        </div>
    </div>
    <div class="dashboard-column">
        <div class="dashboard-box large">
            <h4>Product Pricing Chart</h4>
            <br/>
            <div class="table-row">
                <div class="table-column">
                    <div class="cell">
                        <h3>Product</h3>
                    </div>
                    <div class="cell">
                        <h3>Total</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Current Price</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Deviation</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Last Year Price</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell" style="border-right: none">
                        <h3>Up/Down YTY</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-box medium">
            <h4>Inventory Value</h4>
            <br/>
            <div class="table-row">
                <div class="table-column">
                    <div class="cell">
                        <h3>Inventory</h3>
                    </div>
                    <div class="cell">
                        <h3>Total</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Current Value</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Yesterday Value</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell" style="border-right: none;">
                        <h3>Difference</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-column">
        <div class="dashboard-box wide">
            <h4>Inventory Volume</h4>
            <br/>
            <div class="table-row">
                <div class="table-column">
                    <div class="cell">
                        <h3>Category</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>MBF</h3>
                    </div>
                </div>
                <div class="table-column" style="border-right: #98A6AD 2px solid;">
                    <div class="cell">
                        <h3>Trucks</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Calculations</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>MBF</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell" style="border-right: none;">
                        <h3>Trucks</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-box full">
            <h4>Trucks Sold / Shipped YTD Comparison</h4>
            <br/>
            <div class="table-row mobile-column" style="font-size: 1em">
                <div class="table-column hide-mobile">
                    <div class="cell" style="pointer-events: none">
                        <h3 style="opacity: 0;">a</h3>
                    </div>
                    <div class="table-row no-margin">
                        <div class="table-column">
                            <div class="cell">
                                <h3>Category</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-column">
                    <div class="shift-cell">
                        <h3>2022</h3>
                    </div>
                    <div class="table-row no-margin">
                        <div class="table-column show-mobile">
                            <div class="cell">
                                <h3>Category</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Lumber</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Posts</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell" style="border-right: none;">
                                <h3>Total</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-column">
                    <div class="shift-cell">
                        <h3>2021</h3>
                    </div>
                    <div class="table-row no-margin">
                        <div class="table-column show-mobile">
                            <div class="cell">
                                <h3>Category</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Lumber</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Posts</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell" style="border-right: none;">
                                <h3>Total</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-column">
                    <div class="shift-cell">
                        <h3>2020</h3>
                    </div>
                    <div class="table-row no-margin">
                        <div class="table-column show-mobile">
                            <div class="cell">
                                <h3>Category</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Lumber</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell">
                                <h3>Posts</h3>
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="cell" style="border-right: none;">
                                <h3>Total</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-row">
            </div>
        </div>
    </div>
</div>
<div class="dashboard-row">
    <div class="dashboard-column">
        <div class="dashboard-box half">
            <h4>Top Ten Lumber Customers</h4>
            <br/>
            <div class="table-row">
                <div class="table-column">
                    <div class="cell">
                        <h3>#</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>MBF</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Trucks YTD</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell" style="border-right: none;">
                        <h3>Deviation</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-column">
        <div class="dashboard-box half">
            <h4>Top Ten Post Customers</h4>
            <br/>
            <div class="table-row">
                <div class="table-column">
                    <div class="cell">
                        <h3>#</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>FT3</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell">
                        <h3>Trucks YTD</h3>
                    </div>
                </div>
                <div class="table-column">
                    <div class="cell" style="border-right: none;">
                        <h3>Deviation</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        calcWidth();
    };
    window.onload = function() {
        handleMediumBoxWidth();
    };

    addEventListener("resize", calcWidth(event));
    addEventListener("resize", handleMediumBoxWidth(event));

    function calcWidth() {
        let rows = document.getElementsByClassName('table-row');
        for (let i = 0; i < rows.length; i++) {
            let cols = rows[i].children;
            let modifier = .95;
            let divisor = cols.length;
            if (window.innerWidth >= 1024) {
                for (let j = 0; j < cols.length; j++) {
                    if (cols[j].classList.contains('show-mobile')) {
                        divisor -= 1;
                    }
                }
            }
            if (rows[i].classList.contains('no-margin')) {
                modifier = 1;
            }
            let width = (rows[i].clientWidth * modifier) / divisor;
            for (let j = 0; j < cols.length; j++) {
                cols[j].style.width = width.toString() + 'px';
            }
        }
    }

    function handleMediumBoxWidth() {
        if (window.innerWidth < 1024) {
            return;
        }
        let boxes = document.getElementsByClassName('medium');

        for (let i = 0; i < boxes.length; i++) {
            if (!boxes[i].classList.contains('dashboard-box')) {
                continue;
            }
            let row = boxes[i];
            while (!row.classList.contains('dashboard-row')) {
                row = row.parentElement;
            }
            let pageWidth = .95 * window.innerWidth;
            let width = pageWidth - row.offsetWidth + boxes[i].offsetWidth;
            boxes[i].style.width = width.toString() + "px";
        }
    }
</script>
<script>
    (async function() {
        const data = [
            { day: 'M', count: 10 },
            { day: 'T', count: 20 },
            { day: 'W', count: 15 },
            { day: 'Th', count: 25 },
            { day: 'F', count: 22 },
            { day: 'M', count: 30 },
            { day: 'T', count: 28 },
            { day: 'W', count: 15 },
            { day: 'Th', count: 25 },
            { day: 'F', count: 22 }
        ];

        new Chart(
            document.getElementById('copper_chart'),
            {
                type: 'line',
                data: {
                    labels: data.map(row => row.day),
                    datasets: [
                        {
                            data: data.map(row => row.count),
                            fill: false,
                            tension: 0.3
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            ticks: {
                                callback: function (value, index, ticks) {
                                    return '$' + value.toFixed(1);
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            }
        );
    })();

    (async function() {
        const days = [
            { day: 'M'},
            { day: 'T'},
            { day: 'W'},
            { day: 'Th'},
            { day: 'F'},
            { day: 'M'},
            { day: 'T'},
            { day: 'W'},
            { day: 'Th'},
            { day: 'F'}
        ];
        const data2018 = [
            { count: 12 },
            { count: 40 },
            { count: 43 },
            { count: 36 },
            { count: 27 },
            { count: 34 },
            { count: 28 },
            { count: 40 },
            { count: 41 },
            { count: 42 }
        ];

        const data2019 = [
            { count: 43 },
            { count: 41 },
            { count: 37 },
            { count: 38 },
            { count: 35 },
            { count: 33 },
            { count: 32 },
            { count: 29 },
            { count: 25 },
            { count: 22 }
        ];

        const data2020 = [
            { count: 12 },
            { count: 11 },
            { count: 13 },
            { count: 9 },
            { count: 14 },
            { count: 17 },
            { count: 16 },
            { count: 15 },
            { count: 18 },
            { count: 13 }
        ];

        const data2021 = [
            { count: 10 },
            { count: 15 },
            { count: 15 },
            { count: 17 },
            { count: 13 },
            { count: 17 },
            { count: 23 },
            { count: 21 },
            { count: 26 },
            { count: 22 }
        ];

        const data2022 = [
            { count: 28 },
            { count: 31 },
            { count: 33 },
            { count: 32 },
            { count: 35 },
            { count: 34 },
            { count: 36 },
            { count: 36 },
            { count: 36 },
            { count: 40 }
        ];

        new Chart(
            document.getElementById('lumber_chart'),
            {
                type: 'line',
                data: {
                    labels: days.map(row => row.day),
                    datasets: [
                        {
                            data: data2018.map(row => row.count),
                            fill: false,
                            label: '2018',
                            tension: 0.3,
                            yAxisID: 'y',
                        },
                        {
                            data: data2019.map(row => row.count),
                            fill: false,
                            label: '2019',
                            tension: 0.3,
                            yAxisID: 'y',
                        },
                        {
                            data: data2020.map(row => row.count),
                            fill: false,
                            label: '2020',
                            tension: 0.3,
                            yAxisID: 'y',
                        },
                        {
                            data: data2021.map(row => row.count),
                            fill: false,
                            label: '2021',
                            tension: 0.3,
                            yAxisID: 'y',
                        },
                        {
                            data: data2022.map(row => row.count),
                            fill: false,
                            label: '2022',
                            tension: 0.3,
                            yAxisID: 'y',
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    stacked: false,
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            ticks: {
                                callback: function (value, index, ticks) {
                                    return '$' + value.toFixed(1);
                                },
                            },
                        },
                    },
                    plugins: {
                        legend: {
                            display: true,
                            align: 'start',
                            position: 'right',
                            reverse: true
                        },
                    },
                }
            }
        );
    })();
</script>
