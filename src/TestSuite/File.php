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

namespace PHPUnitSDK\TestSuite;

/** @phan-suppress-next-line PhanUnreferencedUseNormal */
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="file")
 *
 *  <file phpVersion="5.3.0" phpVersionOperator=">=">/path/to/MyTest.php</file>
 */
final class File
{
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $phpVersion;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $phpVersionOperator;

    /**
     * @JMS\XmlValue
     * @JMS\Type("string")
     *
     * @var string
     */
    public $path;
}
