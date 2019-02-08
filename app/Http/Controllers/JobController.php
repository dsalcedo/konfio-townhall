<?php

namespace App\Http\Controllers;

use App\Jobs\ExampleJob;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function test()
    {
        $test = time();
        $tt = Carbon::now()->addMinutes(5);
        ExampleJob::dispatch($test)->delay($tt);
        ExampleJob::dispatch($test)->onQueue('onboarding');
        ExampleJob::dispatch($test)->onQueue('payments');
        ExampleJob::dispatch($test);

        // Synchronous Dispatching
        // ExampleJob::dispatchNow($test)
    }
}
