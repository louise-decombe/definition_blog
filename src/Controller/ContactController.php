<?php

namespace App\Controller;

use App\Classe\Mail;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/nous-contacter", name="contact")
     */
    public function index(Request $request): Response
    {

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->addFlash('notice', 'merci pour votre message. Nous vous répondons au plus vite');
            $datamail = $form->get('email')->getData();
            $datacontent = $form->get('content')->getData();
            $mail = new Mail();
            $mail->send('louise.decombe@gmail.com', 'louise.decombe@gmail.com', $datamail, $datacontent);

        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
