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
namespace KiwiSuite\Contract\Schema\Listing;

interface ElementInterface extends \JsonSerializable
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return bool
     */
    public function sortable(): bool;

    /**
     * @return bool
     */
    public function searchable(): bool;
}
