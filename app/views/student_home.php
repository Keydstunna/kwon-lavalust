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

  .crest {
    width: 70px;
    height: 78px;
    margin: 0 auto 14px auto;
  }

  h1 {
    font-family: 'Lilita One', 'Trebuchet MS', sans-serif;
    font-size: 2.3em;
    letter-spacing: 1px;
    -webkit-text-stroke: 2px #5a3a10;
    color: #ffd25c;
    background: linear-gradient(180deg, #fff6d0 0%, #ffd25c 45%, #e8a626 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow:
      3px 3px 0 #5a3a10,
      4px 4px 8px rgba(0,0,0,0.6);
    margin-bottom: 18px;
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
    h1 { font-size: 1.6em; }
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
    <svg class="crest" viewBox="0 0 60 68">
      <path d="M30 2 6 10v18c0 16 10 30 24 38 14-8 24-22 24-38V10z"
            fill="#2d4373" stroke="#f7c948" stroke-width="3"/>
      <path d="M18 24 22 16 27 22 30 14 33 22 38 16 42 24 40 34H20z"
            fill="#f7c948" stroke="#5a3a10" stroke-width="1"/>
      <circle cx="22" cy="16" r="2" fill="#f7c948"/>
      <circle cx="30" cy="14" r="2" fill="#f7c948"/>
      <circle cx="38" cy="16" r="2" fill="#f7c948"/>
    </svg>

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