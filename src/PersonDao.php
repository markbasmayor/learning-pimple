<?php
namespace MB;
use MB\PersonDaoInterface;
class PersonDao implements PersonDaoInterface {

    public function getPerson($id) {
        return [
            [
                'id'    => 1,
                'name'  => 'mark'
            ],
            [
                'id'    => 2,
                'name'  => 'john'
            ],
        ];
    }
}