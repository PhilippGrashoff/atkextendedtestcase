<?php

declare(strict_types=1);

namespace atkextendedtestcase\tests;

use atkextendedtestcase\TestCase;
use atkextendedtestcase\tests\testmodels\TestModel1;
use atkextendedtestcase\tests\testmodels\TestModel2;

class TestCaseTest extends TestCase
{

    protected array $sqlitePersistenceModels = [
        TestModel1::class
    ];

    public function testTableIsCreated(): void
    {
        $persistence = $this->getSqliteTestPersistence();
        $testModel1 = new TestModel1($persistence);
        self::assertTrue(true);
    }

    public function testAdditionalModels(): void
    {
        $persistence = $this->getSqliteTestPersistence();
        $testModel2 = new TestModel2($persistence);
        self::assertTrue(true);
    }
}