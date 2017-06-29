<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\SavePostEntity;

class DefaultController extends Controller
{
    protected $locals = array();
    /**
     * @Route("/", name="home")
     * @Method({"POST"})
     * @Template()
     */
    public function homeAction(Request $request)
    {
        $entity = new SavePostEntity();
        $arrayPOST = $request->request->all();
        $entity->setDatatext(json_encode($arrayPOST));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->locals;
    }
}
