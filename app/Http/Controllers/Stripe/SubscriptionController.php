<?php

namespace App\Http\Controllers\Stripe;

use Illuminate\Http\Request;
use App\Models\MembershipPlan;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.memberships.subscribe', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();

        $paymentMethod = $request->input('payment-method');

        $user->update([
            'line1'         => $request->line1,
            'line2'         => $request->line2,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'postal_code'   => $request->postal_code,
        ]);

        $plan = MembershipPlan::where('stripe_name', $request->plan)->first();

        $user->newSubscription($plan->stripe_name, $plan->stripe_price_id)
            ->create($paymentMethod);

        $user->update([
            'trial_ends_at' => NULL,
        ]);

        return redirect()->route('billing')->with('success', 'Thank you for subscribing!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
