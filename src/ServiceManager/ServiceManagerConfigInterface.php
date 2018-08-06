<?php
/**
 * kiwi-suite/contract (https://github.com/kiwi-suite/contract)
 *
 * @package kiwi-suite/contract
 * @link https://github.com/kiwi-suite/contract
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace KiwiSuite\Contract\ServiceManager;

use KiwiSuite\Contract\Application\SerializableServiceInterface;

interface ServiceManagerConfigInterface extends SerializableServiceInterface
{
    /**
     * @return array
     */
    public function getFactories(): array;

    /**
     * @return array
     */
    public function getDelegators(): array;

    /**
     * @return array
     */
    public function getInitializers(): array;

    /**
     * @return array
     */
    public function getLazyServices(): array;

    /**
     * @return array
     */
    public function getSubManagers(): array;

    /**
     * @return array
     */
    public function getConfig(): array;

    /**
     * @return array
     */
    public function getNamedServices(): array;

    /**
     * @param string|null $name
     * @param null $default
     * @return mixed
     */
    public function getMetadata(string $name = null, $default = null);
}
