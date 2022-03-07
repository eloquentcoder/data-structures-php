# data-structures-php
Popular Data structures written in php. Will be updated regularly to include more data structures that you can include in your php projects.

# How to install
To install this package run 
````
composer require eloquentcoder/datastructures-php
````

The run
````
composer install
````

# Usage
To use the singlylinkedlist, create an object of singlylinkedList like this;
````
$linkedList = new SinglyLinkedList();
````
then you can call the insert method, append method and the deleteValue method to perform insertions, appending and deletion of values;
````
$linkedList->insert($data);
$linkedList->append($data);
$linkedList->delete($data);
````
