<?php
class Fighter
{
    private $name;
    private $nacionality;
    private $age;
    private $height;
    private $weight;
    private $category;
    private $wins;
    private $loses;
    private $draws;

    public function present()
    {
        echo "<p>------------------------------</p>";
        echo "<p>Now it is the time!! The fighter " . $this->getName();
        echo " came from " . $this->getNacionality();
        echo " with the age of " . $this->getAge() . " years old and weight of " . $this->getWeight() . "Kg.";
        echo " This fighter has " . $this->getWins() . " wins ";
        echo $this->getLoses() . " loses and " . $this->getDraws() . (($this->getDraws() <= 1) ? " draw." : " draws.</p>");
        echo "<p>------------------------------</p>";
    }
    public function status()
    {
        echo "<p>------------------------------</p>";
        echo "<p>" . $this->getName() . " of weight of " . $this->getWeight() . "Kg is a " . $this->getCategory();
        echo " and already won " . $this->getWins() . (($this->getWins() <= 1) ? " time," : " times,");
        echo " lost " . $this->getLoses() . (($this->getLoses() <= 1) ? " time and" : " times and");
        echo " drew " . $this->getDraws() . (($this->getDraws() <= 1) ? " time." : " times.</p>");
    }
    public function winFight()
    {
        $this->setWins($this->getWins() + 1);
    }
    public function loseFight()
    {
        $this->setLoses($this->getLoses() + 1);
    }
    public function drawFight()
    {
        $this->setDraws($this->getDraws() + 1);
    }

    function __construct($na, $naci, $ag, $hei, $wei, $wi, $lo, $dr)
    {
        $this->name = $na;
        $this->nacionality = $naci;
        $this->age = $ag;
        $this->height = $hei;
        $this->setWeight($wei);
        $this->wins = $wi;
        $this->loses = $lo;
        $this->draws = $dr;
    }

    function getName()
    {
        return $this->name;
    }
    function setName($na)
    {
        $this->name = $na;
    }
    function getNacionality()
    {
        return $this->nacionality;
    }
    function setNacionality($naci)
    {
        $this->nacionality = $naci;
    }
    function getAge()
    {
        return $this->age;
    }
    function setAge($ag)
    {
        $this->age = $ag;
    }
    function getHeight()
    {
        return $this->height;
    }
    function setHeight($hei)
    {
        $this->height = $hei;
    }
    function getWeight()
    {
        return $this->weight;
    }
    function setWeight($wei)
    {
        $this->weight = $wei;
        $this->setCategory();
    }
    function getCategory()
    {
        return $this->category;
    }
    private function setCategory()
    {
        if ($this->weight < 52.2) {
            $this->category = "Invalid";
        } elseif ($this->weight <= 70.3) {
            $this->category = "Light Weight";
        } elseif ($this->weight <= 83.9) {
            $this->category = "Medium Weight";
        } elseif ($this->weight <= 120.2) {
            $this->category = "Heavy Weight";
        } else {
            $this->category = "Invalid";
        }
    }
    function getWins()
    {
        return $this->wins;
    }
    function setWins($wi)
    {
        $this->wins = $wi;
    }
    function getLoses()
    {
        return $this->loses;
    }
    function setLoses($lo)
    {
        $this->loses = $lo;
    }
    function getDraws()
    {
        return $this->draws;
    }
    function setDraws($dr)
    {
        $this->draws = $dr;
    }
}
