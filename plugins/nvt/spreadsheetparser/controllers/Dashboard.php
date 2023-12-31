<?php namespace NVT\SpreadsheetParser\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use GuzzleHttp\Exception\GuzzleException;
use PhpOffice\PhpSpreadsheet\Reader;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use NVT\SpreadsheetParser\Models\CopperMarket;
use NVT\SpreadsheetParser\Models\CustomerLeaderboardLumber;
use NVT\SpreadsheetParser\Models\CustomerLeaderboardPosts;
use NVT\SpreadsheetParser\Models\DieselPrice;
use NVT\SpreadsheetParser\Models\Employees;
use NVT\SpreadsheetParser\Models\FlatbedRatio;
use NVT\SpreadsheetParser\Models\FreightPl;
use NVT\SpreadsheetParser\Models\InventoryValue;
use NVT\SpreadsheetParser\Models\InventoryVolume;
use NVT\SpreadsheetParser\Models\InventoryVolumeCalculations;
use NVT\SpreadsheetParser\Models\LeftToStage;
use NVT\SpreadsheetParser\Models\LogsToPeel;
use NVT\SpreadsheetParser\Models\LumberMarket;
use NVT\SpreadsheetParser\Models\PostsToTreat;
use NVT\SpreadsheetParser\Models\ProductPrices;
use NVT\SpreadsheetParser\Models\TrucksSoldShippedYtd;
use NVT\SpreadsheetParser\Models\TrucksYtd;

/**
 * Dashboard Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Dashboard extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['nvt.spreadsheetparser.dashboard'];

    public $layout = 'default';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('NVT.SpreadsheetParser', 'spreadsheetparser', 'dashboard');
        $this->addCss("/plugins/nvt/spreadsheetparser/assets/css/dashboard.css");
        $this->vars['lumber_leaderboard'] = CustomerLeaderBoardLumber::all()->sortBy([
            ['mbf', 'desc']
        ]);
        $this->vars['posts_leaderboard'] = CustomerLeaderBoardPosts::all()->sortBy([
            ['ft3', 'desc']
        ]);
        $this->vars['diesel_prices'] = DieselPrice::all();
        $this->vars['employees'] = Employees::all();
        $this->vars['flatbed_ratios'] = FlatbedRatio::all();
        $this->vars['freight_pl'] = FreightPl::all();
        $this->vars['inv_volumes'] = InventoryVolume::all();
        $this->vars['inv_volume_calcs'] = InventoryVolumeCalculations::all();
        $this->vars['left_to_stage'] = LeftToStage::all();
        $this->vars['logs_to_peel'] = LogsToPeel::all();
        $this->vars['lumber_market'] = LumberMarket::all();
        $this->vars['posts_to_treat'] = PostsToTreat::all();
        $this->vars['trucks_ytd'] = TrucksYtd::all();

        $product_prices_unsorted = ProductPrices::all();
        if (sizeof($product_prices_unsorted) > 0) {
            $product_prices = $product_prices_unsorted->sortBy([
                ['date', 'desc'],
                ['product_name', 'asc'],
            ]);
            $this->vars['product_prices'] = $product_prices->where('date', $product_prices[sizeof($product_prices) - 1]->date)->all();
        } else {
            $this->vars['product_prices'] = $product_prices_unsorted;
        }

        $inv_value_unsorted = InventoryValue::all();
        if (sizeof($inv_value_unsorted) > 0) {
            $inv_values = $inv_value_unsorted->sortBy([
                ['date', 'asc'],
                ['inventory_type', 'asc'],
            ]);

            $this->vars['inv_values'] = $inv_values->where('date', $inv_values[sizeof($inv_values) - 1]->date);
        } else {
            $this->vars['inv_values'] = $inv_value_unsorted;
        }

        $copper_market = CopperMarket::all()->sortBy([
            ['date', 'desc']
        ]);
        $copper_market_as_array = [];

        if (sizeof($copper_market) > 0) {
            $index = 0;
            foreach ($copper_market as $day) {
                if ($index >= 10) {
                    break;
                }
                $copper_market_as_array[$day->day] = [$day->price, $day->day];
                $index++;
            }
        }
        $this->vars['copper_market'] = $copper_market_as_array;

        $trucks_sold_shipped = TrucksSoldShippedYtd::all()->sortBy([
            ['date', 'desc']
        ]);

        if (sizeof($trucks_sold_shipped) > 0) {
            $date = $trucks_sold_shipped[0]->year;
            $trucks_years = [substr($date, 0, 4)];
            $trucks_y3 = $trucks_sold_shipped->where('year', $date);

            $year = strval(intval(substr($date, 0, 4)) - 1);
            $date = $year . substr($date, 4);
            $trucks_years[] = substr($date, 0, 4);
            $trucks_y2 = $trucks_sold_shipped->where('year', $date);

            $year = strval(intval(substr($date, 0, 4)) - 1);
            $date = $year . substr($date, 4);
            $trucks_years[] = substr($date, 0, 4);
            $trucks_y1 = $trucks_sold_shipped->where('year', $date);

            $this->vars['trucks_years'] = $trucks_years;
            $this->vars['trucks_y3'] = $trucks_y3;
            $this->vars['trucks_y2'] = $trucks_y2;
            $this->vars['trucks_y1'] = $trucks_y1;
        } else {
            $this->vars['trucks_years'] = [];
            $this->vars['trucks_y3'] = [];
            $this->vars['trucks_y2'] = [];
            $this->vars['trucks_y1'] = [];
        }

        $lumber_market = LumberMarket::all()->sortBy([
            ['date', 'asc']
        ]);

        $this->vars['lumber_market'] = $this->queryByYear($lumber_market, 'date', 'price');
        $this->vars['lumber_dev'] = $lumber_market;
    }

    public function queryByYear($arr, $date, $query): array
    {
        $queried = [];

        foreach ($arr as $element) {
            $year = substr($element->$date, 0, 4);
            $queried[$year][] = [$element->$query, $element->$date];
        }

        return $queried;
    }

    /**
     */
    public function index() {

    }

    /**
     */
    public function beforeDisplay()
    {
    }
}
