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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Source;

use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceTraits\SourceNameTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceTraits\SourceLocationTrait;

/**
 * From metadata
 *
 * This class is used to store a PSR7 request element to search at bridging time
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SourceMetadata implements SourceMetadataInterface
{
    use SourceNameTrait,
        SourceLocationTrait;
}
