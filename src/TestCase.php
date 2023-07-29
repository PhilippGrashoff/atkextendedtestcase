<?php

declare(strict_types=1);

namespace atkextendedtestcase;

use atk4\data\Persistence;
use Atk4\Data\Persistence\Sql;
use Atk4\Data\Schema\Migrator;

class TestCase extends \Atk4\Core\Phpunit\TestCase
{
    protected array $sqlitePersistenceModels = [];

    protected function getSqliteTestPersistence(array $additionalClasses = []): Persistence
    {
        $allClasses = array_merge($this->sqlitePersistenceModels, $additionalClasses);

        $persistence = new Sql('sqlite::memory:');
        $persistence->driverType = 'sqlite';

        foreach ($allClasses as $className) {
            $model = new $className($persistence);
            $migrator = new Migrator($model);
            $migrator->dropIfExists()->create();
        }

        return $persistence;
    }
}