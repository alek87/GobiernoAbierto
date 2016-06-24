<?php

namespace RegistroVehiculosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RegistroVehiculosBundle\Entity\Vehiculos;
use RegistroVehiculosBundle\Form\VehiculosType;

/**
 * Vehiculos controller.
 *
 */
class VehiculosController extends Controller
{
    /**
     * Lists all Vehiculos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vehiculos = $em->getRepository('RegistroVehiculosBundle:Vehiculos')->findAll();

        return $this->render('vehiculos/index.html.twig', array(
            'vehiculos' => $vehiculos,
        ));
    }

    /**
     * Creates a new Vehiculos entity.
     *
     */
    public function newAction(Request $request)
    {
        $vehiculo = new Vehiculos();
        $form = $this->createForm('RegistroVehiculosBundle\Form\VehiculosType', $vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehiculo);
            $em->flush();

            return $this->redirectToRoute('vehiculos_show', array('id' => $vehiculo->getId()));
        }

        return $this->render('vehiculos/new.html.twig', array(
            'vehiculo' => $vehiculo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vehiculos entity.
     *
     */
    public function showAction(Vehiculos $vehiculo)
    {
        $deleteForm = $this->createDeleteForm($vehiculo);

        return $this->render('vehiculos/show.html.twig', array(
            'vehiculo' => $vehiculo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vehiculos entity.
     *
     */
    public function editAction(Request $request, Vehiculos $vehiculo)
    {
        $deleteForm = $this->createDeleteForm($vehiculo);
        $editForm = $this->createForm('RegistroVehiculosBundle\Form\VehiculosType', $vehiculo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehiculo);
            $em->flush();

            return $this->redirectToRoute('vehiculos_edit', array('id' => $vehiculo->getId()));
        }

        return $this->render('vehiculos/edit.html.twig', array(
            'vehiculo' => $vehiculo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Vehiculos entity.
     *
     */
    public function deleteAction(Request $request, Vehiculos $vehiculo)
    {
        $form = $this->createDeleteForm($vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vehiculo);
            $em->flush();
        }

        return $this->redirectToRoute('vehiculos_index');
    }

    /**
     * Creates a form to delete a Vehiculos entity.
     *
     * @param Vehiculos $vehiculo The Vehiculos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vehiculos $vehiculo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vehiculos_delete', array('id' => $vehiculo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
