<?php

namespace App\DataFixtures;

use App\Domain\DefaultData;
use App\Entity\Question;
use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private $defaultData;

    public function __construct(DefaultData $defaultData)
    {
        $this->defaultData = $defaultData;
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->defaultData->getData() as $dataTheme) {
            $theme = new Theme();
            $theme->setTitle($dataTheme['theme']);

            foreach ($dataTheme['questions'] as $questionData) {
                $question = new Question();
                $question->setTitle($questionData['title']);
                $question->setAnswer($questionData['answer']);
                $question->setPosition($questionData['position']);
                $question->setLinks($questionData['links']);

                $theme->addQuestion($question);
                $manager->persist($question);
            }

            $manager->persist($theme);
        }

        $manager->flush();
    }
}
