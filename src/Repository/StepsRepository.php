<?php

namespace App\Repository;

use App\Entity\Steps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Steps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Steps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Steps[]    findAll()
 * @method Steps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Steps::class);
    }

    // UnArchived
    public function setChangeStepsForFinishProjectsFront($id)
    {
        $sql = "update App\Entity\Steps as t set t.finished = 1 where t.id = :id";
        $query = $this->getEntityManager()->createQuery($sql)->setParameters(['id' => $id]);
        return $query->getResult();
    }
}
