<?php

namespace FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FrontendBundle\Entity\Job;
use FrontendBundle\Form\JobType;

/**
 * Job controller.
 *
 * @Route("/job")
 */
class JobController extends Controller {

    /**
     * Lists all Job entities.
     *
     * @Route("/", name="job_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $jobs = $em->getRepository('FrontendBundle:Job')->findAll();

        return $this->render('job/index.html.twig', array(
                    'jobs' => $jobs,
        ));
    }

    /**
     * Creates a new Job entity.
     *
     * @Route("/", name="job_create")
     * @Method("POST")
     * @Template("FrontendBundle:Job:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Job();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        // Almacenamos en una variable la lectura de los valores del formulario
        $data = $form->getData();
        // Completamos nuestra entidad auxiliar con los valores
        $mysqldate = date("Y-m-d H:i:s");
        $entity->setExpiresAt(new \DateTime($mysqldate));
        $entity->setCreatedAt(new \DateTime($mysqldate));
        $entity->setUpdatedAt(new \DateTime($mysqldate));
        $entity->setToken('aaaa');
        // Generamos una categoría
        $auxcategoria = new \FrontendBundle\Entity\Category();
        $auxcategoria->setName("genérica");
        $auxcategoria->setCategoryId('1');
        $entity->setCategory($auxcategoria);
        $entity->setIsActivated(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($auxcategoria);
        $em->persist($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('job_show', array('id' => $entity->getId())));
        // }
        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Job entity.
     *
     * @Route("/{id}", name="job_show")
     * @Method("GET")
     */
    public function showAction(Job $job) {
        $deleteForm = $this->createDeleteForm($job);

        return $this->render('job/show.html.twig', array(
                    'job' => $job,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     * @Route("/{id}/edit", name="job_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Job $job) {
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm(new JobType(), $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_edit', array('id' => $job->getId()));
        }

        return $this->render('job/edit.html.twig', array(
                    'job' => $job,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Job entity.
     *
     * @Route("/{id}", name="job_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Job $job) {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('job_index');
    }

    /**
     * Creates a form to delete a Job entity.
     *
     * @param Job $job The Job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Job $job) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('job_delete', array('id' => $job->getJobId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
