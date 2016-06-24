<?php

namespace RegistroVehiculosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RegistroVehiculosBundle\Entity\Conductores;
use RegistroVehiculosBundle\Form\ConductoresType;

/**
 * Conductores controller.
 *
 */
class ConductoresController extends Controller
{
    /**
     * Lists all Conductores entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conductores = $em->getRepository('RegistroVehiculosBundle:Conductores')->findAll();

        return $this->render('conductores/index.html.twig', array(
            'conductores' => $conductores,
        ));
    }

    /**
     * Creates a new Conductores entity.
     *
     */
    public function newAction(Request $request)
    {
        $conductore = new Conductores();
        $form = $this->createForm('RegistroVehiculosBundle\Form\ConductoresType', $conductore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conductore);
            $em->flush();

            return $this->redirectToRoute('conductores_show', array('id' => $conductore->getId()));
        }

        return $this->render('conductores/new.html.twig', array(
            'conductore' => $conductore,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Conductores entity.
     *
     */
    public function showAction(Conductores $conductore)
    {
        $deleteForm = $this->createDeleteForm($conductore);

        return $this->render('conductores/show.html.twig', array(
            'conductore' => $conductore,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conductores entity.
     *
     */
    public function editAction(Request $request, Conductores $conductore)
    {
        $deleteForm = $this->createDeleteForm($conductore);
        $editForm = $this->createForm('RegistroVehiculosBundle\Form\ConductoresType', $conductore);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conductore);
            $em->flush();

            return $this->redirectToRoute('conductores_edit', array('id' => $conductore->getId()));
        }

        return $this->render('conductores/edit.html.twig', array(
            'conductore' => $conductore,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conductores entity.
     *
     */
    public function deleteAction(Request $request, Conductores $conductore)
    {
        $form = $this->createDeleteForm($conductore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($conductore);
            $em->flush();
        }

        return $this->redirectToRoute('conductores_index');
    }

    /**
     * Creates a form to delete a Conductores entity.
     *
     * @param Conductores $conductore The Conductores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conductores $conductore)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conductores_delete', array('id' => $conductore->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
