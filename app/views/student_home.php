<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'Trebuchet MS', 'Segoe UI', sans-serif;
    color: #eaf0ff;
    min-height: 100vh;
    padding: 40px 16px;
    background-color: #0a0e2a;
    background-image: repeating-conic-gradient(#141a44 0% 25%, #10143a 0% 50%);
    background-size: 60px 60px;
    animation: bgShift 18s linear infinite;
  }

  @keyframes bgShift {
    0%   { background-position: 0 0; }
    100% { background-position: 600px 600px; }
  }

  nav {
    max-width: 640px;
    margin: 0 auto 20px auto;
    background: linear-gradient(180deg, #3a2a12, #1c1305);
    padding: 14px 24px;
    border: 3px solid #f7c948;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.5);
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }
  nav a {
    color: #f7c948;
    text-decoration: none;
    font-weight: bold;
    text-shadow: 1px 1px 2px #000;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  nav a:hover { color: #fff; }
  nav svg { width: 18px; height: 18px; fill: currentColor; }

  .wrap {
    max-width: 640px;
    margin: 0 auto;
    padding: 32px;
    background: linear-gradient(160deg, #2d4373, #16234a);
    border: 3px solid #f7c948;
    border-radius: 16px;
    box-shadow: 0 0 30px rgba(247,201,72,0.3), inset 0 0 20px rgba(0,0,0,0.4);
    text-align: center;
  }

  h1 {
    font-family: 'Lilita One', 'Trebuchet MS', sans-serif;
    font-size: 2.1em;
    background: linear-gradient(90deg, #f7c948, #fff8d6, #f7c948);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: shine 3s linear infinite;
    letter-spacing: 1px;
    margin-bottom: 16px;
  }

  @keyframes shine {
    0%   { background-position: 0% center; }
    100% { background-position: 200% center; }
  }

  p { line-height: 1.7; color: #dbe4ff; margin-bottom: 10px; }

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
    transition: transform 0.15s;
  }
  .btn:hover { transform: translateY(2px); box-shadow: 0 2px 0 #7a5312; }

  @media (max-width: 480px) {
    body { padding: 20px 10px; }
    .wrap { padding: 20px; }
    h1 { font-size: 1.5em; }
    nav { padding: 12px 16px; justify-content: center; }
  }
</style>
</head>
<body>
  <nav>
    <a href="<?= site_url('student') ?>">
      <svg viewBox="0 0 24 24"><path d="M12 3 2 12h3v8h6v-6h2v6h6v-8h3z"/></svg>
      Home
    </a>
    <a href="<?= site_url('student/profile') ?>">
      <svg viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5z"/></svg>
      Student Profile
    </a>
  </nav>

  <div class="wrap">
    <h1>STUDENT PORTAL</h1>
    <p>
      Welcome, Chief! Town Hall Level: Junior Grinder. Main troop
      composition: coffee, late-night debugging, and a suspicious amount
      of tutorial tabs open at once.
    </p>
    <p>
      This Student Information Page was built using the LavaLust PHP
      Framework for the Web Systems and Technologies laboratory activity
      on Routing, Controllers, Views, and Middleware.
    </p>
    <a class="btn" href="<?= site_url('student/profile') ?>">Enter Profile →</a>
  </div>
</body>
</html>