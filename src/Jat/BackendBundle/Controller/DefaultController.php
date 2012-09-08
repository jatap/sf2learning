<?php

namespace Jat\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/admin/{trailingSlash}",
     *  name="_admin_main",
     *  requirements={"trailingSlash" = "[/]{0,1}"},
     *  defaults={"trailingSlash" = "/"}
     * )
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
