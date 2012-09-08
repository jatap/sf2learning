<?php

namespace Jat\ExtranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/",
     *  name = "jat_extranet_main"
     * )
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('JatExtranetBundle:Default:index.html.twig',
                             array(
                                  'where' => 'Home'
                             )
        );
    }
}
