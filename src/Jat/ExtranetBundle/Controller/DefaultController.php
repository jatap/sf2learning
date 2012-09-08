<?php

namespace Jat\ExtranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/extranet/{trailingSlash}", name="extranet",
     *        requirements={"trailingSlash" = "[/]{0,1}"},
     *        defaults={"trailingSlash" = "/"})
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
