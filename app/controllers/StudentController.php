<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once _DIR_ . '/../middlewares/StudentMiddleware.php';

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = true;

        $data['page_title'] = 'Student Portal - Home';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $middleware = new StudentMiddleware();
        $middleware->handle();

        $student = [
            'student_id'  => '2024-00242',
            'name'        => 'Kier Lawrence Ignacio',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => '3-F5',
            'email'       => 'kierignacio02@gmail.com',
            'barangay'    => 'Barangay Masipit, Calapan City, Oriental Mindoro',
            'description' => 'Sophomore-energy builder still upgrading skills one error message at a time. Into networking, embedded systems, and full-stack development.',
            'hobbies'     => 'Programming, sleeping, playing online games, gardening, watching movies and reading manga',
            'github'      => 'https://github.com/Keydstunna',
            'facebook'    => 'https://www.facebook.com/share/1DWP6rnxw7/',
            'instagram'   => 'https://www.instagram.com/kwonbluu',
        ];

        $data['page_title'] = 'Student Portal - Profile';
        $data['student']    = $student;
        $this->call->view('student_profile', $data);
    }
}