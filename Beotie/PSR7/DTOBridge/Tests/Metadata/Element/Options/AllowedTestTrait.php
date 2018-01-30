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
 * Allowed test trait
 *
 * This trait is used to validate the AllowedTypeOptionTrait and AllowedValueOptionTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait AllowedTestTrait
{
    /**
     * Type provider
     *
     * This method return the set of allowed logic for the test
     *
     * @return [[string]]
     */
    public function typeProvider()
    {
        return [
            ['type', 'allowedTypes'],
            ['value', 'allowedValues']
        ];
    }

    /**
     * Test has allowed
     *
     * This method validate the AllowedTypeOptionTrait::hasAllowedType and AllowedValueOptionTrait::hasAllowedType
     * logic
     *
     * @param string $type         The test type
     * @param string $propertyName The property used by the test
     *
     * @return       void
     * @dataProvider typeProvider
     */
    public function testHasAllowed(string $type, string $propertyName) : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $property = $reflex->getProperty($propertyName);
        $property->setAccessible(true);

        $methodName = sprintf('hasAllowed%ss', ucfirst($type));

        $property->setValue($instance, []);
        $this->getTestCase()->assertFalse($instance->{$methodName}());

        $property->setValue($instance, ['a', 'b']);
        $this->getTestCase()->assertTrue($instance->{$methodName}());

        return;
    }

    /**
     * Test set allowed
     *
     * This method validate the AllowedTypeOptionTrait::setAllowedTypes and AllowedValueOptionTrait::setAllowedValues
     * logic
     *
     * @param string $type         The test type
     * @param string $propertyName The property used by the test
     *
     * @return       void
     * @dataProvider typeProvider
     */
    public function testSetAllowed(string $type, string $propertyName) : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $property = $reflex->getProperty($propertyName);
        $property->setAccessible(true);

        $methodName = sprintf('setAllowed%ss', ucfirst($type));

        $this->getTestCase()->assertSame($instance, $instance->{$methodName}(['a', 'b']));
        $this->getTestCase()->assertEquals(['a', 'b'], $property->getValue($instance));

        return;
    }

    /**
     * Test get allowed
     *
     * This method validate the AllowedTypeOptionTrait::getAllowedTypes and AllowedValueOptionTrait::getAllowedValues
     * logic
     *
     * @param string $type         The test type
     * @param string $propertyName The property used by the test
     *
     * @return       void
     * @dataProvider typeProvider
     */
    public function testGetAllowed(string $type, string $propertyName) : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $property = $reflex->getProperty($propertyName);
        $property->setAccessible(true);

        $methodName = sprintf('getAllowed%ss', ucfirst($type));

        $property->setValue($instance, ['a', 'b']);
        $this->getTestCase()->assertEquals(['a', 'b'], $instance->{$methodName}());

        return;
    }

    /**
     * Test remove allowed
     *
     * This method validate the AllowedTypeOptionTrait::removeAllowedTypes and
     * AllowedValueOptionTrait::removeAllowedValues logic
     *
     * @param string $type         The test type
     * @param string $propertyName The property used by the test
     *
     * @return       void
     * @dataProvider typeProvider
     */
    public function testRemoveAllowed(string $type, string $propertyName) : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $property = $reflex->getProperty($propertyName);
        $property->setAccessible(true);

        $methodName = sprintf('removeAllowed%s', ucfirst($type));

        $property->setValue($instance, ['a', 'b']);
        $this->getTestCase()->assertSame($instance, $instance, $instance->{$methodName}('a'));
        $this->getTestCase()->assertEquals(['b'], $property->getValue($instance), '', 0.0, 10, true);

        $property->setValue($instance, ['a', 'b']);
        $this->getTestCase()->assertSame($instance, $instance, $instance->{$methodName}('b'));
        $this->getTestCase()->assertEquals(['a'], $property->getValue($instance), '', 0.0, 10, true);

        return;
    }

    /**
     * Test add allowed
     *
     * This method validate the AllowedTypeOptionTrait::addAllowedTypes and
     * AllowedValueOptionTrait::addAllowedValues logic
     *
     * @param string $type         The test type
     * @param string $propertyName The property used by the test
     *
     * @return       void
     * @dataProvider typeProvider
     */
    public function addAllowed(string $type, string $propertyName) : void
    {
        $reflex = new \ReflectionClass($this->getTestedInstance());
        $instance = $reflex->newInstanceWithoutConstructor();

        $property = $reflex->getProperty($propertyName);
        $property->setAccessible(true);

        $methodName = sprintf('addAllowed%s', ucfirst($type));

        $this->getTestCase()->assertSame($instance, $instance, $instance->{$methodName}('a'));
        $this->getTestCase()->assertEquals(['a'], $property->getValue($instance));

        $this->getTestCase()->assertSame($instance, $instance, $instance->{$methodName}('b'));
        $this->getTestCase()->assertEquals(['a', 'b'], $property->getValue($instance));

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
