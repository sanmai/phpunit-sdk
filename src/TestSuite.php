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

namespace PHPUnitSDK;

/** @phan-suppress-next-line PhanUnreferencedUseNormal */
use JMS\Serializer\Annotation as JMS;
use PHPUnitSDK\TestSuite\Directory;

/**
 * @JMS\XmlRoot(name="testsuite")
 */
final class TestSuite
{
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $name;

    /**
     * @JMS\XmlList(entry = "directory", inline = true)
     * @JMS\Type("array<PHPUnitSDK\TestSuite\Directory>")
     *
     * @var Directory[]
     */
    public $directories = [];

    /**
     * @JMS\XmlList(entry = "file", inline = true)
     * @JMS\Type("array<PHPUnitSDK\TestSuite\File>")
     *
     * @var File[]
     */
    public $files = [];
}

/*
 <testsuite name="My Test Suite">
 <directory suffix="Test.php" phpVersion="5.3.0" phpVersionOperator=">=">/path/to/files</directory>
 <file phpVersion="5.3.0" phpVersionOperator=">=">/path/to/MyTest.php</file>
 </testsuite>
 */
