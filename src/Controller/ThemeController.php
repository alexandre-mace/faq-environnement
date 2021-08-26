<?php

namespace App\Controller;

use App\Entity\Theme;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemeController extends AbstractController
{
    #[Route('/climat', name: 'climat')]
    public function climat(ThemeRepository $themeRepository): Response
    {
        $theme = $themeRepository->findOneBy(['title' => 'climat']);
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }

    #[Route('/énergie', name: 'énergie')]
    public function energie(ThemeRepository $themeRepository): Response
    {
        $theme = $themeRepository->findOneBy(['title' => 'énergie']);
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }

    #[Route('/biodiversité', name: 'biodiversité')]
    public function biodiversite(ThemeRepository $themeRepository): Response
    {
        $theme = $themeRepository->findOneBy(['title' => 'biodiversité']);
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }

    #[Route('/injustice', name: 'injustice')]
    public function injustice(ThemeRepository $themeRepository): Response
    {
        $theme = $themeRepository->findOneBy(['title' => 'injustice']);
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }

    #[Route('/conséquences', name: 'conséquences')]
    public function consequences(ThemeRepository $themeRepository): Response
    {
        $theme = $themeRepository->findOneBy(['title' => 'conséquences']);
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }
}
