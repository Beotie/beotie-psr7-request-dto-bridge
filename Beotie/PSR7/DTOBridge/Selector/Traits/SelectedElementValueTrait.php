<?php
declare(strict_types=1);
/**
 * This file is part of beotie/psr7_request_dto_bridge
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 7.1
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace Beotie\PSR7\DTOBridge\Selector\Traits;

/**
 * Selected element metadata trait
 *
 * This trait is used to implement the SelectedElementInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SelectedElementValueTrait
{
    /**
     * Value
     *
     * This property store the extracted value
     *
     * @var mixed
     */
    private $value;

    /**
     * Get value
     *
     * Return the extracted value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
