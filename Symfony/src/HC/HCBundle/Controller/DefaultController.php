<?php

namespace HC\HCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('HCHCBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function articulosAction(){
        $articulos = array(
            array('id'=>1, 'title'=>'Articulo numero 1', 'created'=>'2013-07-02'),
            array('id'=>2, 'title'=>'Articulo numero 2', 'created'=>'2013-07-02'),
            array('id'=>3, 'title'=>'Articulo numero 3', 'created'=>'2013-07-02')
        );
        return $this->render('HCHCBundle:Default:articulos.html.twig', array('articulos'=>$articulos));
    }
    
}
