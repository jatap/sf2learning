<?php

namespace Jat\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/",
     *  name="_front_main"
     * )
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
