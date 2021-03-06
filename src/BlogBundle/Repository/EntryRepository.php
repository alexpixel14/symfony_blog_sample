<?php

namespace BlogBundle\Repository;
use BlogBundle\Entity\Tags;
use BlogBundle\Entity\EntryTag;
use \Doctrine\ORM\Tools\Pagination\Paginator;


/**
 * EntryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntryRepository extends \Doctrine\ORM\EntityRepository
{
    public function saveEntryTags($tags=null,$title=null,$category=null,$user=null,$entry=null){
        $em=$this->getEntityManager();     
        $tag_repo = $em->getRepository("BlogBundle:Tags");

        if($entry==null){
            $entry = $this->findOneBy(array("title"=>$title,"category"=>$category,"user"=>$user));
        }else{

        }
        $tags.=",";
        
        $tags = explode(",",$tags);

        foreach($tags as $tag){
            $isset_tag = $tag_repo->findOneBy(array("name"=>$tag));

            if(count($isset_tag)==0){
                $tag_obj = new Tags();
                $tag_obj->setName($tag);
                $tag_obj->setDescription($tag);
                if(!empty(trim($tag))){
                    $em->persist($tag_obj);
                    $em->flush();
                }

            }

            if(!empty(trim($tag))){
                $tag = $tag_repo->findOneBy(array("name"=>$tag));

                $entryTag = new EntryTag();
                $entryTag->setEntry($entry);
                $entryTag->setTag($tag);
                $em->persist($entryTag);
            }

        }

        $flush = $em->flush();

        return $flush;

    }

    public function getPaginateEntries($pageSize=5,$currentPage=1){

        $em=$this->getEntityManager();  
        
        $dql = "select e from BlogBundle\Entity\Entries e order by e.id desc";

        $query = $em->createQuery($dql)->setFirstResult($pageSize*($currentPage -1))->setMaxResults($pageSize);

        $paginator = new Paginator($query, $fetchJoinCollection = true);
        
        return $paginator;

    }

    public function getCategoryEntries($category,$pageSize=5,$currentPage=1){

        $em=$this->getEntityManager();  
        
        $dql = "select e from BlogBundle\Entity\Entries e WHERE e.category = :category order by e.id desc";

        $query = $em->createQuery($dql)->setParameter("category",$category)->setFirstResult($pageSize*($currentPage -1))->setMaxResults($pageSize);

        $paginator = new Paginator($query, $fetchJoinCollection = true);
        
        return $paginator;

    }    
}
