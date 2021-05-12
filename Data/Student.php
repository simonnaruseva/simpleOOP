<?php

namespace Data;

use Exception;

class Student extends User
{
/**
* @var string
*/
private $group;

/**
* @var int
*/
private $course;


public function __construct(string $username, string $password, string $firstName, string $lastName,
string $group, int $course)
{
parent::__construct($username, $password, $firstName, $lastName);
$this->setGroup($group);
$this->setCourse($course);
}

/**
* @return string
*/
public function getGroup(): string
{
return $this->group;
}

/**
* @param string $group
* @throws Exception when group is zero or negative number
*/
private  function setGroup(string $group): void
{
if($group <=0) {
throw new Exception("Group cannot be zero or negative number!");
}
$this->group = $group;
}

/**
* @return int
*/
public function getCourse(): int
{
return $this->course;
}

/**
* @param int $course
* @throws Exception when course is negative or course is more than 4
*/
private function setCourse(int $course): void
{
if($course < 1 || $course > 4) {
throw new Exception("Courses are between 1 and 4");
}
$this->course = $course;
}



public function __toString(): string
{
return parent::__toString().", "."Group: {$this->getGroup()}, Course: {$this->getCourse()}";
}

}
