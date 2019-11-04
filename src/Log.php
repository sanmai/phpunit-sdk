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

/**
 * @JMS\XmlRoot(name="log")
 */
final class Log
{
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $type;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $target;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $lowUpperBound;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $highLowerBound;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $threshold;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $showUncoveredFiles;

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $showOnlySummary;
}

/**
    <log type="coverage-html" target="/tmp/report" lowUpperBound="50" highLowerBound="90"/>
<log type="coverage-clover" target="/tmp/clover.xml"/>
<log type="coverage-crap4j" threshold="50" target="/tmp/crap4j.xml"/>
<log type="coverage-text" showUncoveredFiles="true" showOnlySummary="true" target="/tmp/coverage.txt"/>
<log type="json" target="/tmp/logfile.json"/>
<log type="plain" target="/tmp/logfile.txt"/>
<log type="tap" target="/tmp/logfile.tap"/>
<log type="junit" target="/tmp/logfile.xml"/>
<log type="testdox-html" target="/tmp/testdox.html"/>
<log type="testdox-text" target="/tmp/testdox.txt"/>
<log type="testdox-xml" target="/tmp/testdox.xml"/>*/
