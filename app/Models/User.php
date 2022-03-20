<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    const ADMIN = 'Admin';
    const BASIC_MERCHANT = 'Basic';
    const PRO_MERCHANT = 'Pro';
    const ENTERPRISE_MERCHANT = 'Enterprise';
    const DEFAULT = 'Normal';

    const TABLE = 'users';

    protected $table = self::TABLE;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'line1',
        'line2',
        'city',
        'state',
        'country',
        'postal_code',
        'stripe_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Methods

    public function getID(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getUserType(): int
    {
        return $this->type;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getProfileImage(): string
    {
        return $this->profile_image;
    }

    public function getLineOne(): string
    {
        return $this->line1;
    }

    public function getLineTwo(): string
    {
        return $this->line2;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    public function isAdmin(): bool
    {
        return $this->type() === self::ADMIN;
    }

    public function isBasicMerchant(): bool
    {
        return $this->type() === self::BASIC_MERCHANT;
    }

    public function isProMerchant(): bool
    {
        return $this->type() === self::PRO_MERCHANT;
    }

    public function isEnterpriseMerchant(): bool
    {
        return $this->type() === self::ENTERPRISE_MERCHANT;
    }

    public function isDefault(): bool
    {
        return $this->type() === self::DEFAULT;
    }
}
