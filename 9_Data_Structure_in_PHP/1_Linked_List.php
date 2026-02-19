<?php

class LinkedList {
    public array $data;
    protected int $position;
    protected int $length;

    public function __construct(array $data) {
        $this->data = $data;
        $this->length = 1;
    }

    public function addInfo(mixed $value): void {
        $this->data[($this->length + 1)] = $value;
        $this->length++;
    }
    public function removeInfo(int $value): void {
        if($value > -1 && $value < $this->length) {
            for ($i = $value; $i < ($this->length - 1); $i++) {
                $this->data[$i] = $this->data[($i + 1)];
            }
        }
        unset($this->data[$this->length]);
    }

}
$list = new LinkedList(["Data1"]);
var_dump($list->data);
echo "<br><br>";

$list->addInfo("Data2");
$list->addInfo("Data3");
$list->addInfo("Data4");
$list->addInfo("Data5");
var_dump($list->data);
echo "<br><br>";

$list->removeInfo(3);
var_dump($list->data);