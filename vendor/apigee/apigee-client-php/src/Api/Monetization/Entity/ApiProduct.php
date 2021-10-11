<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\Monetization\Entity;

use Apigee\Edge\Entity\Property\DescriptionPropertyAwareTrait;
use Apigee\Edge\Entity\Property\DisplayNamePropertyAwareTrait;
use Apigee\Edge\Entity\Property\NamePropertyAwareTrait;
use Apigee\Edge\Entity\Property\StatusPropertyAwareTrait;

class ApiProduct extends OrganizationAwareEntity implements ApiProductInterface
{
    use DescriptionPropertyAwareTrait;
    use DisplayNamePropertyAwareTrait;
    use NamePropertyAwareTrait;
    use StatusPropertyAwareTrait;

    /** @var string|null */
    protected $transactionSuccessCriteria;

    /**
     * {@inheritdoc}
     */
    public function getTransactionSuccessCriteria(): ?string
    {
        return $this->transactionSuccessCriteria;
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionSuccessCriteria(?string $transactionSuccessCriteria): void
    {
        $this->transactionSuccessCriteria = $transactionSuccessCriteria;
    }
}
