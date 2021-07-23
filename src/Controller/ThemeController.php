<?php

namespace App\Controller;

use App\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemeController extends AbstractController
{
    #[Route('/{title}', name: 'theme')]
    public function index(Theme $theme): Response
    {
        return $this->render('theme/index.html.twig', [
            'theme' => $theme,
        ]);
    }
}
