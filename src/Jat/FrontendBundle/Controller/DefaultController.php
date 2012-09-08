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
     *  name = "jat_frontend_main"
     * )
     * @Template()
     */
    public function homeAction()
    {
        return $this->render('JatFrontendBundle:Default:home.html.twig',
                             array(
                                  'where' => 'Home'
                             )
        );
    }

    /**
     * @Route(
     *  "/s/{search}/",
     *  name            = "jat_frontend_search",
     *  requirements    = {
     *      "search"    = "[a-zA-Z]+"
     *  },
     *  defaults        = {
     *      "search"    = null
     *  }
     * )
     * @Template()
     */
    public function searchAction($search)
    {
        return $this->render('JatFrontendBundle:Default:home.html.twig',
                             array(
                                  'where' => 'Search: ' . $search
                             )
        );
    }

    /**
     * @Route(
     *  "/{maincat}/{subcat}/",
     *  name            = "jat_frontend_category",
     *  requirements    = {
     *      "maincat"   = "[a-zA-Z]+",
     *      "subcat"    = "[a-zA-Z]+"
     *  }
     * )
     * @Template()
     */
    public function categoryAction($maincat, $subcat)
    {
        return $this->render('JatFrontendBundle:Default:home.html.twig',
                             array(
                                  'where' => 'Category: '
                                      . $maincat . DIRECTORY_SEPARATOR
                                      . $subcat
                             )
        );
    }

    /**
     * @Route(
     *  "/{software}/",
     *  name            = "jat_frontend_software",
     *  requirements    = {
     *      "software"  = "[a-zA-Z]+"
     *  },
     *  defaults        = {
     *      "software"  = null
     *  }
     * )
     * @Template()
     */
    public function softwareAction($software)
    {
        return $this->render('JatFrontendBundle:Default:home.html.twig',
                             array(
                                  'where' => 'Software: ' . $software
                             )
        );
    }
}
