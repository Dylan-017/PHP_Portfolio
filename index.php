<?php include("includes/data.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $fullname ?> | Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <div class="header-left">
        <h1><?= $fullname ?></h1>
        <p><?= $location ?></p>
        <p><?= $phone ?></p>
        <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
        <p><a href="http://<?= $website ?>" target="_blank"><?= $website ?></a></p>
      </div>
      <div class="header-right">
        <img src="dylan.png" alt="Profile Picture">
      </div>
    </header>

    <section class="summary">
      <h2>Profile</h2>
      <p><?= $profile_summary ?></p>
    </section>

    <section class="columns">
      <div>
        <h2>Expertise</h2>
        <ul>
          <?php foreach ($expertise as $skill) echo "<li>$skill</li>"; ?>
        </ul>

        <h2>Operational Skills</h2>
        <ul>
          <?php foreach ($operational_skills as $skill) echo "<li>$skill</li>"; ?>
        </ul>
      </div>
      
      <div>
        <h2>Experience</h2>
        <?php foreach ($experience as $job): ?>
          <h3><?= $job['role'] ?> — <?= $job['company'] ?></h3>
          <p class="job-date"><?= $job['period'] ?></p>
          <ul>
            <?php foreach ($job['details'] as $detail) echo "<li>$detail</li>"; ?>
          </ul>
        <?php endforeach; ?>
      </div>
    </section>

    <section>
      <h2>Education</h2>
      <ul>
        <?php foreach ($education as $edu): ?>
          <li>
            <strong><?= $edu['degree'] ?></strong><br>
            <?= $edu['institution'] ?> (<?= $edu['year'] ?>)
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>
</body>
</html>
