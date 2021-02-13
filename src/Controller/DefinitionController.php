<?php

namespace App\Controller;
use App\Classe\Search;
use App\Form\SearchType;
use App\Entity\Definitions;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefinitionController extends AbstractController
{

    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;

    }

  /**
     * @Route("/definition", name="definition")
     */
    public function index(Request $request, EntityManagerInterface $entityManager)
    {
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $definitions = $this->entityManager->getRepository(Definitions::class)->findWithSearch($search);
        } else {
            $definitions = $this->entityManager->getRepository(Definitions::class)->findAll();
        }
        return $this->render('definition/index.html.twig', [
            'definitions' => $definitions,
            'form' => $form->createView()
        ]);

   
    }


        

    

     /**
     * @Route("/definition/{slug}", name="definition_show")
     */
    public function show($slug): Response
    {

        $definitions = $this->entityManager->getRepository(Definitions::class)->findOneBySlug($slug) ;

if(!$definitions){
    return $this->redirectToRoute('definition');
}

        return $this->render('definition/show.html.twig', [
            'definitions' => $definitions
        ]);
    }



}
