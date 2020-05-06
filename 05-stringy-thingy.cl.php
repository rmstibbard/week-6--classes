<?php
/* Create a class that lets you do things with a string. Hint: you might want to look at the PHP string functions */

declare(strict_types=1);

class Stringy
{
    private $str;

    public function __construct(string $str)
    {
        $this->str = $str;
    }

    public function lower(): string
    {
        return strtolower($this->str);
    }

    public function upper(): string
    {
        return strtoupper($this->str);
    }

    public function append($value): string
    {
        return $this->str . $value;
    }

    public function repeat(int $n): string
    {
        $output = "";
        for ($i = 0; $i <= $n; $i += 1) {
            $output .=  $this->str;
        }
        return $output;
    }
}

$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"
