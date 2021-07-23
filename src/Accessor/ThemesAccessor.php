<?php


namespace App\Accessor;


use App\Repository\ThemeRepository;

class ThemesAccessor
{
    private ThemeRepository $themesRepository;

    public function __construct(ThemeRepository $themesRepository)
    {
        $this->themesRepository = $themesRepository;
    }

    public function access(): array
    {
        return $this->themesRepository->findAll();
    }
}