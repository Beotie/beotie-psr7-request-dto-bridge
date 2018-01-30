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
namespace Beotie\PSR7\DTOBridge\Tests\Metadata\Element\Options;

use PHPUnit\Framework\TestCase;

/**
 * Required test trait
 *
 * This class is used to validate the RequiredOptionTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait RequiredTestTrait
{
    /**
     * Test is required
     *
     * This method validate the RequiredOptionTrait::isRequired logic
     *
     * @return void
     */
    public function testIsRequired() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $required = $reflex->getProperty('required');
        $required->setAccessible(true);

        $this->getTestCase()->assertFalse($instance->isRequired());
        $required->setValue($instance, true);
        $this->getTestCase()->assertTrue($instance->isRequired());

        return;
    }

    /**
     * Test set required
     *
     * This method validate the RequiredOptionTrait::setRequired logic
     *
     * @return void
     */
    public function testSetRequired() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $required = $reflex->getProperty('required');
        $required->setAccessible(true);

        $this->getTestCase()->assertFalse($required->getValue($instance));
        $this->getTestCase()->assertSame($instance, $instance->setRequired(true));
        $this->getTestCase()->assertTrue($required->getValue($instance));
        $this->getTestCase()->assertSame($instance, $instance->setRequired(false));
        $this->getTestCase()->assertFalse($required->getValue($instance));

        return;
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
