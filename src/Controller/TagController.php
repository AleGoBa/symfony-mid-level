<?php

namespace App\Controller;

use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    #[Route('/tags/{tag}/products', name: 'tags_tag_products')]
    public function showProducts(Tag $tag): Response
    {
        $products = $tag->getProducts();
        return $this->render('tag/products.html.twig', compact('products', 'tag'));
    }
}
