<?php

namespace Cwb\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        return $this->render('CwbCoreBundle:Default:homepage.html.twig');
    }
}
