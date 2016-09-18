<?php
/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace DataProviderExampleTests;

use DataProviderExample\Validator\NotEmptyValidator;

class NotEmptyValidatorTestWithDataProviderTest extends \PHPUnit_Framework_TestCase
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
     * Ensures that the isValid method "does what it says on the tin"
     *
     * @param mixed $input The input value for the test
     * @param boolean $expectedOutput The expected result
     *
     * @test
     * @dataProvider testIsValidDataProvider
     */
    public function isValid($input, $expectedOutput)
    {
        $this->notEmptyValidator->setValue($input);
        $this->assertSame($expectedOutput, $this->notEmptyValidator->isValid());
    }

    /**
     * The Data provider for the isValid test
     *
     * @return array
     */
    public function testIsValidDataProvider()
    {
        return array(
          array(null, false),
          array('', false),
          array('elBarto', true)
        );
    }
}
