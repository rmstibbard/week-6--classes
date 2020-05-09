<?php

/* Create two classes, one that represents a recipe and one that represents an ingredient
Hint: you can use "\n" to add a line break to a string
Hint: PHP has array_search and array_unique methods */

declare(strict_types=1);

class Recipe
{
    private $ingredients = [];  // Set empty $ingredients array

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->method = "";
    }

    public function add($ingredient, $amount)
    {
        $this->ingredients[] = $ingredient; // Add a new ingredient into $ingredients array 
    }

    public function addMethod($method)
    {
        $this->method = $method;
    }
}

class Ingredient
{
}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
var_dump($cake->display());
/*
    string(146) "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
*/

// we can list dietary information
var_dump($cake->dietary()); // string(29) "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
var_dump($cake->vegan()); // bool(false)
