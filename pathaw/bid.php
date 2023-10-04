<?php

class Bid
{

    private $minimumBid = 5;
    private $bidAmount;

    # set bid amount
    public function setBidAmount($amount)
    {
        if ($amount <= $this->minimumBid)
        {
            $this->bidAmount = $this->minimumBid;
            return;
        }
        else
        {
            $this->bidAmount = $amount;
        }
    }

    # get bid amount
    public function getBidAmount()
    {
        return $this->bidAmount;
    }
}

$bid = new Bid();
$bid->setBidAmount(50);
echo $bid->getBidAmount();

