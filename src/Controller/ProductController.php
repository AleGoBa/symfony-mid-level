<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products/{product}', name: 'products_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render(
            'product/show.html.twig',
            compact('product')
        );
    }
}
