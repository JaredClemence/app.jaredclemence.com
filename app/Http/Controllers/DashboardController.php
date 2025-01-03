<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        $logFile = storage_path('logs/last_run.log');
        $logEntries = [];

        if (File::exists($logFile)) {
            $logEntries = array_reverse(array_slice(file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES), -10));
        }

        return view('dashboard', ['logEntries' => $logEntries]);
    }
}

