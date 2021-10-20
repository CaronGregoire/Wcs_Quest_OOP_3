<?php



require_once 'Vehicle.php';



class Truck extends Vehicle

{

    private string $energy ;
    public const load = 5 ;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats,$energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->setLoading = 0;

    }

    public function inFilling():string
    {
        if ($this->setLoading >= 5) {
            return "It's Full"; }
        else { return "In filling";
        }
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}