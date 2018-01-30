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
 * Default test trait
 *
 * This class is used to validate the DefaultOptionTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait DefaultTestTrait
{
    /**
     * Test has default
     *
     * This method validate the RequiredOptionTrait::hasDefault logic
     *
     * @return void
     */
    public function testHasDefault() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $hasDefault = $reflex->getProperty('hasDefault');
        $hasDefault->setAccessible(true);

        $this->getTestCase()->assertFalse($instance->hasDefault());
        $hasDefault->setValue($instance, true);
        $this->getTestCase()->assertTrue($instance->hasDefault());

        return;
    }

    /**
     * Test get default
     *
     * This method validate the RequiredOptionTrait::getDefault logic
     *
     * @return void
     */
    public function testGetDefault() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $default = $reflex->getProperty('default');
        $default->setAccessible(true);

        $this->getTestCase()->assertNull($instance->getDefault());
        $default->setValue($instance, true);
        $this->getTestCase()->assertTrue($instance->getDefault());
        $default->setValue($instance, new \stdClass());
        $this->getTestCase()->assertInstanceOf(\stdClass::class, $instance->getDefault());

        return;
    }

    /**
     * Test set default
     *
     * This method validate the RequiredOptionTrait::setDefault logic
     *
     * @return void
     */
    public function testSetDefault() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $hasDefault = $reflex->getProperty('hasDefault');
        $hasDefault->setAccessible(true);

        $default = $reflex->getProperty('default');
        $default->setAccessible(true);

        $this->getTestCase()->assertFalse($hasDefault->getValue($instance));
        $this->getTestCase()->assertnull($default->getValue($instance));

        $this->getTestCase()->assertSame($instance, $instance->setDefault(null));
        $this->getTestCase()->assertTrue($hasDefault->getValue($instance));
        $this->getTestCase()->assertnull($default->getValue($instance));

        $this->getTestCase()->assertSame($instance, $instance->setDefault(new \stdClass()));
        $this->getTestCase()->assertTrue($hasDefault->getValue($instance));
        $this->getTestCase()->assertInstanceOf(\stdClass::class, $default->getValue($instance));

        $this->getTestCase()->assertSame($instance, $instance->setDefault(true));
        $this->getTestCase()->assertTrue($hasDefault->getValue($instance));
        $this->getTestCase()->assertTrue($default->getValue($instance));

        return;
    }

    /**
     * Test remove default
     *
     * This method validate the RequiredOptionTrait::removeDefault logic
     *
     * @return void
     */
    public function testRemoveDefault() : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $hasDefault = $reflex->getProperty('hasDefault');
        $hasDefault->setAccessible(true);

        $default = $reflex->getProperty('default');
        $default->setAccessible(true);

        $hasDefault->setValue($instance, true);
        $default->setValue($instance, new \stdClass());

        $this->getTestCase()->assertSame($instance, $instance->removeDefault(null));
        $this->getTestCase()->assertFalse($hasDefault->getValue($instance));
        $this->getTestCase()->assertNull($default->getValue($instance));

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
