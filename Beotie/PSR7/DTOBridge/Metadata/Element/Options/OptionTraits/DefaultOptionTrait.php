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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits;

use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadataInterface;

/**
 * Default option trait
 *
 * This trait is used to implement the DefaultOptionInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait DefaultOptionTrait
{
    /**
     * Has default
     *
     * Store the default state of the element
     *
     * @var bool
     */
    private $hasDefault = false;

    /**
     * Default
     *
     * Store the default value of the element
     *
     * @var mixed
     */
    private $default;

    /**
     * Has default
     *
     * Indicate if the element has a default value or not
     *
     * @return bool
     */
    public function hasDefault() : bool
    {
        return $this->hasDefault;
    }

    /**
     * Get default
     *
     * Return the default value of the element
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set default
     *
     * Set up the default value of the element
     *
     * @param mixed $value The default value
     *
     * @return OptionMetadataInterface
     */
    public function setDefault($value) : OptionMetadataInterface
    {
        $this->hasDefault = true;
        $this->default = $value;

        return $this;
    }

    /**
     * Remove default
     *
     * Remove the default value of the element
     *
     * @return OptionMetadataInterface
     */
    public function removeDefault() : OptionMetadataInterface
    {
        $this->hasDefault = false;
        $this->default = null;

        return $this;
    }
}
