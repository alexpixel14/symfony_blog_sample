<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexOld()
    {

        /*

        $em = $this->getDoctrine()->getManager();
        $entry_repo = $em->getRepository("BlogBundle:Entries");
        $entries = $entry_repo->findAll();

        foreach($entries as $entry){
            echo $entry->getTitle()."</br>";
            echo $entry->getCategory()->getName()."</br>";
            echo $entry->getUser()->getName()."</br><hr>";
        }

        */
        /*
        $em = $this->getDoctrine()->getManager();
        $category_repo = $em->getRepository("BlogBundle:Categories");
        $categories = $category_repo->findAll();

        foreach($categories as $category){
            echo "categoria: ".$category->getName()."</br>";

            $entries = $category->getEntries();

            foreach($entries as $entry){
                echo "-- entrada: ".$entry->getTitle()." - ";
            }

            echo "</br>";

            echo "</hr>";

        }
        */
        
        $em = $this->getDoctrine()->getManager();
        $tag_repo = $em->getRepository("BlogBundle:Tags");
        $tags = $tag_repo->findAll();

        foreach($tags as $tag){
            echo "tag: ".$tag->getName()."</br>";

            $entryTag = $tag->getEntryTag();

            foreach($entryTag as $entry){
                echo "-- entrada: ".$entry->getEntry()->getTitle()." - ";
            }

            echo "</br>";

            echo "</hr>";

        }

        return $this->render('BlogBundle:Default:index.html.twig');
    }

    public function indexAction(){
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
