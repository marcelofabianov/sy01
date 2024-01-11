<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $post = new Post();
        $post->setTitle('A first post!');
        $post->setBody('The blog post body can be very long, so we only show a snippet of it here.');
        $manager->persist($post);
        $manager->flush();

        $post2 = new Post();
        $post2->setTitle('A second post!');
        $post2->setBody('The blog post body can also be very long, but we only show a snippet of it here.');
        $post2->setPublishedAt(new DateTimeImmutable());
        $manager->persist($post2);
        $manager->flush();
    }
}
