<?php
/**
 * Copyright 2019 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Tests\PHPUnitSDK;

use PHPUnitSDK\Log;

/**
 * @covers \PHPUnitSDK\Log
 */
final class LoggingTest extends TestCase
{
    public function test_it_serializes_simple_configuration()
    {
        $configuration = new \PHPUnitSDK\Configuration();

        $log = new Log();
        $log->type = 'coverage-text';

        $configuration->logging[] = $log;

        $this->assertSame('<?xml version="1.0" encoding="UTF-8"?>
<phpunit>
  <logging>
    <log type="coverage-text"/>
  </logging>
</phpunit>
', $this->getSerializer()->serialize($configuration));
    }

    public function test_it_deserializes_simple_configuration()
    {
        $configuration = $this->getSerializer()->deserialize('<?xml version="1.0" encoding="utf-8" ?><phpunit><logging><log type="coverage-text"/></logging></phpunit>');
        /** @var $configuration \PHPUnitSDK\Configuration */
        $this->assertInstanceOf(\PHPUnitSDK\Configuration::class, $configuration);
        $this->assertNotEmpty($configuration->logging);

        $this->assertSame('<?xml version="1.0" encoding="UTF-8"?>
<phpunit>
  <logging>
    <log type="coverage-text"/>
  </logging>
</phpunit>
', $this->getSerializer()->serialize($configuration));
    }
}
