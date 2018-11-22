<?php

class Person {

    private $namme;
    private $bith;
    private $height;
    private $weight;

    public function speak($words = ""){

    }

    public function walk($distance) {

    }

    public function getAge(){

    }

}


interface Athlete {

    public function run($distance);

}


abstract class Runner extends Person implements Athlete
{
    private $maxSpeed;
    private $speed;

    public function Runner($maxSpeed)
    {
        $this->maxSpeed = 8;
//        $this->maxSpeed = $maxSpeed;
        $this->speed = 0;
    }

    public function setSpeed ($speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }


    public function run($distance)
    {

    }

}

class Sprinter extends Runner
{
    /**
     * The run method must to call a function or find a way
     * in order to update the var $miles according to the
     * current distance of each runner.
     */
    private $miles;

    public function __construct()
    {
        $this->miles = 0;
    }

    public function updateMiles($miles)
    {
        $this->miles = $miles;
        $this->reduceSpeed();
        $speedBy2 = $this->getSpeed() * 2;
        if ($speedBy2 <= $this->getMaxSpeed()) {
            $this->stop();
        }
    }

    public function reduceSpeed()
    {
        $this->setSpeed(
            $this->getSpeed() * 0.85
        );
    }

    public function stop()
    {
        $this->setSpeed(0);
    }
}




class Marathoner extends Runner
{
    /**
     * The run method must to call a function or find a way
     * in order to update the var $miles according to the
     * current distance of each runner.
     */
    private $miles;

    public function __construct()
    {
        $this->miles = 0;
    }

    public function updateMiles()
    {
        $this->miles = $miles;
        $this->speak(
            $this->getRunnerSpeach()
        );
    }

    public function getRunnerSpeach()
    {
        $sentence = "";
        if ( $this->miles % 3 != 0 && $this->miles % 5 != 0){
            $sentence .= $this->miles;
        }else {
            if ( $this->miles % 3 == 0 ){
                $sentence .= $this->miles;
            }
            if ( $this->miles % 5 == 0){
                $sentence .= $this->miles;
            }
        }
        return $sentence;
    }

}