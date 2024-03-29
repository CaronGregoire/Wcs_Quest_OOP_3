<?php

abstract class HighWay
{
        protected array $currentVehicles = [];
        protected int $nbLane;
        protected int $maxSpeed;


    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

        /**abstract public function HighWay::addVehicle(object $Vehicle)
        {

        }

         **/

    abstract public function addVehicle(vehicle $vehicle);


    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }





}