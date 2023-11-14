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
 
        <li><a href="#" id="toggleButtons">โซนการเรียน</a></li>
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
  
  <button id="button6">6</button>
  <button id="button7">7</button>
  <button id="button8">8</button>
  <button id="button9">9</button>
  <button id="button10">10</button>
  
  <button id="button11">11</button>
  <button id="button12">12</button>
  <button id="button13">13</button>
  <button id="button14">14</button>
  <button id="button15">15</button>
  
  <button id="button16">16</button>
  <button id="button17">17</button>
  <button id="button18">18</button>
  <button id="button19">19</button>
  <button id="button20">20</button>
  
  <button id="button21">21</button>
  <button id="button22">22</button>
  <button id="button23">23</button>
  <button id="button24">24</button>
  <button id="button25">25</button>
  
  <button id="button26">26</button>
  <button id="button27">27</button>
  <button id="button28">28</button>
  <button id="button29">29</button>
  <button id="button30">30</button>
  <div id="buttonContainer">
  <button id="button31">31</button>
  <button id="button32">32</button>
  <button id="button33">33</button>
  <button id="button34">34</button>
  <button id="button35">35</button>
  
  <button id="button36">36</button>
  <button id="button37">37</button>
  <button id="button38">38</button>
  <button id="button39">39</button>
  <button id="button40">40</button>
  <div id="buttonContainer">
  <button id="button1">41</button>
  <button id="button2">42</button>
  <button id="button3">43</button>
  <button id="button4">44</button>
  <button id="button5">45</button>
</div>
  <button id="button1">46</button>
  <button id="button2">47</button>
  <button id="button3">48</button>
  <button id="button4">49</button>
  <button id="button5">50</button>
  
  <button id="button1">51</button>
  <button id="button2">52</button>
  <button id="button3">53</button>
  <button id="button4">54</button>
  <button id="button5">55</button>
  
  <button id="button1">56</button>
  <button id="button2">57</button>
  <button id="button3">58</button>
  <button id="button4">59</button>
  <button id="button5">60</button>
  
  <button id="button1">61</button>
  <button id="button2">62</button>
  <button id="button3">63</button>
  <button id="button4">64</button>
  <button id="button5">65</button>

  <button id="button1">66</button>
  <button id="button2">67</button>
  <button id="button3">68</button>
  <button id="button4">69</button>
  <button id="button5">70</button>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo base_url('css/mapScript.js');?>"></script>

</html>