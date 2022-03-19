<?php

namespace Database\Seeders;

use App\Models\MembershipPlan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MembershipPlan::create([
            'name' => 'Basic',
            'slug' => 'basic-plan',
            'description' => 'Start your business and build a beautiful website to display your products.',
            'stripe_name' => 'Basic Plan',
            'stripe_product_id' => 'prod_L9UeaYK01GrQg7',
            'stripe_price_id' => 'price_1KTBexCdtNxrS9O3iEtdhaxY',
            'price' => 20,
        ]);
        MembershipPlan::create([
            'name' => 'Pro',
            'slug' => 'pro-plan',
            'description' => 'Everything in the Basic plan and more!',
            'stripe_name' => 'Pro Plan',
            'stripe_product_id' => 'prod_L9Ue2YT4RQnZax',
            'stripe_price_id' => 'price_1KTBexCdtNxrS9O3iEtdhaxY',
            'price' => 50,
        ]);
    }
}
