<?php

class Salary
{

      private $amount;

      function __construct($amount)
      {
            $this->setSalary($amount);
            // $this->getSalary();
      }

      private function setSalary($amount)
      {
            if (is_numeric($amount)) {
                  $this->amount = $amount;
            } else {
                  echo "Not a number";
                  die;
            }
      }

      public function getSalary()
      {
            // echo "<p>Your salary is: " . $this->amount . "</p>";
            return $this->amount;
      }
}

// new Salary("50");
