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

/**
 * @covers \PHPUnitSDK\ConfigurationSerializer
 */
final class ConfigurationSerializerTest extends TestCase
{
    public function test_it_serializes_simple_configuration_with_true_value()
    {
        $configuration = $this->getSerializer()->deserialize('<?xml version="1.0" encoding="utf-8" ?><phpunit backupGlobals="true" />');

        $this->assertInstanceOf(\PHPUnitSDK\Configuration::class, $configuration);
        $this->assertTrue($configuration->backupGlobals);

        $this->assertSame('<?xml version="1.0" encoding="UTF-8"?>
<phpunit backupGlobals="true"/>
', $this->getSerializer()->serialize($configuration));
    }

    public function test_it_serializes_simple_configuration_with_false_value()
    {
        $configuration = $this->getSerializer()->deserialize('<?xml version="1.0" encoding="utf-8" ?><phpunit backupGlobals="false" />');

        $this->assertFalse($configuration->backupGlobals);

        $this->assertSame('<?xml version="1.0" encoding="UTF-8"?>
<phpunit backupGlobals="false"/>
', $this->getSerializer()->serialize($configuration));
    }

    public function test_it_deserializes_testsuite_list()
    {
        $configuration = $this->getSerializer()->deserialize('<?xml version="1.0" encoding="utf-8" ?><phpunit><testsuites><testsuite name="Foo" /><testsuite name="Bar" /></testsuites></phpunit>');

        $this->assertCount(2, $configuration->testsuites);

        $this->assertSame('Foo', $configuration->testsuites[0]->name);
        $this->assertSame('Bar', $configuration->testsuites[1]->name);

        $this->assertSame('<?xml version="1.0" encoding="UTF-8"?>
<phpunit>
  <testsuites>
    <testsuite name="Foo"/>
    <testsuite name="Bar"/>
  </testsuites>
</phpunit>
', $this->getSerializer()->serialize($configuration));
    }

    /**
     * @dataProvider xmlProvider
     *
     * @param mixed $input
     */
    public function test_it_serialized_and_deserializes_to_the_same_xml($input)
    {
        $configuration = $this->getSerializer()->deserialize($input);

        $this->assertSame($input, $this->getSerializer()->serialize($configuration));
    }

    public function xmlProvider()
    {
        foreach (glob(__DIR__.'/Fixtures/data/*.xml') as $filename) {
            yield [
                file_get_contents($filename),
            ];
        }
    }
}
