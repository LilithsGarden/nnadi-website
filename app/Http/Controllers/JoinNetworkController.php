<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotificationMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class JoinNetworkController extends Controller
{
    /**
     * Handle a "Join My Network" form submission.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            // 1. Send welcome email to the user
            Mail::to($request->email)->send(new WelcomeMail($request->name));

            // 2. Send notification email to admin
            $adminEmail = env('ADMIN_EMAIL', 'admin@ifeanyinnadi.com');
            Mail::to($adminEmail)->send(new AdminNotificationMail(
                $request->email,
                $request->phone,
                $request->ip()
            ));

            return response()->json([
                'success' => true,
                'message' => 'Successfully joined the network!',
            ]);
        } catch (\Throwable $e) {
            Log::error('Join Network Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong: ' . $e->getMessage(),
            ], 500);
        }
    }
}