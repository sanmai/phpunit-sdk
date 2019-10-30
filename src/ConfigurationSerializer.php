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

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

final class ConfigurationSerializer
{
    const SERIALIZATION_XML = 'xml';
    const TARGET_TYPE = Configuration::class;

    /** @var SerializerInterface */
    private $serializer;

    public function __construct()
    {
        /** @var SerializerBuilder $builder */
        $builder = SerializerBuilder::create();

        $builder->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()));

        /** @psalm-suppress MixedAssignment */
        $this->serializer = $builder->build();

        // @codeCoverageIgnoreStart

        AnnotationReader::addGlobalIgnoredName('phan');
        AnnotationReader::addGlobalIgnoredName('psalm');
        AnnotationReader::addGlobalIgnoredName('template');

        if (\method_exists(AnnotationRegistry::class, 'registerUniqueLoader')) {
            /** @phan-suppress-next-line PhanDeprecatedFunction */
            AnnotationRegistry::registerUniqueLoader('class_exists');
        }

        // @codeCoverageIgnoreEnd
    }

    public function serialize(Configuration $data): string
    {
        return $this->serializer->serialize($data, self::SERIALIZATION_XML);
    }

    public function deserialize(string $data): Configuration
    {
        return $this->serializer->deserialize($data, self::TARGET_TYPE, self::SERIALIZATION_XML);
    }
}
