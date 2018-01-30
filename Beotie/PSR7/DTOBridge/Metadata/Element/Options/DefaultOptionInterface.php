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
 * Default option metadata interface
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
interface DefaultOptionInterface
{
    /**
     * Has default
     *
     * Indicate if the element has a default value or not
     *
     * @return bool
     */
    public function hasDefault() : bool;

    /**
     * Get default
     *
     * Return the default value of the element
     *
     * @return mixed
     */
    public function getDefault();

    /**
     * Set default
     *
     * Set up the default value of the element
     *
     * @param mixed $value The default value
     *
     * @return OptionMetadataInterface
     */
    public function setDefault($value) : OptionMetadataInterface;

    /**
     * Remove default
     *
     * Remove the default value of the element
     *
     * @return OptionMetadataInterface
     */
    public function removeDefault() : OptionMetadataInterface;
}
