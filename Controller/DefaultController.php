<?php

namespace PantaRei\Bundle\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function boilerplateAction()
    {
        return $this->render('BootstrapBundle:Default:boilerplate.html.twig');
    }

    public function carouselAction()
    {
        return $this->render('BootstrapBundle:Default:carousel.html.twig');
    }

    public function gridAction()
    {
        return $this->render('BootstrapBundle:Default:grid.html.twig');
    }

    public function indexAction()
    {
        return $this->render('BootstrapBundle:Default:index.html.twig');
    }

    public function pageAction()
    {
        return $this->render('BootstrapBundle:Default:page.html.twig');
    }

    public function signinAction()
    {
        return $this->render('BootstrapBundle:Default:signin.html.twig');
    }

    public function starterTemplateAction()
    {
        return $this->render('BootstrapBundle:Default:starter-template.html.twig');
    }
}
