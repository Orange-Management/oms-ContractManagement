<?php
/**
 * Karaka
 *
 * PHP Version 8.1
 *
 * @package   Modules\ContractManagement\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\ContractManagement\Admin;

use phpOMS\Module\StatusAbstract;

/**
 * Status class.
 *
 * @package Modules\ContractManagement\Admin
 * @license OMS License 1.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
final class Status extends StatusAbstract
{
    /**
     * Path of the file
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;
}
