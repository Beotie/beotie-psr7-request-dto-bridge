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

use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits\RequiredOptionTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits\DefaultOptionTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits\AllowedTypeOptionTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits\AllowedValueOptionTrait;

/**
 * Option metadata
 *
 * This class is used to store a PSR7 request element options to apply at bridging time
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class OptionMetadata implements OptionMetadataInterface
{
    use RequiredOptionTrait,
        DefaultOptionTrait,
        AllowedTypeOptionTrait,
        AllowedValueOptionTrait;
}
