
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title ?></title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Trebuchet MS', 'Arial Black', sans-serif;
            background: linear-gradient(180deg, #1a2a6c, #0d1b3e 60%, #05070f);
            color: #fff8e7;
            min-height: 100vh;
        }
        nav {
            background: linear-gradient(180deg, #3a2a12, #1c1305);
            padding: 16px 24px;
            border-bottom: 4px solid #f7c948;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }
        nav a {
            color: #f7c948;
            text-decoration: none;
            margin-right: 24px;
            font-weight: bold;
            font-size: 1.1em;
            text-shadow: 1px 1px 2px #000;
        }
        nav a:hover { color: #fff; }
        .wrap {
            max-width: 640px;
            margin: 60px auto;
            padding: 32px;
            background: linear-gradient(160deg, #2d4373, #16234a);
            border: 3px solid #f7c948;
            border-radius: 16px;
            box-shadow: 0 0 30px rgba(247,201,72,0.3), inset 0 0 20px rgba(0,0,0,0.4);
        }
        h1 {
            color: #f7c948;
            text-shadow: 2px 2px 0 #000, 0 0 10px rgba(247,201,72,0.5);
            font-size: 2em;
            text-align: center;
            letter-spacing: 1px;
        }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td { padding: 12px 10px; border-bottom: 1px solid rgba(247,201,72,0.25); }
        td.label {
            color: #f7c948;
            font-weight: bold;
            width: 40%;
            text-shadow: 1px 1px 1px #000;
        }
        .badge {
            display: block;
            text-align: center;
            margin-top: 24px;
            padding: 10px 16px;
            background: linear-gradient(180deg, #4caf50, #2e7d32);
            border: 2px solid #1b5e20;
            border-radius: 8px;
            color: #fff;
            font-weight: bold;
            box-shadow: 0 3px 0 #1b5e20;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('student') ?>">🏠 Home</a>
        <a href="<?= site_url('student/profile') ?>">🛡️ Student Profile</a>
    </nav>

    <div class="wrap">
        <h1>🛡️ PLAYER PROFILE 🛡️</h1>
        <table>
            <tr><td class="label">Student ID</td><td><?= $student['student_id'] ?></td></tr>
            <tr><td class="label">Name</td><td><?= $student['name'] ?></td></tr>
            <tr><td class="label">Course</td><td><?= $student['course'] ?></td></tr>
            <tr><td class="label">Year Level</td><td><?= $student['year'] ?></td></tr>
            <tr><td class="label">Section</td><td><?= $student['section'] ?></td></tr>
            <tr><td class="label">Email</td><td><?= $student['email'] ?></td></tr>
            <tr><td class="label">Barangay</td><td><?= $student['barangay'] ?></td></tr>
        </table>
        <div class="badge">🔓 Base Unlocked — Access granted by StudentMiddleware</div>
    </div>
</body>
</html>