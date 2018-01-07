<?php

/*
 * PHP Strategy Pattern: Strategy lets the algorithm vary independently from clients that use it.
 * Strategy is one of the patterns included in the influential book Design Patterns by Gamma et al.
 * that popularized the concept of using patterns in software design.
 *
 * For instance, a class that performs validation on incoming data may use a strategy pattern to select
 * a validation algorithm based on the type of data, the source of the data, user choice, or other discriminating
 * factors. These factors are not known for each case until run-time, and may require radically different validation
 * to be performed. The validation strategies, encapsulated separately from the validating object, may be used by
 * other validating objects in different areas of the system (or even different systems) without code duplication.
 *
 * The essential requirement in the programming language is the ability to store a reference to some code in a
 * data structure and retrieve it. This can be achieved by mechanisms such as the native function pointer,
 * the first-class function, classes or class instances in object-oriented programming languages, or accessing
 * the language implementation's internal storage of code via reflection.
 */


interface SortStrategy
{
    public function sort();
}

class QuickSort
{
    private $data;
    public function __construct(Array $data)
    {
        $this->data = $data;
    }
    public function sort()
    {
        return 'Sort by Quick Sort.';
    }
}

class MergeSort
{
    private $data;
    public function __construct(Array $data)
    {
        $this->data = $data;
    }
    public function sort()
    {
        return 'Sort by Merge Sort.';
    }
}

function sortData(Array &$data)
{
    if(count($data) > 20){
        $strategy = new QuickSort($data);
    }
    else{
        $strategy = new MergeSort($data);
    }
    return $strategy->sort();
}

$data = [1,2,3,4,5,6,7,8,9,11,12,13,14];
echo sortData($data);
