<?php

namespace App\Repository\Framework\Mirror;

use App\Entity\Framework\Mirror\Framework;
use App\Entity\Framework\Mirror\Server;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Server[] findAll()
 * @method Server|null findOneByUrl(string $url)
 */
class ServerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Server::class);
    }

    public function findFrameworkOnServer(string $identifier, Server $server): ?Framework
    {
        return $this->_em->getRepository(Framework::class)
            ->findOneBy(['identifier' => $identifier, 'server' => $server])
        ;
    }

    /**
     * @return array|Server[]
     */
    public function findAllForList(): array
    {
        return $this->createQueryBuilder('server')
            ->select('server, framework')
            ->leftJoin('server.frameworks', 'framework')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findNext(): ?Server
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.nextCheck < :now')
            ->andWhere('s.nextCheck IS NOT NULL')
            ->andWhere('s.checkServer = 1')
            ->addOrderBy('s.priority', 'DESC')
            ->addOrderBy('s.lastCheck', 'ASC')
            ->getQuery()
            ->setParameter('now', new \DateTimeImmutable())
            ->setMaxResults(1)
            ->getOneOrNullResult()
            ;
    }
}
