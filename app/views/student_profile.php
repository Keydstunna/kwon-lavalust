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

  .card-wrap { max-width: 640px; margin: 0 auto; }

  .banner {
    height: 90px;
    border-radius: 16px 16px 0 0;
    background: linear-gradient(120deg, #2d4373, #16234a 60%, #0a0e2a);
    border: 3px solid #f7c948;
    border-bottom: none;
  }

  .profile-box {
    background: linear-gradient(160deg, #16234a, #0a0e2a);
    border: 3px solid #f7c948;
    border-top: none;
    border-radius: 0 0 16px 16px;
    padding: 24px;
    position: relative;
    box-shadow: 0 0 25px rgba(247,201,72,0.25);
  }

  .avatar {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    margin-top: -65px;
    border: 4px solid #f7c948;
    background-image: url('<?= base_url('images/KIER.jpg') ?>');
    background-size: cover;
    background-position: center;
    box-shadow: 0 0 20px rgba(168,107,255,0.7);
    animation: avatarGlow 2.4s ease-in-out infinite;
  }

  @keyframes avatarGlow {
    0%, 100% { box-shadow: 0 0 15px rgba(168,107,255,0.6); }
    50%      { box-shadow: 0 0 30px rgba(168,107,255,1); }
  }

  .name-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 14px;
    flex-wrap: wrap;
  }
.name-row h1 {
    font-family: 'Lilita One', 'Trebuchet MS', sans-serif;
    font-size: 1.8em;
    letter-spacing: 1px;
    -webkit-text-stroke: 1.5px #5a3a10;
    color: #ffd25c;
    background: linear-gradient(180deg, #fff6d0 0%, #ffd25c 45%, #e8a626 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow:
      2px 2px 0 #5a3a10,
      3px 3px 6px rgba(0,0,0,0.6);
  }
  .name-row svg { width: 22px; height: 22px; fill: #f7c948; }
  @keyframes shine {
    0%   { background-position: 0% center; }
    100% { background-position: 200% center; }
  }

  .section {
    background: linear-gradient(160deg, #16234a, #0e1638);
    border: 2px solid #f7c948;
    border-radius: 14px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 0 15px rgba(247,201,72,0.15);
    transition: box-shadow 0.3s;
  }
  .section:hover { box-shadow: 0 0 25px rgba(247,201,72,0.4); }

.section h2 {
    font-family: 'Lilita One', 'Trebuchet MS', sans-serif;
    letter-spacing: 0.5px;
    color: #ffd25c;
    -webkit-text-stroke: 1px #5a3a10;
    text-shadow: 1.5px 1.5px 0 #5a3a10;
    font-size: 1.15em;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .section h2 svg { width: 18px; height: 18px; fill: #f7c948; }

  table { width: 100%; border-collapse: collapse; }
  td { padding: 10px 8px; border-bottom: 1px solid rgba(247,201,72,0.2); color: #dbe4ff; word-break: break-word; }
  td.label { color: #f7c948; font-weight: bold; width: 40%; }

  .section p { color: #dbe4ff; line-height: 1.6; }

  .social-row { display: flex; gap: 14px; margin-top: 6px; flex-wrap: wrap; }
  .social-icon {
    width: 46px; height: 46px;
    border-radius: 12px;
    background: #1e2a55;
    border: 2px solid #f7c948;
    display: flex; align-items: center; justify-content: center;
    text-decoration: none;
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .social-icon svg { width: 22px; height: 22px; fill: #f7c948; }
  .social-icon:hover {
    transform: translateY(-6px) scale(1.1);
    box-shadow: 0 8px 16px rgba(247,201,72,0.4);
  }

  .badge {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-align: center;
    margin-top: 8px;
    padding: 10px 16px;
    background: linear-gradient(180deg, #4caf50, #2e7d32);
    border: 2px solid #1b5e20;
    border-radius: 8px;
    color: #fff;
    font-weight: bold;
    box-shadow: 0 3px 0 #1b5e20;
  }
  .badge svg { width: 18px; height: 18px; fill: #fff; }

  .quote-box {
    text-align: center;
    font-style: italic;
    color: #f7c948;
    font-size: 1em;
    padding: 6px;
  }
  .quote-sub {
    display: block;
    margin-top: 8px;
    font-style: normal;
    font-size: 0.8em;
    color: #9fb0d8;
  }

  @media (max-width: 480px) {
    body { padding: 20px 10px; }
    .profile-box, .section { padding: 16px; }
    .name-row h1 { font-size: 1.3em; }
    nav { padding: 12px 16px; justify-content: center; }
    td, td.label { font-size: 0.9em; }
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

  <div class="card-wrap">
    <div class="banner"></div>
    <div class="profile-box">
      <div class="avatar"></div>
      <div class="name-row">
        <h1><?= $student['name'] ?></h1>
        <svg viewBox="0 0 24 24"><path d="M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5z"/></svg>
      </div>
    </div>

    <div class="section">
      <h2>
        <svg viewBox="0 0 24 24"><path d="M4 4h16v2H4zM4 8h16v12H4z"/></svg>
        Student Information
      </h2>
      <table>
        <tr><td class="label">Student ID</td><td><?= $student['student_id'] ?></td></tr>
        <tr><td class="label">Course</td><td><?= $student['course'] ?></td></tr>
        <tr><td class="label">Year Level</td><td><?= $student['year'] ?></td></tr>
        <tr><td class="label">Section</td><td><?= $student['section'] ?></td></tr>
        <tr><td class="label">Email</td><td><?= $student['email'] ?></td></tr>
        <tr><td class="label">Barangay</td><td><?= $student['barangay'] ?></td></tr>
      </table>
    </div>

    <div class="section">
      <h2>
        <svg viewBox="0 0 24 24"><path d="M3 21V10l9-6 9 6v11h-6v-6H9v6z"/></svg>
        About This Base
      </h2>
      <p><?= $student['description'] ?></p>
    </div>

    <div class="section">
      <h2>
        <svg viewBox="0 0 24 24"><path d="M6 2 3 6l6 6-6 6 3 4 6-6 6 6 3-4-6-6 6-6-3-4-6 6z"/></svg>
        Hobbies & Interests
      </h2>
      <p><?= $student['hobbies'] ?></p>
    </div>

    <div class="section">
      <h2>
        <svg viewBox="0 0 24 24"><path d="M3.9 12a4.1 4.1 0 0 1 4.1-4.1h4V6H8a6 6 0 0 0 0 12h4v-1.9H8A4.1 4.1 0 0 1 3.9 12zM9 13h6v-2H9zm7-7h-4v1.9h4a4.1 4.1 0 0 1 0 8.2h-4V18h4a6 6 0 0 0 0-12z"/></svg>
        Social Links
      </h2>
      <div class="social-row">
        <a class="social-icon" href="<?= $student['github'] ?>" target="_blank">
          <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.03A9.6 9.6 0 0 1 12 6.8c.85 0 1.7.11 2.5.34 1.9-1.3 2.75-1.03 2.75-1.03.55 1.37.2 2.39.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10 10 0 0 0 12 2z"/></svg>
        </a>
        <a class="social-icon" href="<?= $student['facebook'] ?>" target="_blank">
          <svg viewBox="0 0 24 24"><path d="M13.5 21v-7.2h2.4l.36-2.8h-2.76V9.1c0-.8.22-1.35 1.38-1.35h1.47V5.24C15.98 5.17 15.1 5.1 14.08 5.1c-2.13 0-3.6 1.3-3.6 3.68v2.05H8.06v2.8h2.42V21z"/></svg>
        </a>
        <a class="social-icon" href="<?= $student['instagram'] ?>" target="_blank">
          <svg viewBox="0 0 24 24"><path d="M8 3h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3zm4 3.5A4.5 4.5 0 1 1 7.5 13 4.5 4.5 0 0 1 12 8.5zm0 2A2.5 2.5 0 1 0 14.5 13 2.5 2.5 0 0 0 12 10.5zM17 6.3a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"/></svg>
        </a>
      </div>
    </div>

    <div class="section">
      <div class="quote-box">
        "You can't win at everything, but you can try."
        <span class="quote-sub">— Eraserheads</span>
      </div>
    </div>

    <div class="section">
      <div class="badge">
        <svg viewBox="0 0 24 24"><path d="M6 10V8a6 6 0 0 1 12 0v2h1a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1zm2 0h8V8a4 4 0 0 0-8 0z"/></svg>
        Base Unlocked — Access granted by StudentMiddleware
      </div>
    </div>
  </div>
</body>
</html>