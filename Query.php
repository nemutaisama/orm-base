<?php

namespace Orm;

use Orm\Factory\BaseFactory;
use Orm\Factory\MysqlFactory;

class Query
{
    /** @var string */
    private $sql;

    /** @var BaseFactory */
    private $factory;

    public function getAll()
    {
        return $this->factory->getConnection()->executeQuery($this);
    }

    private function getFactory(): BaseFactory
    {
        if (null === $this->factory) {
            //get config params
            $this->factory = new MysqlFactory();
        }
        return $this->factory;
    }
}
