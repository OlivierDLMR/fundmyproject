<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        return $this->render('default/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    public function Category()
{
    $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
    return $this->render('category/_thumbail.html.twig', [
        'categories' => $categories
    ]);
}




}
