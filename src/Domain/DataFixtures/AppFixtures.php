<?php

namespace App\Domain\DataFixtures;

use App\Domain\Factory\Article\ArticleFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ArticleFactory::createMany(25);
        $manager->flush();
    }
}
