<?php namespace NVT\SpreadsheetParser\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use GuzzleHttp\Exception\GuzzleException;
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

    public $layout = 'default';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('NVT.SpreadsheetParser', 'spreadsheetparser', 'dashboard');
        $this->addCss("/plugins/nvt/spreadsheetparser/assets/css/dashboard.css");
    }

    /**
     * @throws Exception
     */
    public function index() {

    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function beforeDisplay()
    {
    }
}
