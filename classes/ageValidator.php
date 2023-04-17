<?php

class ageValidator {
  private $age;
  public function __construct($age)
  {
    $this->age = $age;
  }
  private function validateInputAgeType():string | true 
  {
    $isTypedAgeANumber = intval($this->age) != 0;
    if(!$isTypedAgeANumber) return "you should type a number";
    return true;
  }
  private function validateMajorityAge():string | true 
  {
    if($this->age < 18) return "your age should be equal to or greater than 18";
    return true;
  }

  public function validate(): bool
  {
    $validationsResult = array($this->validateInputAgeType(), $this->validateMajorityAge());
    
    foreach($validationsResult as $validationResult) {
      if($validationResult !== true) throw new ErrorException($validationResult);
    };

    echo "You are old enough. You can pass!";
    return true;
  }
}



