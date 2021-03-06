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
 * Required option metadata interface
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
interface RequiredOptionInterface
{
    /**
     * Is required
     *
     * Return whether the element is required or not
     *
     * @return bool
     */
    public function isRequired() : bool;

    /**
     * Set required
     *
     * Set up the element required state
     *
     * @param bool $require The element requirement state
     *
     * @return OptionMetadataInterface
     */
    public function setRequired(bool $require) : OptionMetadataInterface;
}
