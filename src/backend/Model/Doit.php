<?php


class Doit
{

    private string $title;
    private string $description;
    private $date;

    function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = date('d-m-y');
    }


}