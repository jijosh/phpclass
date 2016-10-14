<!DOCTYPE html>
<html>
	<head>
	  <title>Putting It All Together Part 2</title>
	</head>
	<body>
    <p>
    <?php
	   class Dog 
	   {
	   public $numLegs = 4;
	   public $age;
	   public function __construct($name)
	   {
	   $this->name = $name;
	}
	   public function bark() 
	   {
	   return "Woof, ";
	}
	   public function greet() 
	   {
	      return "Hello I'm ". $this->name . " nice to meet you!";
	}
	}
	   $dog1 = new Dog("Barker");
	   $dog2 = new Dog("Amigo");
	      echo $dog1->bark();
	      echo $dog2->greet();
	?>
    </p>
    </body>
</html>