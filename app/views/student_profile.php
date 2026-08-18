<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title ?></title>
    <style>
        body {
            margin: 0;
            font-family: 'Consolas', monospace;
            background: #0d1117;
            color: #c9d1d9;
        }
        nav {
            background: #161b22;
            padding: 14px 24px;
            border-bottom: 2px solid #39d353;
        }
        nav a {
            color: #39d353;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }
        .wrap {
            max-width: 640px;
            margin: 60px auto;
            padding: 30px;
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 8px;
        }
        h1 { color: #39d353; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        td { padding: 10px 8px; border-bottom: 1px solid #30363d; }
        td.label { color: #8b949e; width: 40%; }
        .badge {
            display: inline-block;
            margin-top: 16px;
            padding: 6px 12px;
            background: #1f6feb22;
            border: 1px solid #1f6feb;
            border-radius: 4px;
            color: #58a6ff;
            font-size: 0.85em;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>

    <div class="wrap">
        <h1>Student Information</h1>
        <table>
            <tr><td class="label">Student ID</td><td><?= $student['student_id'] ?></td></tr>
            <tr><td class="label">Name</td><td><?= $student['name'] ?></td></tr>
            <tr><td class="label">Course</td><td><?= $student['course'] ?></td></tr>
            <tr><td class="label">Year Level</td><td><?= $student['year'] ?></td></tr>
            <tr><td class="label">Section</td><td><?= $student['section'] ?></td></tr>
            <tr><td class="label">Email</td><td><?= $student['email'] ?></td></tr>
            <tr><td class="label">Barangay</td><td><?= $student['barangay'] ?></td></tr>
        </table>
        <div class="badge">🔒 Access granted by StudentMiddleware</div>
    </div>
</body>
</html>
