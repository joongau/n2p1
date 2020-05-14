<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/legal_notice", name="legal_notice")
     */
    public function legalNotice()
    {
        return $this->render('main/legalnotice.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('user/login.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('user/register.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/newpage", name="newpage")
     */
    public function newPage()
    {
        return $this->render('page/newpage.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
