<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Band;
use AppBundle\Form\BandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BandController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $bands = $this->getDoctrine()->getRepository(Band::class)->findAll();
        return $this->render("band/index.html.twig", ["bands" => $bands]);
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $band = new Band();
        $form = $this->createForm(BandType::class, $band);


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($band);
            $em->flush();
            return $this->redirect("/");
        }


        return $this->render("band/create.html.twig",["form" => $form->createView()]);

    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Band::class);
        $band = $repo->find($id);
        if($band == null){
            return $this->redirect("/");
        }
        $form = $this->createForm(BandType::class,$band);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($band);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render(":band:edit.html.twig",
            ["band" => $band, "form" => $form->createView()]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Band::class);
        $band = $repo->find($id);
        if($band == null){
            return $this->redirect("/");
        }
        $form = $this->createForm(BandType::class,$band);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($band);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render(":band:delete.html.twig",
            ["band" => $band, "form" => $form->createView()]);
    }
}
