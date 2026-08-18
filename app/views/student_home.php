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
        p { line-height: 1.7; color: #e6e6e6; }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: linear-gradient(180deg, #f7c948, #c98f1c);
            color: #1c1305;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #7a5312;
            box-shadow: 0 4px 0 #7a5312;
        }
        .btn:hover { transform: translateY(2px); box-shadow: 0 2px 0 #7a5312; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('student') ?>">🏠 Home</a>
        <a href="<?= site_url('student/profile') ?>">🛡️ Student Profile</a>
    </nav>

    <div class="wrap">
        <h1>⚔️ CIT STUDENT PORTAL ⚔️</h1>
        <p>
            Welcome, Chief! This Student Information Page was built using the
            LavaLust PHP Framework for the Web Systems and Technologies
            laboratory activity on Routing, Controllers, Views, and Middleware.
        </p>
        <p>Tap <strong>Student Profile</strong> above to enter the protected base.</p>
        <a class="btn" href="<?= site_url('student/profile') ?>">Enter Profile →</a>
    </div>
</body>
</html>