<?php
/* Create a class that performs a series of transformations on a string. You can use the get() method to get the final result. */

declare(strict_types=1);

class StringyRedux
{

    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function lower(): StringyRedux
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper(): StringyRedux
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function append($value): StringyRedux
    {
        $this->str = $this->str . $value;
        return $this;
    }

    public function repeat(int $n): StringyRedux
    {
        $output = "";
        for ($i = 1; $i <= $n; $i += 1) {
            $output .=  $this->str;
        }
        $this->str = $output;
        return $this;
    }

    public function get()
    {
        return $this->str;
    }
}

$string1 = new StringyRedux("Oop");
var_dump($string1->lower()->repeat(2)->get()); // string(6) "oopoop"

$string2 = new StringyRedux("Spoon");
var_dump($string2->repeat(2)->upper()->append("!")->get()); // string(11) "SPOONSPOON!"

$string3 = new StringyRedux("Na");
var_dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // string(48) "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"
