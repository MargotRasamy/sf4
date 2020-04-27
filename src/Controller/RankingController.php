<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RecordRepository;

class RankingController extends AbstractController
{
    /**
     * @Route("/ranking_news", name="ranking_news")
     */
    public function index(RecordRepository $recordRepository)
    {
        return $this-> render('ranking/news.html.twig',[
            'record' => $recordRepository->getlastMonthReleases(),
        ]);
    }
}
