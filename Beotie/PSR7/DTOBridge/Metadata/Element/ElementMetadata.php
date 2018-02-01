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
namespace Beotie\PSR7\DTOBridge\Metadata\Element;

use Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits\ElementDestinationTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits\ElementOptionTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits\ElementParserTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits\ElementSourceTrait;

/**
 * Element metadata
 *
 * This class is used to store a PSR7 request element definition in order to map request elements with DTO property
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class ElementMetadata implements ElementMetadataInterface
{
    use ElementDestinationTrait,
        ElementOptionTrait,
        ElementParserTrait,
        ElementSourceTrait;
}

