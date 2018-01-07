<?php

/*
 * PHP Facade: The Facade design pattern is particularly used when a system is very complex
 * or difficult to understand because system has a large number of interdependent classes
 * or its source code is unavailable.

 * Facade pattern hides the complexities of the system and provides an interface to the
 * client using which the client can access the system.This pattern involves a single
 * wrapper class which contains a set of members which are required by client.
 * These members access the system on behalf of the facade client and hide the
 * implementation details.
 */

class Database{
    public function getData($id)
    {
        $data = [
           'ID 1 Data',
            'ID 2 Data',
            'ID 3 Data'
        ];
        return (isset($data[$id]))? $data[$id] : 'No Data Found For ID : '.$id;
    }
}

class Template{
    public function serve($data)
    {
        echo '<h3>'.$data.'</h3>';
    }
}

class Page{
    public function create($id)
    {
        $db = new Database();
        $data = $db->getData($id);

        $template = new Template();
        $template->serve($data);
    }
}

$id = 5; //$_GET['id'];
$page = new Page();
$page->create($id);