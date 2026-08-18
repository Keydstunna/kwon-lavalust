<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    /**
     * Guards the /student/profile route.
     *
     * Unique access condition for this activity:
     * A session flag 'student_access' must be set to true.
     * You can set this in your bootstrap/index page, e.g.:
     *     $_SESSION['student_access'] = true;
     *
     * Adjust the method name/signature (handle, before, run, etc.)
     * to match whatever base Middleware class your installed
     * LavaLust version provides.
     */
    public function handle()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Not authorized -> send back to the student home page
            header('Location: ' . site_url('student'));
            exit;
        }

        // Access allowed -> request continues to StudentController::profile()
        return true;
    }
}
