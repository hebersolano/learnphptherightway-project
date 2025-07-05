<?php

namespace SoHe;

// use DateTime;

// Classes and Objects
class Transaction {
  public function __construct(
    private float $amount,
    private string $description
  ) {
    // echo $amount;
    // using classes of the same namespace
    var_dump(new ProfileUser);
    // global class
    var_dump(new \DateTime());
  }

  public function addTax(float $rate): self {
    $this->amount += $this->amount * $rate / 100;
    return $this;
  }

  public function applyDiscount(float $rate): self {
    $this->amount -= $this->amount * $rate / 100;
    return $this;
  }

  public function getAmount() {
    return $this->amount;
  }

  /**
   * It's call when the object is destruct: at the end of the script execution and there isn't reference to the object, calling 'unset()', setting the variable to null or 'exit' the script.
   */
  public function __destruct() {
    echo '</br>Destruct: ' . $this->description;
  }
}


function fooFunction() {
}
