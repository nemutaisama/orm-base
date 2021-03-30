<?php

namespace Orm\Factory;

abstract class BaseFactory
{
    abstract public function getQueryBuilder();

    abstract public function getConnection();

}
