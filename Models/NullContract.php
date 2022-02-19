<?php
/**
 * Karaka
 *
 * PHP Version 8.0
 *
 * @package   Modules\ContractManagement\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://karaka.app
 */
declare(strict_types=1);

namespace Modules\ContractManagement\Models;

/**
 * Contract model.
 *
 * @package Modules\ContractManagement\Models
 * @license OMS License 1.0
 * @link    https://karaka.app
 * @since   1.0.0
 */
final class NullContract extends Contract
{
    /**
     * Constructor
     *
     * @param int $id Model id
     *
     * @since 1.0.0
     */
    public function __construct(int $id = 0)
    {
        $this->id = $id;
        parent::__construct();
    }
}
