<?php
namespace AppBundle\Twig;

class FilterViews extends \Twig_Extension{

    public function getFilters(){
        return array(
            new \Twig_SimpleFilter('addText',array($this,'addText'))
        );
    }

    public function addText($string,$num){
        return $string." TEXTO CONCAT".$num;
    }

    public function getName(){
        return "filter_views";
    }
}



?>