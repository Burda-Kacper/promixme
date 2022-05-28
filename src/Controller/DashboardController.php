<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{
    /**
     * @return Response
     */
    public function dashboard(): Response
    {
        return $this->render('dashboard/dashboard.html.twig');
    }
}
