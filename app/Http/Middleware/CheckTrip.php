<?php

namespace App\Http\Middleware;

use Closure;
use App\Trip;

class CheckTrip
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    private $trip;

    public function __construct(Trip $trip) {
        $this->trip = $trip;
    }

    public function handle($request, Closure $next)
    {
        $trip = $this->trip->findOrFail($request->route('id'));

        $userID = auth()->user()->id;

        if ($userID != $trip['admin']) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
