<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mapStyle.css');?>" media="all"/>
  <title>Map</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">หน้าหลัก
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">บริการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">แผนที่</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">กิจกรรม</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
        </ul>
        <?php $session = session(); ?>
        <a href="/profile" class="btn btn-primary"><?php echo "" . $session->get('user_name'); ?></a>
        <a href="/login" class="btn btn-primary">ออกจากระบบ</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="category-sidebar">
      <ul>
        <li><a href="#">โซนธุรกรรม</a></li>
        <li><a href="#">โซนการเรียน</a></li>
        <li><a href="#">โซนบริการ</a></li>
        <li><a href="#">โซนอาหาร</a></li>
        <li><a href="#">โซนกิจกรรมออกกำลังกาย</a></li>
        <li><a href="#">โซนสีเขียว</a></li>
      </ul>
    </div>
    <div class="map">
      <img src="<?php echo base_url('css/map.jpg');?>" alt="แผนที่" id="su-map" >
    </div>
    <textarea id="detail">
          2.สะพานสระแก้วเป็นสถานที่พักผ่อนสามารถให้อาหารปลาและน้องๆที่น่ารักได้
        </textarea>
  </div>

  <button id="button1">1</button>
  <button id="button2">2</button>
  <button id="button3">3</button>
  <button id="button4">4</button>
  <button id="button5">5</button>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo base_url('css/mapScript.js');?>"></script>

</html>