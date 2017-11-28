<?php
/**
 * Created by PhpStorm.
 * User: Sofyann
 * Date: 27/11/2017
 * Time: 12:17
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublishedOrderedBysize(){
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount','DESC')
            ->getQuery()
            ->execute();
    }
}