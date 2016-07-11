<?php

class AdManager {

    protected $em;
    protected $repo;

    public function __construct(EntityManager $em) {
        $this->em = $em;
        $this->repo = $em->getRepository('AppBundle:Ad');
    }

    public function create($ad) {
        $this->em->persist($ad);
        $this->em->flush();
    }

    public function update($ad) {
        $this->em->merge($ad);
        $this->em->flush();
    }

    public function delete($ad) {
        $this->em->remove($ad);
        $this->em->flush();
    }

    public function findBy(array $criteria, array $order = []) {
        return $this->repo->findOneBy($criteria, $order);
    }

    public function findAllBy(array $criteria, array $order = []) {
        return $this->repo->findBy($criteria, $order);
    }

}
