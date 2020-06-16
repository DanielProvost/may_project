<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function home()
    {
        return $this->render('base.html.twig');
    }


    /**
     * @Route("/bonjour")
     */
    public function bonjour()
    {
        return $this->render('bonjour.html.twig');
    }
}