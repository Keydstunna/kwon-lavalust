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
        nav a:hover { text-decoration: underline; }
        .wrap {
            max-width: 640px;
            margin: 60px auto;
            padding: 30px;
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 8px;
        }
        h1 { color: #39d353; }
        p { line-height: 1.6; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>

    <div class="wrap">
        <h1>Welcome to the CIT Student Portal</h1>
        <p>
            This is a simple Student Information Page built using the
            LavaLust PHP Framework for the Web Systems and Technologies
            laboratory activity on Routing, Controllers, Views, and
            Middleware.
        </p>
        <p>Click <strong>Student Profile</strong> above to view protected student details.</p>
    </div>
</body>
</html>
