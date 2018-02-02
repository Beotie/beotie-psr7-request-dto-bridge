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
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace Beotie\PSR7\DTOBridge\Tests\Selector\Builder;

use Beotie\LibTest\Traits\TestTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;
use Beotie\PSR7\DTOBridge\Selector\SelectedElement;

/**
 * Selected element builder test trait
 *
 * This class is used to validate the SelectedElementBuilderTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SelectedElementBuilderTestTrait
{
    use TestTrait;

    /**
     * Test getNewSelectedElement
     *
     * This method is used to validate the SelectedElementBuilderTrait::getNewSelectedElement method logic
     *
     * @return void
     */
    public function testGetNewSelectedElement()
    {
        $instance = $this->createEmptyInstance();

        $metadata = $this->getTestCase()->getMockBuilder(ElementMetadataInterface::class)->getMock();
        $value = new \stdClass();

        $selectedElement = $instance->getNewSelectedElement($metadata, $value);

        $this->getTestCase()->assertInstanceOf(SelectedElement::class, $selectedElement);
        $this->getTestCase()->assertSame($metadata, $this->getValue($selectedElement, 'metadata'));
        $this->getTestCase()->assertSame($value, $this->getValue($selectedElement, 'value'));
    }
}
