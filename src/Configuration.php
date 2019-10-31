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
 * @JMS\XmlRoot(name="phpunit")
 */
final class Configuration
{
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $backupGlobals; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $backupStaticAttributes; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutChangesToGlobalState; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutCoversAnnotation; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutOutputDuringTests; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutResourceUsageDuringSmallTests; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutTestsThatDoNotTestAnything; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $beStrictAboutTodoAnnotatedTests; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $bootstrap; // "http://tempuri.org"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $cacheResult; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $cacheResultFile; // "http://tempuri.org"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $cacheTokens; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $colors; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $columns; // "80"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $convertDeprecationsToExceptions; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $convertErrorsToExceptions; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $convertNoticesToExceptions; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $convertWarningsToExceptions; // "true"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $defaultTestSuite; // ""
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $defaultTimeLimit; // "0"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $disableCodeCoverageIgnore; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $enforceTimeLimit; // "false"

    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $executionOrder; // "default"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $extensionsDirectory; // ""
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $failOnRisky; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $failOnWarning; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $forceCoversAnnotation; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $ignoreDeprecatedCodeUnitsFromCodeCoverage; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $noInteraction; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $printerClass; // "PHPUnit\TextUI\ResultPrinter"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $printerFile; // "http://tempuri.org"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $processIsolation; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $registerMockObjectsFromTestArgumentsRecursively; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $resolveDependencies; // "true"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $reverseDefectList; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stderr; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnDefect; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnError; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnFailure; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnIncomplete; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnRisky; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnSkipped; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $stopOnWarning; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $testSuiteLoaderClass; // "PHPUnit\Runner\StandardTestSuiteLoader"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    public $testSuiteLoaderFile; // "http://tempuri.org"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $testdox; // "false"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $timeoutForLargeTests; // "60"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $timeoutForMediumTests; // "10"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("int")
     *
     * @var int
     */
    public $timeoutForSmallTests; // "1"
    /**
     * @JMS\XmlAttribute
     * @JMS\Type("bool")
     *
     * @var bool
     */
    public $verbose; // "false"

    /**
     * @JMS\XmlList(entry = "testsuite", inline = false)
     * @JMS\Type("array<PHPUnitSDK\TestSuite>")
     *
     * @var TestSuite[]
     */
    public $testsuites = [];
}
