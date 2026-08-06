<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a message submitted through the portfolio contact form.
     *
     * Validates the incoming request server-side, persists the message, and
     * returns a JSON result so the page can show a toast without reloading.
     * The route is throttled so the form cannot be spammed.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:160'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        ContactMessage::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thanks! Your message is on its way.',
        ]);
    }
}
