<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Spryk\Model\Spryk\Definition\Argument;

interface ArgumentInterface
{
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return bool
     */
    public function getAllowOverride(): bool;

    /**
     * @param bool $allowOverride
     */
    public function setAllowOverride(bool $allowOverride): void;

    /**
     * @param array $callbacks
     *
     * @return $this
     */
    public function setCallbacks(array $callbacks);

    /**
     * @return string[]
     */
    public function getCallbacks(): array;

    /**
     * @return mixed
     */
    public function __toString();
}
