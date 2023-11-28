<?php namespace NVT\SpreadsheetParser\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use PhpOffice\PhpSpreadsheet\Reader;
use PhpOffice\PhpSpreadsheet\Reader\Exception;

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

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('NVT.SpreadsheetParser', 'spreadsheetparser', 'dashboard');
    }

    /**
     * @throws Exception
     */
    public function index() {
        $inputFileName = 'themes/madison/assets/excelTest.xlsx';
        $reader = new Reader\Xlsx();

        $spreadsheet = $reader->load($inputFileName);

        $cols = array("A", "B", "C", "D");

        $done = false;

        for ($i = 1; $i <= 20; $i++) {
            if ($done) {
                break;
            }
            foreach ($cols as $col) {
                if ($done) {
                    break;
                }
                $cellValue = $spreadsheet->getActiveSheet()->getCell($col . strval($i))->getValue();

                if (strpos($cellValue, "IMPORTXML") != false) {
                    //sscanf($cellValue, "IMPORTXML(\"%[^[]]\", \"%[^[]]\")", $url, $xmlQuery);

                    $url = substr($cellValue, 11, strpos($cellValue, ",")-1);
                    $xmlQuery = substr($cellValue, strpos($cellValue, ",")+3, strlen($cellValue)-2);
                    $this['test'] = $url;
                    $this['index'] = $col . strval($i);
                    $done = true;
                    break;
                    //$httpClient = new \GuzzleHttp\Client();
                    //$response = $httpClient->get($url);
                }
            }
        }
    }
}
