<?php

declare(strict_types=1);

namespace fabriscorol\bj_phone_number;

class BjPhoneNumber
{
    /**
     * Create a new BjPhoneNumber Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function welcomePhrase(string $phrase): string
    {
        return $phrase;
    }

    /**
     * { function_description }
     *
     * @param      integer  $phone_number  The phone number
     *
     * @return     boolean  ( description_of_the_return_value )
     */
    public function validateNumber(int $phone_number): bool{

        $pattern = "/(^[6]([0-2]|[4-9])\d{6}$)|(^[9]([0-1]|[4-9])\d{6}$)/";

        if (strlen($phone_number) !== 8) {
            return false;
        }else{
            if (preg_match($pattern, $phone_number)) {

                return true;
            } else {

                return false;
            }
            
        }
    }
}
