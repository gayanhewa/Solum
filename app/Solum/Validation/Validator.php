<?php namespace Solum\Validation;

use Respect\Validation\Exceptions\AbstractNestedException;
use Respect\Validation\Validator as v;
use Solum\Exceptions\ValidationException;

/**
 * Class Validator
 * @package Authority\Validation
 */
abstract class Validator {

    public function validate(v $validator,$data,$errorMessage,$errorFields){
        try {$validator->check($data);}
        catch (AbstractNestedException $e) {
            $errors = $e->findMessages($errorFields);
            throw new ValidationException($errorMessage,$errors);
        }
    }
}