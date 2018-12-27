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
namespace Ixocreate\Contract\Type;

interface TypeInterface extends \JsonSerializable
{
    const TYPE_STRING = 'string';
    const TYPE_INT = 'int';
    const TYPE_FLOAT = 'float';
    const TYPE_BOOL = 'bool';
    const TYPE_ARRAY = 'array';
    const TYPE_CALLABLE = 'callable';

    /**
     * @param $value
     * @param array $options
     * @return TypeInterface
     */
    public function create($value, array $options = []): TypeInterface;

    /**
     * @return mixed
     */
    public function value();

    /**
     * @return mixed
     * @deprecated
     */
    public function getValue();

    /**
     * @return array
     */
    public function options(): array;

    /**
     * @return mixed
     */
    public function __debugInfo();
}
