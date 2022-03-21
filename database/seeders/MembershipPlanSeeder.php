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
            'benefit_one' => 'Host your own online store with DigitalCart',
            'benefit_two' => 'See analytics and sales reports in your dashboard',
            'benefit_three' => 'Unlimited products',
            'benefit_four' => '$1 + 10% per transaction',
            'description' => 'Start your business and build a beautiful website to display your products.',
            'stripe_name' => 'Basic Plan',
            'stripe_product_id' => 'prod_L9UeaYK01GrQg7',
            'stripe_price_id' => 'price_1KTBexCdtNxrS9O3iEtdhaxY',
            'price' => 20,
        ]);
        MembershipPlan::create([
            'name' => 'Pro',
            'slug' => 'pro-plan',
            'benefit_one' => 'Everything from the Basic plan',
            'benefit_two' => '5% per transaction',
            'benefit_three' => 'Product support',
            'benefit_four' => 'One on one chats with marketing experts',
            'description' => 'Everything in the Basic plan and more!',
            'stripe_name' => 'Pro Plan',
            'stripe_product_id' => 'prod_L9Ue2YT4RQnZax',
            'stripe_price_id' => 'price_1KTBfVCdtNxrS9O3p4npwJQI',
            'price' => 50,
        ]);
        MembershipPlan::create([
            'name' => 'Enterprise',
            'slug' => 'enterprise-plan',
            'benefit_one' => 'Everything from the Pro and Basic plans',
            'benefit_two' => 'Receive urgent support',
            'benefit_three' => 'Receive a committed marketing expert',
            'benefit_four' => 'No transaction fees',
            'description' => 'Everything in the Pro and Basic plans and more!',
            'stripe_name' => 'Enterprise Plan',
            'stripe_product_id' => 'prod_LLnp8uUlnh0IY8',
            'stripe_price_id' => 'price_1Kf6DZCdtNxrS9O3bbra3tsO',
            'price' => 300,
        ]);
    }
}
