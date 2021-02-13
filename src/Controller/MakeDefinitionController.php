<?php

namespace App\Controller;
use App\Entity\Definitions;
use App\Entity\User;
use App\Form\DefinitionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class MakeDefinitionController extends AbstractController
{
        
    private $entityManager;

    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/compte/definition", name="account_definition")
     */
    public function index(): Response
    {
        return $this->render('account/definition.html.twig');
    }

    //AJOUT d'une définition

     /**
     * @Route("/compte/ajouter-une-definition", name="account_definition_add")
     */
    public function add(Request $request): Response
    {

        $definition = new Definitions();
        $form = $this->createForm(DefinitionType::class, $definition);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $definition->setUser($this->getUser());
            // le persiste me permet de figer de la donnée
            $this->entityManager->persist($definition);
            $this->entityManager->flush();
            
                return $this->redirectToRoute('account_definition');



        }

        return $this->render('account/definition_add.html.twig', [
            'form' =>  $form->createView()
        ]);
    }

    //EDIT d'une définition

     /**
     * @Route("/compte/modifier-une-definition/{id}", name="account_definition_edit")
     */
    public function edit(Request $request, $id): Response
    {

        $definition = $this->entityManager->getRepository(Definitions::class)->findOneById($id);

        if(!$definition || $definition->getUser() != $this->getUser()){
return $this->redirectToRoute('account_definition');
        }


        $form = $this->createForm(DefinitionType::class, $definition);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
           return $this->redirectToRoute('account_definition');

        }

        return $this->render('account/definition_add.html.twig', [
            'form' =>  $form->createView()
        ]);
    }

      /**   
     * @Route("/compte/supprimer-une-definition/{id}", name="account_definition_delete")
     */
    public function delete($id): Response
    {

        $definition = $this->entityManager->getRepository(Definitions::class)->findOneById($id);

        // if la def existe et que c'est bien moi l'utilisateur connecté..
        if($definition && $definition->getUser() == $this->getUser()){
            $this->entityManager->remove($definition);
            $this->entityManager->flush();

        }

      
           return $this->redirectToRoute('account_definition');

        }


}

