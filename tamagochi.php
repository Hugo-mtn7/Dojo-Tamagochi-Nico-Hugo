<?php

class Tamagochi
{
    private $hungriness;
    private $fullness;
    private $tiredness;
    private $happiness;

    public function __construct ($hungriness, $happiness, $fullness, $tiredness)
    {
        $this->hungriness = setHungriness($hungriness);
        $this->fullness = setFullness($fullness);
        $this->tiredness = setTiredness($tiredness);
        $this->happiness = setHappiness($happiness);
    
    }

    public function setHungriness($hungriness)
    {
        if($hungriness>0 && $hungriness <= 100)
        {
            $this->hungriness = $hungriness;
        }
    }

    public function setFullness($fullness)
    {
        if($fullness > 0 && $fullness <= 100){       
            $this->fullness = $fullness;
        }
    }

    public function setTiredness($tiredness)
    {
        if($tiredness > 0 && $tiredness <= 100){       
            $this->tiredness = $tiredness;
        }
    }

    public function setHappiness($happiness)
    {
        if($happiness > 0 && $happiness <= 100){       
            $this->happiness = $happiness;
        }
    }

    public function getHungriness()
    {
        return $this->hungriness;
    }

    public function getFullness()
    {
        return $this->fullness;
    }

    public function getTiredness()
    {
        return $this->tiredness;
    }

    public function getHappiness()
    {
        return $this->happiness;
    }





}