<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Entries;
use BlogBundle\Form\EntriesType;

class EntryController extends Controller
{

    private $session;

    public function __construct(){
        $this->session = new Session();
    }

    public function indexAction($page){

        $pageSize = 2;

        $em = $this->getDoctrine()->getManager();
        $entry_repo = $em->getRepository("BlogBundle:Entries");
        $category_repo = $em->getRepository("BlogBundle:Categories");
        //$entries = $entry_repo->findAll();
        $entries = $entry_repo->getPaginateEntries($pageSize,$page);
        $categories = $category_repo->findAll();

        //paginacion
        $totalItems = count($entries);
        $pagesCount= ceil($totalItems/$pageSize);

        return $this->render("BlogBundle:Entry:index.html.twig",array(
            "entries" => $entries,
            "categories" => $categories,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page,
            "page_m" => $page
        ));
    }

    

    public function addAction(Request $request){

        $entry = new Entries();
        $form = $this->createForm(EntriesType::class,$entry);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){

                $em = $this->getDoctrine()->getManager();

                $category_repo = $em->getRepository("BlogBundle:Categories");
                $category = $category_repo->find($form->get("category")->getData());
                
                // user de la session
                //$user =$this->get("security.context")->getToken()->getUser();
                $user = $this->getUser();

                $file=$form['image']->getData();

                // upload file 
                if(!empty($file) && $file!=null){
                    
                    $ext=$file->guessExtension();
                    $file_name=time().".".$ext;
                    $file->move('uploads',$file_name);    
                    $entry->setImage($file_name);
                }else{
                    $entry->setImage(null);
                }
            
                $entry = new Entries();
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());
                $entry->setImage($file_name);
                $entry->setCategory($category);
                $entry->setUser($user);

                $em->persist($entry);
                $flush = $em->flush();

                $entry_repo = $em->getRepository("BlogBundle:Entries");

                $entry_repo->saveEntryTags(
                    $form->get("tags")->getData(),
                    $form->get("title")->getData(),
                    $category,
                    $user
                );

                if($flush==null){
                    $status = "La entrada se ha creado correctamente !!";
                }else{
                    $status = "La entrada no se ha creado correctamente !!";
                }

            }else{
                $status = "La entrada no se ha creado por que el formulario no es valido !!";
            }

            $this->session->getFlashBag()->add("status",$status);

            return $this->redirectToRoute("blog_index_entry");

        }

        return $this->render("BlogBundle:Entry:add.html.twig",array(
            "form" => $form->createView()
        ));
    }

    public function editAction (Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $entry_repo = $em->getRepository("BlogBundle:Entries");
        $category_repo = $em->getRepository("BlogBundle:Categories");

        $entry = $entry_repo->find($id);

        $entry_image = $entry->getImage();

        $tags='';
        foreach($entry->getEntryTag() as $entryTag){
            $tags.=$entryTag->getTag()->getName().",";
        }

        $form=$this->createForm(EntriesType::class,$entry);

        $form->handleRequest($request);

        if( $form->isSubmitted() and $form->isValid( )){

            $entry=$entry_repo->find($id);         
            $category = $category_repo->find($form->get("category")->getData());
            $user = $this->getUser();            

            /*
            $entry->setTitle($form->get("title")->getData());
            $entry->setContent($form->get("content")->getData());
            $entry->setStatus($form->get("status")->getData());
            */
            
            // upload file 
            $file=$form['image']->getData();

            
            if(!empty($file) && $file!=null){
            
                $ext=$file->guessExtension();

                $file_name=time().".".$ext;

                $file->move('uploads',$file_name);  
            
                $entry->setImage($file_name);
            
            }else{
                $entry->setImage($entry_image);
            } 
  

            $entry->setCategory($category);
            $entry->setUser($user);

            $em->persist($entry);
            $flush = $em->flush();

            //delete etiquetas
            $entry_tag_repo = $em->getRepository("BlogBundle:EntryTag");
            $entry_tags=$entry_tag_repo->findBy(array("entry"=>$entry));

            foreach ($entry_tags as $et){
                if(is_object($et)){
                    $em->remove($et);
                    $em->flush();
                }
            }

            $entry_repo->saveEntryTags(
                $form->get("tags")->getData(),
                $form->get("title")->getData(),
                $category,
                $user
            );

            if($flush==null){
                $status = "La entrada se ha editado correctamente !!";
            }else{
                $status = "La entrada no se ha editado correctamente !!";
            }

            $this->session->getFlashBag()->add("status",$status);

        }else{
            $status = "El formulario no es valido.";
            $this->session->getFlashBag()->add("status",$status);
        }

        $this->session->getFlashBag()->add("status",$status);

        return $this->render("BlogBundle:Entry:edit.html.twig",array(
            "form" => $form->createView(),
            "entry" => $entry,
            "tags" => $tags
        ));

    }

    public function deleteAction ($id){
        $em = $this->getDoctrine()->getManager();
        $entry_repo = $em->getRepository("BlogBundle:Entries");
        $entry_tag_repo = $em->getRepository("BlogBundle:EntryTag");

        $entry=$entry_repo->find($id);

        $entry_tags=$entry_tag_repo->findBy(array("entry"=>$entry));

        foreach ($entry_tags as $et){
            if(is_object($et)){
                $em->remove($et);
                $em->flush();
            }

        }
        if(is_object($entry)){
            $em->remove($entry);
            $em->flush();
        }

        return $this->redirectToRoute("blog_homepage");
    }

}
