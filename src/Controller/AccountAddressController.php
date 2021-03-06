<?php

namespace App\Controller;
use App\Form\AddressType;
use App\Entity\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Exception\AddressEncoderException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

// ce fichier sert 2 fois une vue pour ajouter / ou éditer une addresse d'un utilisateur

class AccountAddressController extends AbstractController
{

    private $entityManager;

    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/compte/adresse", name="account_address")
     */
    public function index(): Response
    {
        return $this->render('account/address.html.twig');
    }

    //AJOUT d'une addresse

     /**
     * @Route("/compte/ajouter-une-adresse", name="account_address_add")
     */
    public function add(Request $request): Response
    {

        $address = new Address();
        $form = $this->createForm(AddressType::class, $address);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $address->setUser($this->getUser());
            // le persiste me permet de figer de la donnée
            $this->entityManager->persist($address);
            $this->entityManager->flush();

            //ici on va ajouter une condition, si on est dans le tunnel d'achat on redirige de l'adresse au panier
            
                return $this->redirectToRoute('account_address');

        




        }

        return $this->render('account/address_add.html.twig', [
            'form' =>  $form->createView()
        ]);
    }

    //EDIT d'une addresse

     /**
     * @Route("/compte/modifier-une-adresse/{id}", name="account_address_edit")
     */
    public function edit(Request $request, $id): Response
    {

        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        if(!$address || $address->getUser() != $this->getUser()){
return $this->redirectToRoute('account_address');
        }


        $form = $this->createForm(AddressType::class, $address);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
           return $this->redirectToRoute('account_address');

        }

        return $this->render('account/address_add.html.twig', [
            'form' =>  $form->createView()
        ]);
    }

      /**   
     * @Route("/compte/supprimer-une-adresse/{id}", name="account_address_delete")
     */
    public function delete($id): Response
    {

        $address = $this->entityManager->getRepository(Address::class)->findOneById($id);

        // if l'adresse existe et que c'est bien moi l'utilisateur connecté..
        if($address && $address->getUser() == $this->getUser()){
            $this->entityManager->remove($address);
            $this->entityManager->flush();

        }

      
           return $this->redirectToRoute('account_address');

        }

     
    }



