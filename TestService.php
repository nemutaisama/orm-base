<?php

namespace Orm;

use Orm\Factory\BaseFactory;
use Orm\Factory\MysqlFactory;
use Orm\QueryBuilder\BaseBuilder;

class TestService
{
    private $factory;

    public function getBooks(): array
    {
        $qb = $this->getQueryBuilder();

        $qb
            ->select('name, author, year')
            ->from('books')
            ->limit(10)
            ->offset(30)
            ;
        $qb->query()->getAll();
    }

    public function getJournals(): array
    {

    }

    private function getFactory(): BaseFactory
    {
        if (null === $this->factory) {
            //get config params
            $this->factory = new MysqlFactory();
        }
        return $this->factory;
    }

    private function getQueryBuilder(): BaseBuilder
    {
        return $this->factory->getQueryBuilder();
    }
}
