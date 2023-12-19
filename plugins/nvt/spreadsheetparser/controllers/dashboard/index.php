<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.js"></script>
</head>
<div class="app">
    <h2>Home Dashboard</h2>
    <br/>

    <div class="row mb-6" >
        <div class="col-xxl-8 col-lg-12 col-md-12">
            <div class="row mb-xxl-3" >
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Freight P/L</h4>
                        <h3>$<?php if (sizeof($freight_pl) > 0) { ?>
                                <?= $freight_pl[sizeof($freight_pl)-1]->freight_pl ?>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="freight_PL" class="small-text color-change">
                                <?php if (sizeof($freight_pl) > 0) { ?>
                                    <?= number_format($freight_pl[sizeof($freight_pl)-1]->deviation, 2) ?>%
                                <?php } ?>
                            </span>
                            <span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Trucks YTD</h4>
                        <h3>
                            <?php if (sizeof($trucks_ytd) > 0) { ?>
                                <?= $trucks_ytd[sizeof($trucks_ytd)-1]->trucks_ytd ?>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="trucks_YTD" class="small-text color-change">
                                <?php if (sizeof($trucks_ytd) > 0) { ?>
                                    <?= number_format($trucks_ytd[sizeof($trucks_ytd)-1]->deviation, 2) ?>
                                <?php } ?>%
                            </span>
                            <span class="small-text"> Since last year</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Left to Stage (bdft)</h4>
                        <h3>
                            <?php if (sizeof($left_to_stage) > 0) { ?>
                                <?= $left_to_stage[sizeof($left_to_stage)-1]->left_to_stage ?>
                            <?php } ?> M
                        </h3>
                        <br/>
                        <div>
                            <span id="left_to_stage" class="small-text color-change">
                                <?php if (sizeof($left_to_stage) > 0) { ?>
                                    <?= number_format($left_to_stage[sizeof($left_to_stage)-1]->deviation, 2) ?>
                                <?php } ?>%
                            </span>
                            <span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Diesel Pricing</h4>
                        <h3>
                            $<?php if (sizeof($diesel_prices) > 0) { ?>
                                <?= $diesel_prices[sizeof($diesel_prices)-1]->diesel_price ?>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="diesel_pricing" class="small-text">
                                $
                            </span>
                            <span class="small-text color-change"><?php if (sizeof($diesel_prices) > 0) { ?>
                                    <?= number_format($diesel_prices[sizeof($diesel_prices)-1]->deviation, 2) ?>
                                <?php } ?></span>
                            <span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Logs to Peel</h4>
                        <h3>
                            <?php if (sizeof($logs_to_peel) > 0) { ?>
                                <?= $logs_to_peel[sizeof($logs_to_peel)-1]->logs ?>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="logs_to_peel" class="small-text color-change">
                                <?php if (sizeof($logs_to_peel) > 0) { ?>
                                    <?= number_format($logs_to_peel[sizeof($logs_to_peel)-1]->deviation, 2) ?>%
                                <?php } ?>
                            </span>
                            <span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Posts to Treat</h4>
                        <h3>
                            <?php if (sizeof($posts_to_treat) > 0) { ?>
                                <?= $posts_to_treat[sizeof($posts_to_treat)-1]->posts ?>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="posts_to_treat" class="small-text color-change">
                                <?php if (sizeof($posts_to_treat) > 0) { ?>
                                    <?= number_format($posts_to_treat[sizeof($posts_to_treat)-1]->deviation, 2) ?>
                                <?php } ?>
                            </span><span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Employees</h4>
                        <div style="display: flex">
                            <h3>
                                <?php if (sizeof($employees) > 0) { ?>
                                    <?= $employees[sizeof($employees)-1]->employees_prod ?>
                                <?php } ?>
                                <span class="small-text" style="font-size: .65em; font-weight: normal;">
                                    Prod.
                                </span>
                            </h3>
                            <h3>
                                &nbsp;
                                <?php if (sizeof($employees) > 0) { ?>
                                    <?= $employees[sizeof($employees)-1]->employees_total ?>
                                <?php } ?>
                                <span class="small-text" style="font-size: .65em; font-weight: normal;">
                                    Total
                                </span>
                            </h3>
                        </div>
                        <br/>
                        <div>
                            <span id="employees" class="small-text color-change">
                                <?php if (sizeof($employees) > 0) { ?>
                                    <?= $employees[sizeof($employees)-1]->deviation ?>
                                <?php } ?>
                            </span><span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6">
                    <div class="dashboard-box small">
                        <h4>Flatbed Ratio</h4>
                        <h3>
                            <?php if (sizeof($flatbed_ratios) > 0) { ?>
                                <?= $flatbed_ratios[sizeof($flatbed_ratios)-1]->flatbed_ratio ?> <span class="small-text" style="font-size: .65em; font-weight: normal;">loads/trucks</span>
                            <?php } ?>
                        </h3>
                        <br/>
                        <div>
                            <span id="flatbed_ratio" class="small-text color-change">
                                <?php if (sizeof($flatbed_ratios) > 0) { ?>
                                    <?= number_format($flatbed_ratios[sizeof($flatbed_ratios)-1]->deviation, 2) ?>
                                <?php } ?>
                            </span><span class="small-text"> Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-12 row-cols-xxl-2  mb-4">
            <div class="dashboard-box h-100">
                <h4>Copper Market</h4>
                <div style="display: flex;">
                    <h3 style="margin-right: 10px;">
                        $<?php if (sizeof($copper_market) > 0) { ?>
                            <?= array_values($copper_market)[sizeof(array_values($copper_market))-1][0] ?>
                        <?php } ?>
                    </h3>
                    <span id="copper_market" class="color-change" style="margin-right: 5px;">
                        $
                    </span>
                    <span class="small-text">
                        <?php if (sizeof($copper_market) > 0) { ?>
                            <?= date('F j, Y', strtotime(array_values($copper_market)[sizeof(array_values($copper_market))-1][1])) ?>
                        <?php } ?>
                    </span>
                </div>
                <div style="width: 100%; height: 70%;"><canvas id="copper_chart"></canvas></div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-xxl-6 col-lg-12">
            <div class="dashboard-box medium">
                <div>
                    <h4>Lumber Market (2x4/2x12 Total)</h4>
                    <div style="display: flex;">
                        <?php if (sizeof($lumber_dev) > 0) { ?>
                            <h3 style="margin-right: 10px;">$ <?= $lumber_dev[sizeof($lumber_dev)-1]->price ?></h3>
                            <span id="lumber_market" class="color-change" style="margin-right: 5px;">$ <?= $lumber_dev[sizeof($lumber_dev)-1]->deviation ?></span> <span class="small-text"> Since last week</span>
                        <?php } ?>
                    </div>
                </div>
                <div style="width: 100%; height: 80%;"><canvas id="lumber_chart"></canvas></div>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-12">
            <div class="dashboard-box medium">
                <h4>Product Pricing Chart</h4>
                <br/>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Current Price</th>
                        <th scope="col">Deviation</th>
                        <th scope="col">Last Year Price</th>
                        <th scope="col">Up/Down YTY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (sizeof($product_prices) > 0) { foreach($product_prices as $product) { ?>
                        <tr>
                            <th scope="row"><?= $product->product_name ?></th>
                            <td><?= $product->current_price ?></td>
                            <td class="color-change"><?= number_format($product->deviation, 2) ?></td>
                        </tr>
                    <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-xxl-5 col-lg-12">
            <div class="dashboard-box medium">
                <h4>Inventory Value</h4>
                <br/>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Inventory</th>
                        <th scope="col">Current Value</th>
                        <th scope="col">Yesterday Value</th>
                        <th scope="col">Deviation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($inv_values as $inv_value) { ?>
                        <tr>
                            <th scope="row"><?= $inv_value->inventory_type ?></th>
                            <td><?= $inv_value->current_value ?></td>
                            <td></td>
                            <td class="color-change"><?= number_format($inv_value->deviation, 2) ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xxl-7 col-lg-12">
            <div class="dashboard-box medium">
                <h4>Inventory Volume</h4>
                <br/>
                <div style="display: flex">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">MBF</th>
                            <th scope="col">Trucks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($inv_volumes as $inv_volume) { ?>
                            <tr>
                                <th scope="row"><?= $inv_volume->category ?></th>
                                <td><?= $inv_volume->mbf ?></td>
                                <td><?= $inv_volume->trucks ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Calculations</th>
                            <th scope="col">MBF</th>
                            <th scope="col">Trucks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($inv_volume_calcs as $inv_volume) { ?>
                            <tr>
                                <th scope="row"><?= $inv_volume->type ?></th>
                                <td><?= $inv_volume->mbf ?></td>
                                <td><?= $inv_volume->trucks ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="dashboard-box full show-on-mobile">
            <h4>Trucks Sold / Shipped YTD Comparison</h4>
            <br/>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <?php if ($i == 0) { ?>
                    <h3>2022</h3>
                <?php } else if ($i == 1) { ?>
                    <h3>2021</h3>
                <?php } else { ?>
                    <h3>2020</h3>
                <?php } ?>
                <table class="table table-bordered">
                    <th scope="col">Category</th>
                    <th scope="col">Lumber</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Total</th>
                </table>
                <br/>
            <?php } ?>
        </div>
        <div class="dashboard-box full hide-on-mobile">
            <h4>Trucks Sold / Shipped YTD Comparison</h4>
            <br/>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th></th>
                    <?php $index = 0;
                    foreach ($trucks_years as $year) {
                        if ($index >= 3) { break; }?>
                        <th scope="col" colspan="3"><?= $year ?></th>
                        <?php $index++; } ?>
                </tr>
                <tr>
                    <th scope="col">Category</th>
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <th scope="col">Lumber</th>
                        <th scope="col">Posts</th>
                        <th scope="col">Total</th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($trucks_y3 as $y3) { ?>
                    <tr>
                        <th scope="col"><?= $y3->category ?></th>
                        <th scope="col"><?= $y3->lumber ?></th>
                        <th scope="col"><?= $y3->posts ?></th>
                        <th scope="col"><?= $y3->total ?></th>

                        <?php $y2 = $trucks_y2->where('category', $y3->category);
                        if (sizeof($y2) > 0) {
                            $y2 = $y2->first();
                            ?>
                            <th scope="col"><?= $y2->lumber ?></th>
                            <th scope="col"><?= $y2->posts ?></th>
                            <th scope="col"><?= $y2->total ?></th>
                        <?php } ?>
                        <?php $y1 = $trucks_y1->where('category', $y3->category);
                        if (sizeof($y1) > 0) {
                            $y1 = $y1->first();
                            ?>
                            <th scope="col"><?= $y1->lumber ?></th>
                            <th scope="col"><?= $y1->posts ?></th>
                            <th scope="col"><?= $y1->total ?></th>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-xxl-6 col-lg-12">
            <div class="dashboard-box tall">
                <h4>Top Ten Lumber Customers</h4>
                <br/>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">MBF</th>
                        <th scope="col">Trucks YTD</th>
                        <th scope="col">Deviation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $index = 1;
                    foreach ($lumber_leaderboard as $lumber_leader) {
                        ?>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td><?= $lumber_leader->customer ?></td>
                            <td><?= $lumber_leader->mbf ?></td>
                            <td><?= $lumber_leader->trucks_ytd ?></td>
                            <td class="color-change"><?= number_format($lumber_leader->deviation, 2) ?></td>
                        </tr>
                        <?php
                        $index++;

                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-12">
            <div class="dashboard-box tall">
                <h4>Top Ten Post Customers</h4>
                <br/>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">FT3</th>
                        <th scope="col">Trucks YTD</th>
                        <th scope="col">Deviation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $index = 1;
                    foreach ($posts_leaderboard as $posts_leader) {
                        ?>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td><?= $posts_leader->customer ?></td>
                            <td><?= $posts_leader->ft3 ?></td>
                            <td><?= $posts_leader->trucks_ytd ?></td>
                            <td class="color-change"><?= number_format($posts_leader->deviation, 2) ?></td>
                        </tr>
                        <?php $index++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        let elements = document.getElementsByClassName('color-change');

        for (let i = 0; i < elements.length; i++) {
            if (parseFloat(elements[i].textContent) < 0) {
                elements[i].classList.toggle('perc-up', false);
                elements[i].classList.toggle('small-text', false);
                elements[i].classList.toggle('perc-down', true);
            } else if (parseFloat(elements[i].textContent) > 0) {
                elements[i].classList.toggle('perc-down', false);
                elements[i].classList.toggle('small-text', false);
                elements[i].classList.toggle('perc-up', true);
            } else {
                elements[i].classList.toggle('perc-down', false);
                elements[i].classList.toggle('perc-up', false);
                elements[i].classList.toggle('small-text', true);
            }
        }
    };


    (async function() {
        const data = [];

        let weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        <?php foreach ($copper_market as $day => $values) { ?>
        data.push({ day: weekdays[<?= intval(date('w', strtotime($values[1]))) % 7 ?>], count: <?= $values[0] ?>});
        <?php } ?>

        new Chart (
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
        const days = [];
        for (let i = 1; i <= 53; i++) {
            days.push({ day: i.toString() });
        }

        <?php $index = 0;
        foreach ($lumber_market as $year => $values) {
        if ($index >= 4) {
            break;
        } ?>
        const data<?= $year ?> = [];
        <?php foreach ($values as $value) { ?>
        data<?= $year ?>.push({day: parseInt(<?= date('W', strtotime($value[1])) ?>), val: <?= $value[0] ?>});
        <?php } ?>

        const data_item<?= $year ?>  = days.map(function (d){
            let item =  data<?= $year ?>.find(function(a){
                return +d.day === +a.day;
            })
            if(item){
                return item.val;
            }else{
                return 0;
            }
        });
        <?php $index++; } ?>

        new Chart(
            document.getElementById('lumber_chart'),
            {
                type: 'line',
                data: {
                    labels: days.map(row => row.day),
                    datasets: [
                        <?php $index = 0;
                        foreach ($lumber_market as $year => $values) {
                        if ($index >= 4) {
                            break;
                        } ?>
                        {
                            data: data_item<?= $year ?>,
                            fill: false,
                            label: '<?= $year ?>',
                            tension: 0.3,
                            yAxisID: 'y',
                        },
                        <?php $index++; } ?>
                    ],
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
                            reverse: true,
                        },
                    },
                }
            }
        );
    })();
</script>
