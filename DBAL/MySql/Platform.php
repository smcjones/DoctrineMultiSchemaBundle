<?php
namespace Shoofly\DoctrineMultiSchemaBundle\DBAL\MySql;

use Doctrine\DBAL\Platforms\MySqlPlatform;

class Platform extends MySqlPlatform
{
    use PlatformTrait;
}
