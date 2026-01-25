<?php

namespace App\controllers;

use App\core\Controler;
use App\service\DashboardService;

class DashboardController extends  Controler
{

    private DashboardService $dashboardService;

    public function __construct()
    {
        $this->dashboardService = new DashboardService();
    }


    public function index()
    {
        $stats = $this->dashboardService->getStats();

        return $this->render('admin/dashboard', [
            'stats' => $stats
        ]);
    }


}