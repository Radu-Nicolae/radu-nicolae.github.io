<?php

class CvItem
{
    var $startingDate;
    var $startingDateRo;
    var $endingDate;
    var $endingDateRo;
    var $title;
    var $titleRo;
    var $organizer;
    var $organizerRo;
    var $description;
    var $descriptionRo;

    /**
     * CvItem constructor.
     * @param $startingDate
     * @param $startingDateRo
     * @param $endingDate
     * @param $endingDateRo
     * @param $title
     * @param $titleRo
     * @param $organizer
     * @param $organizerRo
     * @param $description
     * @param $descriptionRo
     */
    public function __construct($startingDate, $startingDateRo, $endingDate, $endingDateRo, $title, $titleRo, $organizer, $organizerRo, $description, $descriptionRo)
    {
        $this->startingDate = $startingDate;
        $this->startingDateRo = $startingDateRo;
        $this->endingDate = $endingDate;
        $this->endingDateRo = $endingDateRo;
        $this->title = $title;
        $this->titleRo = $titleRo;
        $this->organizer = $organizer;
        $this->organizerRo = $organizerRo;
        $this->description = $description;
        $this->descriptionRo = $descriptionRo;
    }

    /**
     * @return mixed
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * @param mixed $startingDate
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;
    }

    /**
     * @return mixed
     */
    public function getStartingDateRo()
    {
        return $this->startingDateRo;
    }

    /**
     * @param mixed $startingDateRo
     */
    public function setStartingDateRo($startingDateRo)
    {
        $this->startingDateRo = $startingDateRo;
    }

    /**
     * @return mixed
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }

    /**
     * @param mixed $endingDate
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    }

    /**
     * @return mixed
     */
    public function getEndingDateRo()
    {
        return $this->endingDateRo;
    }

    /**
     * @param mixed $endingDateRo
     */
    public function setEndingDateRo($endingDateRo)
    {
        $this->endingDateRo = $endingDateRo;
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
    public function getTitleRo()
    {
        return $this->titleRo;
    }

    /**
     * @param mixed $titleRo
     */
    public function setTitleRo($titleRo)
    {
        $this->titleRo = $titleRo;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param mixed $organizer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return mixed
     */
    public function getOrganizerRo()
    {
        return $this->organizerRo;
    }

    /**
     * @param mixed $organizerRo
     */
    public function setOrganizerRo($organizerRo)
    {
        $this->organizerRo = $organizerRo;
    }

    /**
     * @return mixed
     */
    public function getHasList()
    {
        return $this->hasList;
    }

    /**
     * @param mixed $hasList
     */
    public function setHasList($hasList)
    {
        $this->hasList = $hasList;
    }

    /**
     * @return mixed
     */
    public function getHasListRo()
    {
        return $this->hasListRo;
    }

    /**
     * @param mixed $hasListRo
     */
    public function setHasListRo($hasListRo)
    {
        $this->hasListRo = $hasListRo;
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




}

?>

