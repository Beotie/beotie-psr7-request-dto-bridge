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

use Beotie\PSR7\DTOBridge\Selector\Traits\SelectedElementMetadataTrait;
use Beotie\PSR7\DTOBridge\Selector\Traits\SelectedElementValueTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * SelectedElement
 *
 * This class is used to represent a resolved request element
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SelectedElement implements SelectedElementInterface
{
    use SelectedElementMetadataTrait, SelectedElementValueTrait;

    /**
     * Construct
     *
     * The original SelectedElement constructor
     *
     * @param ElementMetadataInterface $metadata The main metadata at the extraction origin
     * @param mixed                    $value    The extracted value
     *
     * @return void
     */
    public function __construct(ElementMetadataInterface $metadata, $value)
    {
        $this->metadata = $metadata;
        $this->value = $value;
    }
}

