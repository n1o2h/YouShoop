<?php

namespace App\service;

use App\core\Application;

class DashboardService
{
    public function getStats(): array
    {
        return [
            'total_sales'   => $this->getTotalSales(),
            'orders_count'  => $this->getOrdersCount(),
            'products_count'  => $this->getProductOrCount(),
            'clients_count' => $this->getClientsCount(),

        ];
    }

    private function getTotalSales()
    {

        $stmt = Application::$app->db->prepare("SELECT SUM(total) FROM commandes WHERE status = 'paid'");
        $stmt->execute();
        return $stmt->fetchColumn() ?? 0;
    }

    private function getOrdersCount()
    {
        $stmt = Application::$app->db->prepare("SELECT COUNT(*) FROM commandes");
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    private function getProductOrCount()
    {
        $stmt = Application::$app->db->prepare("SELECT COUNT(*) FROM products");
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    private function getClientsCount()
    {
        $stmt = Application::$app->db->prepare("SELECT COUNT(*) FROM users WHERE role = 0");
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
