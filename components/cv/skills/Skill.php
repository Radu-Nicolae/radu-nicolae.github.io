<?php


class Skill
{
    var $name;
    var $percentage;
    var $level;

    public function __construct($name, $percentage, $level){
        $this->name = $name;
        $this->percentage = $percentage;
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param mixed $percentage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     * @return mixed
     */
    public function getLevel($lang)
    {
        return $this->level[$lang];
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLevelRo()
    {
        return $this->levelRo;
    }

    /**
     * @param mixed $level
     */
    public function setLevelRo($levelRo)
    {
        $this->levelRo = $levelRo;
    }


}