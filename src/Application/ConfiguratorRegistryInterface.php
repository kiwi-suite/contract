<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\Application;

interface ConfiguratorRegistryInterface
{
    /**
     * @param string $name
     * @param ConfiguratorInterface $configurator
     */
    public function add(string $name, ConfiguratorInterface $configurator): void;

    /**
     * @return ConfiguratorInterface[]
     */
    public function all(): array;

    /**
     * @param string $name
     * @return ConfiguratorInterface
     */
    public function get(string $name);

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;
}
