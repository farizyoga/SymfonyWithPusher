<?php

namespace AppBundle\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/app")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function dashboardController(Request $request)
    {
        return $this->render('AppBundle::app/dashboard.html.twig');
    }
}
