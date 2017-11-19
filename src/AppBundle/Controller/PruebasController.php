<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;
use AppBundle\Form\CursoType;
use Symfony\Component\Validator\Constraints as Assert;

class PruebasController extends Controller
{

    public function indexAction(Request $request,$name,$page)
    {
        
        //return $this->redirect($this->generateUrl("homepage"));

        //var_dump($request->query->get("hola"));
        
        //var_dump($request->get("hola-post"));
         
        //die();

        //return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/hello-world?hola=true");
        
        $productos = array(
            array("producto"=>"Consola 2","precio"=>2),
            array("producto"=>"Consola 3","precio"=>3),
            array("producto"=>"Consola 4","precio"=>4),
            array("producto"=>"Consola 5","precio"=>5),
            array("producto"=>"Consola 6","precio"=>6),
            array("producto"=>"Consola 7","precio"=>7)
        );

        $fruta = array("manzana"=>"golden","pera"=>"rica");

        return $this->render('AppBundle:Pruebas:index.html.twig', [
            'texto' => $name." ".$page,
            'productos'=> $productos,
            'fruta'=> $fruta
        ]);        
    }

    public function createAction(){

        $curso = new Curso;
        $curso->setTitulo("Cursi adwdawad");
        $curso->setDescripcion("Cruso de adaw");
        $curso->setPrecio(50);

        $em = $this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush=$em->flush();

        if($flush!=null){
            echo "El curso no se ha creado correctamente";
        }else{
            echo "El curso se ha creado correctamente";
        }

        die();

    }

    public function readAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        $cursos = $cursos_repo->findAll();

        $curso_ochenta = $cursos_repo->findBy(array("precio"=>80));        
        echo $curso_ochenta(0)->getTitulo();

        //$curso_ochenta = $cursos_repo->findOneByPrecio(20);
        //echo $curso_ochenta->getTitulo();

        // foreach($cursos as $curso){
        //     echo $curso->getTitulo()."</br>";
        //     echo $curso->getDescripcion()."</br>";
        //     echo $curso->getPrecio()."</br></br>";
        // }

        die();
    }

    public function updateAction($id,$titulo,$descripcion,$precio){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");

        $curso = $cursos_repo->find($id);

        $curso->setTitulo($titulo);
        $curso->setDescripcion($descripcion);
        $curso->setPrecio($precio);

        $em->persist($curso);
        $flush=$em->flush();

        if($flush!=null){
            echo "El curso no se ha actualizado correctamente";
        }else{
            echo "El curso se ha actualizado correctamente";
        }

        die();

    }


    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo = $em->getRepository("AppBundle:Curso");
        
        $curso = $cursos_repo->find($id);
        $em->remove($curso);
        $flush=$em->flush();

        if($flush!=null){
            echo "El curso no se ha eliminado correctamente";
        }else{
            echo "El curso se ha eliminado correctamente";
        }

        die();

    }

    public function nativeSqlAction(){
        // # doctrine object
        $em = $this->getDoctrine()->getManager();

        // # repository para la estructura de Curso
        $cursos_repo = $em->getRepository("AppBundle:Curso");

        // # conexion database
        // $db = $em->getConnection();

        // crear consulta nativa y ejecutarla
        // $query = "SELECT * from cursos";
        // $stmt = $db->prepare($query);
        // $params = array();
        // $stmt->execute($params);
        // $cursos = $stmt->fetchAll();

        // # DQL doctrine query language

        // $query = $em->createQuery("
        // SELECT c FROM AppBundle:Curso c
        // WHERE p.precio > :precio
        // "->setParameter("precio","78"));
        // $cursos = $query->getResult();

        // querybuilder

        // $query = $cursos_repo->createQueryBuilder("c")
        // ->where("c.precio > :precio")
        // ->setParameter("precio","79")
        // ->getQuery();

        // $cursos = $query->getResult();

        // # query por repository function dentro de doctrine

        $cursos = $cursos_repo->getCursos();

        foreach($cursos as $curso){
            echo $curso->getTitulo()."</br>";
        }

        die();
    }

    public function formAction(Request $request){

        $curso = new Curso();
        $form = $this->createForm(CursoType::class,$curso);

        $form->handleRequest($request);

        if($form->isValid()){
            $status = "Formulario vàlido";
            $data = array(
                "titulo" => $form->get("titulo")->getData(),
                "descripcio"=> $form->get("descripcion")->getData(),
                "precio"=> $form->get("precio")->getData()
            );
        }else{
            $status = null;
            $data = null;
        }

        return $this->render('AppBundle:Pruebas:form.html.twig',array( 
            'form'=> $form->createView(),
            'status'=> $status,
            'data'=> $data
        ));
    }

    public function validarEmailAction($email){ 

        $emailConstraint =  new Assert\Email();
        $emailConstraint->message = "Pasame un buen correo";

        $error= $this->get("validator")->validate(
                $email,
                $emailConstraint
        );

        if(count($error)==0){
            echo "Correo valido";
        }else{
            echo $error[0]->getMessage();
        }
        die();
    }

}
 