<?php

class Service{
    var $title;
    var $description;
    var $descriptionRo;
    var $class;

    /**
     * Service constructor.
     * @param $title
     * @param $description
     * @param $descriptionRo
     * @param $class
     */
    public function __construct($title, $description, $descriptionRo, $class)
    {
        $this->title = $title;
        $this->description = $description;
        $this->descriptionRo = $descriptionRo;
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionRo()
    {
        return $this->descriptionRo;
    }

    /**
     * @param mixed $descriptionRo
     */
    public function setDescriptionRo($descriptionRo)
    {
        $this->descriptionRo = $descriptionRo;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }




}