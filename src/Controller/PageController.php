<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $manager)
    {
        $products =  $manager->getRepository(Product::class)->findBy([], [
            'id' => 'desc'
        ]);
        return $this->render('page/index.html.twig', compact('products'));
    }
}
