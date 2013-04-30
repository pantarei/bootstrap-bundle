<?php

namespace Pantarei\Bundle\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($path = 'index')
    {
        return $this->render('PantareiBootstrapBundle:Default:' . $path . '.html.twig');
    }
}
