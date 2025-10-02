<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ClientController extends AbstractController
{
    #[Route('/', name: 'app_client_home')]
    public function index(): Response
    {
        return $this->render('client/home.html.twig');
    }

    #[Route('/client/about-us', name:'app_client_about')]
    public function about(): Response
    {
        return $this->render("client/about.html.twig");
    }

    #[Route('/client/contact', name:'app_client_contact')]
    public function contact(): Response
    {
        return $this->render('client/contact.html.twig');
    }
}
