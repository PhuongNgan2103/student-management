<?php
class Student{
    protected $order;
    protected $fullName;
    protected $dateOfBirth;
    protected $gender;
    protected $homeTown;
    protected $action;

    /**
     * Student constructor.
     * @param $order
     * @param $fullName
     * @param $dateOfBirth
     * @param $gender
     * @param $homeTown
     * @param $action
     */
    public function __construct($order, $fullName, $dateOfBirth, $gender, $homeTown, $action)
    {
        $this->order = $order;
        $this->fullName = $fullName;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->homeTown = $homeTown;
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getHomeTown()
    {
        return $this->homeTown;
    }

    /**
     * @param mixed $homeTown
     */
    public function setHomeTown($homeTown)
    {
        $this->homeTown = $homeTown;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

 public function toArray()
    {

}
}