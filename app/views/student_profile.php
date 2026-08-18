<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title ?></title>
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
  }
  nav a {
    color: #f7c948;
    text-decoration: none;
    margin-right: 24px;
    font-weight: bold;
    text-shadow: 1px 1px 2px #000;
  }
  nav a:hover { color: #fff; }

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
  }
  .name-row h1 {
    font-size: 1.6em;
    background: linear-gradient(90deg, #f7c948, #fff8d6, #f7c948);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: shine 3s linear infinite;
  }
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
    color: #f7c948;
    font-size: 1.1em;
    margin-bottom: 12px;
    text-shadow: 1px 1px 0 #000;
  }

  table { width: 100%; border-collapse: collapse; }
  td { padding: 10px 8px; border-bottom: 1px solid rgba(247,201,72,0.2); color: #dbe4ff; }
  td.label { color: #f7c948; font-weight: bold; width: 40%; }

  .section p { color: #dbe4ff; line-height: 1.6; }

  .social-row { display: flex; gap: 14px; margin-top: 6px; }
  .social-icon {
    width: 46px; height: 46px;
    border-radius: 12px;
    background: #1e2a55;
    border: 2px solid #f7c948;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3em;
    text-decoration: none;
    color: #f7c948;
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .social-icon:hover {
    transform: translateY(-6px) scale(1.1);
    box-shadow: 0 8px 16px rgba(247,201,72,0.4);
  }

  .badge {
    display: block;
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
</style>
</head>
<body>
  <nav>
    <a href="<?= site_url('student') ?>">🏠 Home</a>
    <a href="<?= site_url('student/profile') ?>">🛡️ Student Profile</a>
  </nav>

  <div class="card-wrap">
    <div class="banner"></div>
    <div class="profile-box">
      <div class="avatar">?</div>
      <div class="name-row">
        <h1><?= $student['name'] ?></h1>
        <span>👑</span>
      </div>
    </div>

    <div class="section">
      <h2>Student Information</h2>
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
      <h2>🏰 About This Base</h2>
      <p><?= $student['description'] ?></p>
    </div>

    <div class="section">
      <h2>⚔️ Hobbies & Interests</h2>
      <p><?= $student['hobbies'] ?></p>
    </div>

    <div class="section">
      <h2>🔗 Social Links</h2>
      <div class="social-row">
        <a class="social-icon" href="<?= $student['github'] ?>" target="_blank">🐙</a>
        <a class="social-icon" href="<?= $student['facebook'] ?>" target="_blank">📘</a>
        <a class="social-icon" href="<?= $student['instagram'] ?>" target="_blank">📸</a>
      </div>
    </div>

    <div class="section">
      <div class="quote-box">
        "You can't win at everything, but you can try."
        <span class="quote-sub">— Eraserheads</span>
      </div>
    </div>

    <div class="section">
      <div class="badge">🔓 Base Unlocked — Access granted by StudentMiddleware</div>
    </div>
  </div>
</body>
</html>