<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends AbstractController
{
//    La route correspondante à l'action index()
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request, Session $session)
    {
        return $this->json([
            'test' => $request->query->get('foo'),
            'session' => $session->has('cle_inexistante')
        ]);
    }
}
