<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountPasswordController extends AbstractController
{
    /**
     * @Route("/compte/modifier-mdp", name="account_password")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {

$notification = null;

$user = $this->getUser();
        
$form = $this->createForm(ChangePasswordType::class, $user);

$form->handleRequest($request);

if($form->isSubmitted() && $form->isValid()){

    $old_password = $form->get('old_password')->getData();
    if($encoder->isPasswordValid($user, $old_password)){
$new_password = $form->get('new_password')->getData();
$password = $encoder->encodePassword($user, $new_password);

$user->setPassword($password);
$doctrine = $this->getDoctrine()->getManager();
$doctrine->persist($user);
//flush veut dire exécuter
$doctrine->flush();
$notification = "votre mot de passe a été modifié correctement";

    } else{
        $notification = "votre mot de passe actuel n'est pas le bon";
    }
}

        return $this->render('account/password.html.twig', [
            'form' => $form->createView(),
            'notification' =>  $notification
        ]);
    }
}
