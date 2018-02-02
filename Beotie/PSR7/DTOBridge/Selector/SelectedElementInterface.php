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
namespace Beotie\PSR7\DTOBridge\Selector;

use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Selected element interface
 *
 * This interface define the main methods provided by a selected element
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface SelectedElementInterface
{
    /**
     * Get metadata
     *
     * Return the main metadata at the extraction origin
     *
     * @return ElementMetadataInterface
     */
    public function getMetadata() : ElementMetadataInterface;

    /**
     * Get value
     *
     * Return the extracted value
     *
     * @return mixed
     */
    public function getValue();
}

