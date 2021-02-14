<?php
class student
{
    protected $id = 123443;
    protected $fname = 'sara';
    protected $email = 'sara@tancredi.pb';
    protected $mnumber = '0777777777';
    public function fname()
    {
        return $this->name;
    }
    public function mnumber()
    {
        return $this->mnumber;

    }
}

class teacher extends student
{
    protected $fname = 'sadi';
    protected $email = 'adam@orange.com';
    protected $mnumber = '0777788888';
    protected $salery = 800;
    protected $subjects = array('php', 'react', 'laravel', 'node');
    public function salery()
    {
        return $this->salery;
    }
    public function subjects()
    {
        return $this->subjects;
    }
}
