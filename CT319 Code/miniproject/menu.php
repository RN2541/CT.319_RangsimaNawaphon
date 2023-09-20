<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* เพิ่ม CSS สำหรับสีที่ต้องการ */
        .bg-custom {
            background-color: #b2e0df; 
        }

        /* เพิ่ม CSS เพื่อทำรูปให้เป็นวงกลม */
        .rounded-image {
            border-radius: 50%; /* 50% คือทำให้เป็นวงกลม */
        }
        
         </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-custom"> <!-- เปลี่ยน bg-info เป็น bg-custom -->
    <div class="container"> <!-- Center the content within the navbar -->
      <?php
      $imageUrl = "https://i.pinimg.com/564x/91/2a/bf/912abf25f151df56fac543889e9ebc77.jpg";
      ?>
      <img src="<?php echo $imageUrl; ?>" width="70" height="70" alt="" class="rounded-image">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>&nbsp;&nbsp;


<!-- ปุ่มย้อนกลับ -->
<button onclick="window.history.back();">คลิกเพื่อย้อนกลับ</button>

      <!----- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu1.php">ย้อนกลับ</a>
          </li>         
        </ul> --->

        <form class="d-flex" action="search.php" method="GET">
  <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">
    <i class="fas fa-search"></i> <!-- Add the search icon here -->
  </button>
</form>




      </div>
    </div>
  </nav>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
