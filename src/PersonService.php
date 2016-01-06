<?php
namespace MB;
class PersonService {
    private $personDao;

    public function __construct(PersonDaoInterface $personDao) {
        $this->personDao = $personDao;
    }

    public function getPerson($id) {
        return $this->personDao->getPerson($id);
    }
}