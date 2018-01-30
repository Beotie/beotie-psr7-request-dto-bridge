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
 * Allowed type option trait
 *
 * This trait is used to implement the AllowedTypeOptionInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait AllowedTypeOptionTrait
{
    /**
     * Allowed types
     *
     * Store the list of allowed types for the element
     *
     * @var array
     */
    private $allowedTypes = [];

    /**
     * Has allowed type
     *
     * Indicate if the element has allowed type
     *
     * @return bool
     */
    public function hasAllowedTypes() : bool
    {
        return !empty($this->allowedTypes);
    }

    /**
     * Set allowed types
     *
     * Set the list of allowed type for the element
     *
     * @param array $allowedTypes The allowed type list
     *
     * @return OptionMetadataInterface
     */
    public function setAllowedTypes(array $allowedTypes) : OptionMetadataInterface
    {
        $this->allowedTypes = [];
        foreach ($allowedTypes as $allowedType) {
            $this->addAllowedType($allowedType);
        }

        return $this;
    }

    /**
     * Get allowed types
     *
     * Return the list of allowed types for the element
     *
     * @return array
     */
    public function getAllowedTypes() : array
    {
        return $this->allowedTypes;
    }

    /**
     * Remove allowed type
     *
     * Remove a type from the list of allowed types for the element
     *
     * @param string $type The type to remove
     *
     * @return OptionMetadataInterface
     */
    public function removeAllowedType(string $type) : OptionMetadataInterface
    {
        if (in_array($type, $this->allowedTypes)) {
            unset($this->allowedTypes[array_search($type, $this->allowedTypes)]);
        }

        return $this;
    }

    /**
     * Add allowed type
     *
     * Add a new type to the list of allowed type for the element
     *
     * @param string $type The type to add
     *
     * @return OptionMetadataInterface
     */
    public function addAllowedType(string $type) : OptionMetadataInterface
    {
        if (!in_array($type, $this->allowedTypes)) {
            $this->allowedTypes[] = $type;
        }

        return $this;
    }
}
