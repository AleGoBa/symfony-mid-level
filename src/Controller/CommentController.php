<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comments', name: 'comments_index')]
    public function index(CommentRepository $commentRepository): Response
    {
        $comments = $commentRepository->findAllComments();
        return $this->render('comment/index.html.twig', compact('comments'));
    }
}
