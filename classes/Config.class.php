<?php


class Config implements iFrozeConfig
{
    protected $config = [];

    protected $fresh_max_amount;
    protected $froze_max_amount;

    const fresh_amount = 'fresh_max_amount';
    const froze_amount = 'froze_max_amount';


    public function __construct($maxFresh, $maxFroze)
    {
        if((isset($maxFroze) && isset($maxFresh)) && (is_numeric($maxFroze) && is_numeric($maxFresh))) {
            $this -> config = [
                self::fresh_amount => $this->fresh_max_amount = $maxFresh,
                self::froze_amount => $this->froze_max_amount = $maxFroze
            ];
        }

    }

    public function getMaxFrozeWeigth () {
        return $this->config['froze_max_amount'];
    }

    public function getMaxFreshWeigth () {
        return $this->config['fresh_max_amount'];
    }

    public function validateFresh ($eatName) {
        if($eatName->getWeight() < $this->getMaxFreshWeigth()) {
            $amount = $this->config['fresh_max_amount'] - $eatName->getWeight();
            $this->config['fresh_max_amount'] = $amount;
            return true;
        } else {
            return false;
        }

    }
    



}

interface iFrozeConfig {
    public function __construct($maxFresh, $maxFroze);
    public function validateFresh ($eatName);
  
}