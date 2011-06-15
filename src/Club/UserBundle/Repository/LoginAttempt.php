<?php

namespace Club\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LoginAttempt
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LoginAttempt extends EntityRepository
{
  public function findAll()
  {
    return $this->_em->createQueryBuilder()
      ->select('l')
      ->from('ClubUserBundle:LoginAttempt','l')
      ->orderBy('l.id','DESC')
      ->getQuery()
      ->getResult();
  }
}
