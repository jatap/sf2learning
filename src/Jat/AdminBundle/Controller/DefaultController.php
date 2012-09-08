<?php

namespace Jat\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/",
     *  name = "jat_admin_main"
     * )
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('JatAdminBundle:Default:index.html.twig',
                             array(
                                  'where' => 'Home'
                             )
        );
    }
}
