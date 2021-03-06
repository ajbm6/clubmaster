<?php

namespace Club\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Event
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Event extends EntityRepository
{
  public function getByDate(\DateTime $date)
  {
    $c = new \DateTime($date->format('Y-m-d'));;

    $start = $c->format('Y-m-d');
    $c->modify('+1 month');
    $c->modify('-1 day');
    $stop = $c->format('Y-m-d');

    return $this->_em->createQueryBuilder()
      ->select('e')
      ->from('ClubEventBundle:Event','e')
      ->where('e.start_date > :start_date')
      ->andWhere('e.stop_date < :stop_date')
      ->setParameter('start_date', $start)
      ->setParameter('stop_date', $stop)
      ->getQuery()
      ->getResult();
  }
}
