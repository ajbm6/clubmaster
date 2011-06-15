<?php

namespace Club\LogBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Log
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Log extends EntityRepository
{
  public function findAll()
  {
    return $this->_em->createQueryBuilder()
      ->select('l')
      ->from('ClubLogBundle:Log','l')
      ->orderBy('l.id','DESC')
      ->getQuery()
      ->getResult();
  }
}
