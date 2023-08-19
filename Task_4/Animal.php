<?php

class Animal
{
      function __construct($sound)
      {
            // This constructor runs this sound function every time an instance is created and adds a line break for every instance call. 
            $this->sound($sound);
            echo "<br>";
      }

      public function sound($sound)
      {
            echo "Animal makes a sound of " . $sound;
      }
}

class Cat extends Animal
{

      function sound($sound)
      {
            echo "Cats makes a sound of $sound";
      }
}

class dog extends Animal
{
      function sound($sound)
      {
            echo 'Dogs make a sound ' .  $sound;
      }
}

new Animal("don't know");
new Cat("meow");
new Dog("Woof");
