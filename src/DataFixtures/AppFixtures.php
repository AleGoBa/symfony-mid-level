<?php

namespace App\DataFixtures;

use App\Factory\CommentFactory;
use App\Factory\ProductFactory;
use App\Factory\TagFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ProductFactory::createMany(5, [
            'tags' => TagFactory::randomSet(9),
            'comments' => CommentFactory::new()->many(4, 6)
        ]);

        $manager->flush();
    }
}
