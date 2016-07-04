<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ControleEstoque;
use AppBundle\Form\ControleEstoqueType;

/**
 * ControleEstoque controller.
 *
 * @Route("/admin/controle_estoque")
 */
class ControleEstoqueController extends Controller
{
    /**
     * Lists all ControleEstoque entities.
     *
     * @Route("/", name="admin_controle_estoque_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $controleEstoques = $em->getRepository('AppBundle:ControleEstoque')->findAll();

        return $this->render('controleestoque/index.html.twig', array(
            'controleEstoques' => $controleEstoques,
        ));
    }

    /**
     * Creates a new ControleEstoque entity.
     *
     * @Route("/new", name="admin_controle_estoque_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $controleEstoque = new ControleEstoque();
        $form = $this->createForm('AppBundle\Form\ControleEstoqueType', $controleEstoque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($controleEstoque);
            $em->flush();

            return $this->redirectToRoute('admin_controle_estoque_show', array('id' => $controleEstoque->getId()));
        }

        return $this->render('controleestoque/new.html.twig', array(
            'controleEstoque' => $controleEstoque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ControleEstoque entity.
     *
     * @Route("/{id}", name="admin_controle_estoque_show")
     * @Method("GET")
     */
    public function showAction(ControleEstoque $controleEstoque)
    {
        $deleteForm = $this->createDeleteForm($controleEstoque);

        return $this->render('controleestoque/show.html.twig', array(
            'controleEstoque' => $controleEstoque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ControleEstoque entity.
     *
     * @Route("/{id}/edit", name="admin_controle_estoque_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ControleEstoque $controleEstoque)
    {
        $deleteForm = $this->createDeleteForm($controleEstoque);
        $editForm = $this->createForm('AppBundle\Form\ControleEstoqueType', $controleEstoque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($controleEstoque);
            $em->flush();

            return $this->redirectToRoute('admin_controle_estoque_edit', array('id' => $controleEstoque->getId()));
        }

        return $this->render('controleestoque/edit.html.twig', array(
            'controleEstoque' => $controleEstoque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ControleEstoque entity.
     *
     * @Route("/{id}", name="admin_controle_estoque_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ControleEstoque $controleEstoque)
    {
        $form = $this->createDeleteForm($controleEstoque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($controleEstoque);
            $em->flush();
        }

        return $this->redirectToRoute('admin_controle_estoque_index');
    }

    /**
     * Creates a form to delete a ControleEstoque entity.
     *
     * @param ControleEstoque $controleEstoque The ControleEstoque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ControleEstoque $controleEstoque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_controle_estoque_delete', array('id' => $controleEstoque->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
