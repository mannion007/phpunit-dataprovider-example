<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace DataProviderExampleTests;

use DataProviderExample\Validator\NotEmptyValidator;

class NotEmptyValidatorTestWithoutDataProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var  NotEmptyValidator $notEmptyValidator */
    private $notEmptyValidator;

    public function setUp()
    {
        parent::setUp();
        $this->notEmptyValidator = new NotEmptyValidator();
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->notEmptyValidator);
    }

    /**
     * Ensures that the isValid method returns false when the value is NULL
     * @test
     */
    public function isValidWithNull()
    {
        $this->notEmptyValidator->setValue(null);
        $this->assertSame(false, $this->notEmptyValidator->isValid());
    }

    /**
     * Ensures that the isValid method returns false when the value is {empty string}
     * @test
     */
    public function isValidWithEmptyString()
    {
        $this->notEmptyValidator->setValue('');
        $this->assertSame(false, $this->notEmptyValidator->isValid());
    }

    /**
     * Ensures that the isValid method returns false when the value is "elbarto"
     * @test
     */
    public function isValidWithNonEmptyString()
    {
        $this->notEmptyValidator->setValue('elbarto');
        $this->assertSame(true, $this->notEmptyValidator->isValid());
    }
}
