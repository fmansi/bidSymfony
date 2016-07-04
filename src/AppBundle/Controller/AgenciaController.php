<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Agencia;
use AppBundle\Form\AgenciaType;

/**
 * Agencia controller.
 *
 * @Route("/admin/agencia")
 */
class AgenciaController extends Controller
{
    /**
     * Lists all Agencia entities.
     *
     * @Route("/", name="admin_agencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agencias = $em->getRepository('AppBundle:Agencia')->findAll();

        return $this->render('agencia/index.html.twig', array(
            'agencias' => $agencias,
        ));
    }

    /**
     * Creates a new Agencia entity.
     *
     * @Route("/new", name="admin_agencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $agencium = new Agencia();
        $form = $this->createForm('AppBundle\Form\AgenciaType', $agencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agencium);
            $em->flush();

            return $this->redirectToRoute('admin_agencia_show', array('id' => $agencium->getId()));
        }

        return $this->render('agencia/new.html.twig', array(
            'agencium' => $agencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Agencia entity.
     *
     * @Route("/{id}", name="admin_agencia_show")
     * @Method("GET")
     */
    public function showAction(Agencia $agencium)
    {
        $deleteForm = $this->createDeleteForm($agencium);

        return $this->render('agencia/show.html.twig', array(
            'agencium' => $agencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Agencia entity.
     *
     * @Route("/{id}/edit", name="admin_agencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Agencia $agencium)
    {
        $deleteForm = $this->createDeleteForm($agencium);
        $editForm = $this->createForm('AppBundle\Form\AgenciaType', $agencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agencium);
            $em->flush();

            return $this->redirectToRoute('admin_agencia_edit', array('id' => $agencium->getId()));
        }

        return $this->render('agencia/edit.html.twig', array(
            'agencium' => $agencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Agencia entity.
     *
     * @Route("/{id}", name="admin_agencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Agencia $agencium)
    {
        $form = $this->createDeleteForm($agencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agencium);
            $em->flush();
        }

        return $this->redirectToRoute('admin_agencia_index');
    }

    /**
     * Creates a form to delete a Agencia entity.
     *
     * @param Agencia $agencium The Agencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agencia $agencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_agencia_delete', array('id' => $agencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
