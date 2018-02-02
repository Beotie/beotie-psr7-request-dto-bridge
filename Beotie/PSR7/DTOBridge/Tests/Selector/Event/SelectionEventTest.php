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
namespace Beotie\PSR7\DTOBridge\Tests\Selector\Event;

use Beotie\LibTest\Traits\TestCaseTrait;
use Beotie\LibTest\Traits\TestTrait;
use Beotie\PSR7\DTOBridge\Selector\Event\SelectionEvent;
use PHPUnit\Framework\TestCase;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadata;
use Psr\Http\Message\RequestInterface;
use Beotie\PSR7\DTOBridge\Selector\RequestElementSelectorInterface;
use Beotie\PSR7\DTOBridge\Selector\Builder\SelectedElementBuilderInterface;
use PHPUnit\Framework\MockObject\MockObject;
use Beotie\PSR7\DTOBridge\Selector\SelectedElementInterface;

/**
 * Selection event test
 *
 * This class is used to validate the SelectionEvent class logic
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SelectionEventTest extends TestCase
{
    use TestCaseTrait, TestTrait;

    /**
     * Test construct
     *
     * This method is used to validate the SelectionEvent::__construct method logic
     *
     * @return void
     */
    public function testConstruct()
    {
        $metadata = $this->createMock(ElementMetadata::class);
        $request = $this->createMock(RequestInterface::class);
        $selector = $this->createMock(RequestElementSelectorInterface::class);
        $builder = $this->createMock(SelectedElementBuilderInterface::class);

        $instance = new SelectionEvent($metadata, $request, $selector, $builder);

        $this->assertSame($metadata, $this->getValue($instance, 'metadata'));
        $this->assertSame($request, $this->getValue($instance, 'request'));
        $this->assertSame($selector, $this->getValue($instance, 'selector'));
        $this->assertSame($builder, $this->getValue($instance, 'builder'));
    }

    /**
     * Getter provider
     *
     * Return a set of data to validate the getter methods
     *
     * @return string[][]|\PHPUnit\Framework\MockObject\MockObject[][]
     */
    public function getterProvider()
    {
        return [
            [
                $this->createMock(ElementMetadata::class),
                'metadata',
                'getMetadata'
            ],
            [
                $this->createMock(RequestInterface::class),
                'request',
                'getRequest'
            ],
            [
                $this->createMock(RequestElementSelectorInterface::class),
                'selector',
                'getSelector'
            ],
            [
                $this->createMock(SelectedElementBuilderInterface::class),
                'builder',
                'getSelectedElementBuilder'
            ],
            [
                $this->createMock(SelectedElementInterface::class),
                'selectedElement',
                'getSelectedElement'
            ]
        ];
    }

    /**
     * Test getter
     *
     * This method is used to validate the SelectionEvent getter method logic
     *
     * @param MockObject $propertyValue The property value to inject into the instance
     * @param string     $propertyName  The property name where inject the value
     * @param string     $method        The method to validate
     *
     * @return       void
     * @dataProvider getterProvider
     */
    public function testGetMetadata(MockObject $propertyValue, string $propertyName, string $method) : void
    {
        $instance = $this->createEmptyInstance();

        $this->setValue($instance, $propertyName, $propertyValue);
        $this->assertSame($propertyValue, $instance->{$method}());

        return;
    }

    /**
     * Test setSelectedElement
     *
     * This method is used to validate the SelectionEvent::setSelectedElement method logic
     *
     * @return void
     */
    public function testSetSelectedElement()
    {
        $selectedElement = $this->createMock(SelectedElementInterface::class);
        $instance = $this->createEmptyInstance();

        $this->setValue($instance, 'propagationStopped', false);

        $this->assertSame($instance, $instance->setSelectedElement($selectedElement));

        $this->assertTrue($this->getValue($instance, 'propagationStopped'));
        $this->assertSame($selectedElement, $this->getValue($instance, 'selectedElement'));
    }

    /**
     * Get tested instance
     *
     * Return the tested instance name
     *
     * @return string
     */
    protected function getTestedInstance() : string
    {
        return SelectionEvent::class;
    }
}
