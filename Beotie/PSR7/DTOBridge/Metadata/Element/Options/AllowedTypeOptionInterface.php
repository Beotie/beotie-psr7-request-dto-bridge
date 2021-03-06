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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Options;

/**
 * Allowed type option metadata interface
 *
 * This interface define an option for the metadata element to search. It store the informations about bridging
 * procedure for each element of a DTO.
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface AllowedTypeOptionInterface
{
    /**
     * Has allowed type
     *
     * Indicate if the element has allowed type
     *
     * @return bool
     */
    public function hasAllowedTypes() : bool;

    /**
     * Set allowed types
     *
     * Set the list of allowed type for the element
     *
     * @param array $allowedTypes The allowed type list
     *
     * @return OptionMetadataInterface
     */
    public function setAllowedTypes(array $allowedTypes) : OptionMetadataInterface;

    /**
     * Get allowed types
     *
     * Return the list of allowed types for the element
     *
     * @return array
     */
    public function getAllowedTypes() : array;

    /**
     * Remove allowed type
     *
     * Remove a type from the list of allowed types for the element
     *
     * @param string $type The type to remove
     *
     * @return OptionMetadataInterface
     */
    public function removeAllowedType(string $type) : OptionMetadataInterface;

    /**
     * Add allowed type
     *
     * Add a new type to the list of allowed type for the element
     *
     * @param string $type The type to add
     *
     * @return OptionMetadataInterface
     */
    public function addAllowedType(string $type) : OptionMetadataInterface;
}
