<?php

namespace Mbcs\MbcsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MbcsController extends Controller
{
    public function accueilAction()
    {
        return $this->render('MbcsBundle:Visiteur:accueil.html.twig');
    }

    public function ficheAction()
    {
        return $this->render('MbcsBundle:Visiteur:fiche.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('MbcsBundle:Visiteur:contact.html.twig');
    }
    
    public function catalogueAction()
    {
        return $this->render('MbcsBundle:Visiteur:catalogue.html.twig');
    }
    
    public function aproposAction()
    {
        return $this->render('MbcsBundle:Visiteur:apropos.html.twig');
    }
    
    public function cgvAction()
    {
        return $this->render('MbcsBundle:Visiteur:cgv.html.twig');
    }
    
}
