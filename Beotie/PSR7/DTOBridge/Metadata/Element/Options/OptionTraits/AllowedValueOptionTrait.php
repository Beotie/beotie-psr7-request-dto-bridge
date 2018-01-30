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
 * Allowed value option trait
 *
 * This trait is used to implement the AllowedValueOptionInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait AllowedValueOptionTrait
{
    /**
     * Allowed values
     *
     * Store the list of allowed values for the element
     *
     * @var array
     */
    private $allowedValues = [];

    /**
     * Has allowed value
     *
     * Indicate if the element has allowed value
     *
     * @return bool
     */
    public function hasAllowedValues() : bool
    {
        return !empty($this->allowedValues);
    }

    /**
     * Set allowed values
     *
     * Set the list of allowed value for the element
     *
     * @param array $allowedValues The allowed value list
     *
     * @return OptionMetadataInterface
     */
    public function setAllowedValues(array $allowedValues) : OptionMetadataInterface
    {
        $this->allowedValues = [];
        foreach ($allowedValues as $allowedValue) {
            $this->addAllowedValue($allowedValue);
        }

        return $this;
    }

    /**
     * Get allowed values
     *
     * Return the list of allowed values for the element
     *
     * @return array
     */
    public function getAllowedValues() : array
    {
        return $this->allowedValues;
    }

    /**
     * Remove allowed value
     *
     * Remove a value from the list of allowed values for the element
     *
     * @param string $value The value to remove
     *
     * @return OptionMetadataInterface
     */
    public function removeAllowedValue(string $value) : OptionMetadataInterface
    {
        if (in_array($value, $this->allowedValues)) {
            unset($this->allowedValues[array_search($value, $this->allowedValues)]);
        }

        return $this;
    }

    /**
     * Add allowed value
     *
     * Add a new value to the list of allowed value for the element
     *
     * @param string $value The value to add
     *
     * @return OptionMetadataInterface
     */
    public function addAllowedValue(string $value) : OptionMetadataInterface
    {
        if (!in_array($value, $this->allowedValues)) {
            $this->allowedValues[] = $value;
        }

        return $this;
    }
}
