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
use PHPUnitSDK\Php\Ini;

/**
 * @JMS\XmlRoot(name="php")
 */
final class Php
{
    /**
     * @JMS\XmlList(entry = "includePath", inline = true)
     * @JMS\Type("array<string>")
     *
     * @var string[]
     */
    public $includePath = [];

    /**
     * @JMS\XmlList(entry = "ini", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $ini = [];

    /**
     * @JMS\XmlList(entry = "const", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $const = [];

    /**
     * @JMS\XmlList(entry = "var", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $var = [];

    /**
     * @JMS\XmlList(entry = "env", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\Env>")
     *
     * @var \PHPUnitSDK\Php\Env[]
     */
    public $env = [];

    /**
     * @JMS\XmlList(entry = "post", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $post = [];

    /**
     * @JMS\XmlList(entry = "get", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $get = [];

    /**
     * @JMS\XmlList(entry = "cookie", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $cookie = [];

    /**
     * @JMS\XmlList(entry = "server", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $server = [];

    /**
     * @JMS\XmlList(entry = "files", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $files = [];

    /**
     * @JMS\XmlList(entry = "request", inline = true)
     * @JMS\Type("array<PHPUnitSDK\Php\NameValue>")
     *
     * @var \PHPUnitSDK\Php\NameValue[]
     */
    public $request = [];
}

/*
<php>
<includePath>.</includePath>
<includePath>/path/to/lib</includePath>
<ini name="foo" value="bar"/>
<ini name="highlight.keyword" value="#123456"/>
<ini name="highlight.string" value="TEST_FILES_PATH"/>
<const name="FOO" value="false"/>
<const name="BAR" value="true"/>
<var name="foo" value="false"/>
<env name="foo" value="true"/>
<env name="foo_force" value="forced" force="true"/>
<env name="bar" value="true" verbatim="true"/>
<post name="foo" value="bar"/>
<get name="foo" value="bar"/>
<cookie name="foo" value="bar"/>
<server name="foo" value="bar"/>
<files name="foo" value="bar"/>
<request name="foo" value="bar"/>
</php>
*/
