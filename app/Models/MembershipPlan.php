<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPlan extends Model
{
    use HasFactory;


    public function getName(): string
    {
        return $this->name;
    }

    public function getStripeName(): string
    {
        return $this->stripe_name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getBenefitOne(): string
    {
        return $this->benefit_one;
    }

    public function getBenefitTwo(): string
    {
        return $this->benefit_two;
    }

    public function getBenefitThree(): string
    {
        return $this->benefit_three;
    }

    public function getBenefitFour(): string
    {
        return $this->benefit_four;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
