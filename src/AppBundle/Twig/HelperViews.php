<?php
namespace AppBundle\Twig;

class HelperViews extends \Twig_Extension{

    public function getFunctions(){
        return array(
            'generateTable' => new \Twig_Function_Method($this,'generateTable')
        );
    }


    public function generateTable($resultSet){
        $table="<table class='table' border='2'>";
        for($i=0; $i <count($resultSet); $i++){
            $table.="<tr>";
            for($y=0; $y <count($resultSet[$i]);$y++){
                $resultSet_values=array_values($resultSet[$i]);
                $table.="<td>".$resultSet_values[$y]."</td>";
            }
            $table.="</tr>";
        }
        $table.="</table>";
        return $table;
    }

    public function getName(){
        return "app_bundle";
    }
}