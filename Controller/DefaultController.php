<?php

namespace Pantarei\Bundle\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function boilerplateAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:boilerplate.html.twig');
    }

    public function carouselAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:carousel.html.twig');
    }

    public function gridAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:grid.html.twig');
    }

    public function indexAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:index.html.twig');
    }

    public function pageAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:page.html.twig');
    }

    public function signinAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:signin.html.twig');
    }

    public function starterTemplateAction()
    {
        return $this->render('PantareiBootstrapBundle:Default:starter-template.html.twig');
    }
}
