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
namespace Beotie\PSR7\DTOBridge\Tests\Selector;

use PHPUnit\Framework\TestCase;
use Beotie\LibTest\Traits\TestCaseTrait;
use Beotie\PSR7\DTOBridge\Tests\Selector\Traits\SelectedElementMetadataTestTrait;
use Beotie\PSR7\DTOBridge\Tests\Selector\Traits\SelectedElementValueTestTrait;
use Beotie\PSR7\DTOBridge\Selector\SelectedElement;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Selected Element test
 *
 * This class is used to validate the SelectedElement class logic
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SelectedElementTest extends TestCase
{
    use TestCaseTrait, SelectedElementMetadataTestTrait, SelectedElementValueTestTrait;

    /**
     * Test constructor
     *
     * This method is used to validate the SelectedElement::__construct method logic
     *
     * @return void
     */
    public function testConstructor()
    {
        $metadata = $this->createMock(ElementMetadataInterface::class);
        $value = new \stdClass();

        $instance = new SelectedElement($metadata, $value);

        $this->assertSame($metadata, $this->getValue($instance, 'metadata'));
        $this->assertSame($value, $this->getValue($instance, 'value'));
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
        return SelectedElement::class;
    }
}

