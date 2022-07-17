<?php
require_once 'Fighter.php';
class Fight
{

    private $challenged;
    private $challenger;
    private $rounds;
    private $approved;

    public function fightSchedule($f1, $f2)
    {
        if ($f1->getCategory() === $f2->getCategory() && ($f1 != $f2)) {
            $this->approved = true;
            $this->challenged = $f1;
            $this->challenger = $f2;
        } else {
            $this->approved = false;
            $this->challenged = null;
            $this->challenger = null;
        }
    }
    public function fight()
    {
        if ($this->getApproved(true)) {
            $this->challenged->present();
            $this->challenger->present();
            $winner = rand(0, 2);
            switch ($winner) {
                case 0: //Draw
                    echo "<p>The fighters drew!</p>";
                    $this->challenged->drawFight();
                    $this->challenger->drawFight();
                    break;
                case 1: //Challenged wins
                    echo "<p>" . $this->challenged->getName() . " won!</p>";
                    $this->challenged->winFight();
                    $this->challenger->loseFight();
                    break;
                case 2: //Challenger wins
                    echo "<p>" . $this->challenger->getName() . " won!</p>";
                    $this->challenger->winFight();
                    $this->challenged->loseFight();
                    break;
            }
        } else {
            echo "This fight is not approved and it cannot happen.";
        }
    }

    public function getChallenged()
    {
        return $this->challenged;
    }
    public function setChallenged($cha)
    {
        $this->chanllenged = $cha;
    }
    public function getChallenger()
    {
        return $this->challenger;
    }
    public function setChallenger($chall)
    {
        $this->challenger = $chall;
    }
    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rou)
    {
        $this->rounds = $rou;
    }
    public function getApproved()
    {
        return $this->approved;
    }
    public function setApproved($app)
    {
        $this->approved = $app;
    }
}
