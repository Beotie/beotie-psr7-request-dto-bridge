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
namespace Beotie\PSR7\DTOBridge\Tests\Metadata\Element\Traits;

use PHPUnit\Framework\TestCase;
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;

/**
 * Element source test trait
 *
 * This trait is used to validate the ElementSourceTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementSourceTestTrait
{
    /**
     * Test set source metadata
     *
     * This method validate the ElementSourceTrait::setSourceMeta logic
     *
     * @return void
     */
    public function testSetSourceMeta()
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $sourceMetadata = $reflex->getProperty('sourceMetadata');
        $sourceMetadata->setAccessible(true);

        $source = $this->getTestCase()
            ->getMockBuilder(SourceMetadataInterface::class)
            ->getMock();

        $this->getTestCase()->assertSame($instance, $instance->setSourceMeta($source));
        $this->getTestCase()->assertSame($source, $sourceMetadata->getValue($instance));
    }

    /**
     * Test get source metadata
     *
     * This method validate the ElementSourceTrait::getSourceMeta logic
     *
     * @return void
     */
    public function testGetSourceMeta()
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $sourceMetadata = $reflex->getProperty('sourceMetadata');
        $sourceMetadata->setAccessible(true);

        $source = $this->getTestCase()
            ->getMockBuilder(SourceMetadataInterface::class)
            ->getMock();

        $sourceMetadata->setValue($instance, $source);

        $this->getTestCase()->assertSame($source, $instance->getSourceMeta());
    }

    /**
     * Get tested instance
     *
     * Return the tested instance name
     *
     * @return string
     */
    protected abstract function getTestedInstance() : string;

    /**
     * Get TestCase
     *
     * Return the current TestCase
     *
     * @return TestCase
     */
    protected abstract function getTestCase() : TestCase;
}
