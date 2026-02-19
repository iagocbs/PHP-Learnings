<?php

// Interfaces have a similar body and construction, like classes
// But one thing is different, it is that interfaces only declare
// The base of methods for use of specific class

// It is more like a contract, that IMPLEMENTS what's accept by rules
// If I accept, I implement the methods and complete them on my class

// Like:

interface CRUD {
    public function createObject(string $s, float $f, bool $n);
    public function readObject();
    public function updateObject(string $s, float $f, bool $n);
    public function deleteObject();
}

// Above it is example of interface, with all functions declare, here
// We see something interesting, all methods have visibility: public
// That's a RULE of interface to we make a use on other classes

// We can see more on another class, here:

class ObjectExample implements CRUD {
    protected string $name;
    protected float $value;
    protected bool $new;

    public function createObject(string $s, float $f, bool $n): void {
        $this->name = $s;
        $this->value = $f;
        $this->new = $n;
    }
    public function readObject(): void {
        echo $this->name . "<br>";
        echo $this->value . "<br>";
        echo $this->new . "<br>";
    }
    public function updateObject(string $s, float $f, bool $n): void {
        $this->name = $s;
        $this->value = $f;
        $this->new = $n;
    }
    public function deleteObject(): void {
        $this->name = '';
        $this->value = 0;
        $this->new = 0;
    }
}

// After we declare the object and complete all methods and attributes,
// Now we can finally use a example how it is working, like:

$example = new ObjectExample();

$example->createObject("Object",9.99,true);
$example->readObject();
$example->updateObject("Used Object",1.99,false);
$example->deleteObject();

var_dump($example);