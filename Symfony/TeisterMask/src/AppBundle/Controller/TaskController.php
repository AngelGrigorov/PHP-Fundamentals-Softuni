<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {

        $repo = $this->getDoctrine()->getRepository(Task::class);
        $openTasks = $repo->findBy(['status' => 'Open']);
        $inProgressTasks = $repo->findBy(['status' => 'In Progress']);
        $finishedTasks = $repo->findBy(['status' => 'Finished']);

        return $this->render("task/index.html.twig", ["openTasks" => $openTasks, "inProgressTasks" => $inProgressTasks, "finishedTasks" => $finishedTasks]);
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
       $task = new Task();
        if($task == null){
            return $this->redirect("/");
        }
        $form = $this->createForm(TaskType::class,$task);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirect("/");
        }
       return $this->render('task/create.html.twig',['task' => $task,'form' => $form->createView()]);
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
        $repo = $this->getDoctrine()->getRepository(Task::class);
        $task = $repo->find($id);
        if($task == null){
            return $this->redirect("/");
        }
        $form = $this->createForm(TaskType::class,$task);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render(":task:edit.html.twig",
            ["task" => $task, "form" => $form->createView()]);
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
        $repo = $this->getDoctrine()->getRepository(Task::class);
        $task = $repo->find($id);
        if($task == null){
            return $this->redirect("/");
        }
        $form = $this->createForm(TaskType::class,$task);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();
            return $this->redirect("/");
        }
        return $this->render(":task:delete.html.twig",
            ["task" => $task, "form" => $form->createView()]);
    }
}
