<?php

/**
 * @author James Mannion <mannion007@gmail.com>
 * @link https://www.jamse.net
 */

namespace DataProviderExample\Validator;

class NotEmptyValidator implements ValidatorInterface
{
    private $value;

    /**
     * Set the value which the validator will check
     *
     * @param mixed $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Is the validator valid?
     *
     * @return boolean
     */
    public function isValid()
    {
        return !empty($this->value);
    }


}