<?php

namespace PhonebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use PhonebookBundle\Entity\Contact;
use PhonebookBundle\Form\ContactType;
class ContactController extends Controller
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $session->start();
        $contacts = $session->get('contacts',[]);

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $contacts[] = $contact;
            $session->set('contacts',$contacts);
        }
        return $this->render('default/index.html.twig', array('contacts' => $contacts));
    }
}
