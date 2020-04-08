<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artist", name="artist_list")
     */
    public function index()
    {
        return $this->render('artists/list.html.twig', [
            'ArtistName' => 'Your favorite artists name'
        ]);
    }


}

//on peut aussi faire comme ca

///**
// * @Route("/artist", name="artist_")
// */
//class ArtistController extends AbstractController
//{
//    /**
//     * URI:/artist-list
//     * Nom:artist_list
//     * @Route("/-list", name="list")
//     */
//    public function index()
//    {
//        return $this->render('artists/list.html.twig', [
//            'ArtistName' => 'Beyonce'
//        ]);
//    }
//}