<?php 
    function isEmpty($middlename, $address, $guardian, $civilStatus, $schoolYear){
        return trim(strlen($middlename) > 0) && trim(strlen($address) > 0) && trim(strlen($guardian) > 0) && trim(strlen($civilStatus) > 0) && trim(strlen($schoolYear) > 0);
    }
    function isNumberValid($contactNumber){
        return preg_match_all('/(^\+?63(?!.*-.*-)(?!.*\+.*\+)(?:\d(?:-)?){10}$)|(^09(?!.*-.*-)(?!.*-.*-)(?:\d(?:-)?){9}$)/', $contactNumber);
    }
    function isNameValid($firstname, $lastname) {
        return trim(strlen($firstname) > 1) && trim(strlen($lastname));
    }
?>