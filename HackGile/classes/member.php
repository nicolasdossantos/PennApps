<?php

class member
{
    protected $email;
    protected $fname;
    protected $lname;
    public $is_admin;

    public function __construct($args = [])
    {
        $this->email = $args['email'] ?? '';
        $this->fname = $args['fname'] ?? '';
        $this->lname = $args['lname'] ?? '';
        $this->is_admin = $args['is_admin'??false];
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFullName()
    {
        return $this->fname . " " . $this->lname;
    }

    public function getAssociatedProjects()
    {
        return [project::get_default_project1()];
    }

    public static function GetDefaultMember1()
    {
        $args = array(
            "email" => "ndefilippis98@gmail.com",
            "fname" => "Nick",
            "lname" => "DeFilippis",
            "is_admin" =>true);

        return new Member($args);
    }

    public static function GetDefaultMember2()
    {
        $args = array(
            "email" => "tuh36069@temple.edu",
            "fname" => "Nicolas",
            "lname" => "Dos Santos",
            "is_admin" =>true);
        return new Member($args);
    }

    public static function GetDefaultMember3()
    {
        $args = array(
            "email" => "tchin25@gmail.com",
            "fname" => "Thomas",
            "lname" => "Chin",
            "is_admin" =>true);
        return new Member($args);
    }

    public function deleteMember($member)
    {

        $member->email = '';
        $member->fname = '';
        $member->lname = '';

    }
}