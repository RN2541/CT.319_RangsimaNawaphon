<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        @import url(//fonts.googleapis.com/css?family=Abril+Fatface|Droid+Serif:400,700,400italic,700italic);
        html,body{
            height:100%
        }
        body {
            background: linear-gradient(to bottom, rgba(0,5,10,0.4) 0%,rgba(0,0,0,0) 100%);
            font-family: 'Droid Serif', serif;
        }

        .blog-card {
            max-width: 550px;
            width:100%;
            height: 500px;
            position: relative; /* เปลี่ยนเป็น relative */
            font-family: 'Droid Serif', serif;
            color:#fff;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 0px;
            box-shadow: 0px 10px 20px -9px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: all 0.4s;
            background: url(https://unsplash.it/600/800?image=1061) center no-repeat;
            background-size: 100%;
        }

        .blog-card a{ 
            color:#fff;
            text-decoration:none;
            transition: all 0.2s;
        }

        .blog-card .color-overlay {
            background: rgba(64, 84, 94,0.5);
            width: 550px;
            height: 500px;
            position: absolute;
            z-index: 10;
            top: 0;
            left: 0;
            transition: background 0.3s cubic-bezier(0.33, 0.66, 0.66, 1);
        }

        .blog-card .gradient-overlay {  
            background-image: linear-gradient(transparent 0%, rgba(0, 0, 0, 0.6) 21%);
            width: 550px;
            height: 500px;
            position: absolute;
            top: 350px;
            left: 0;
            z-index: 15;
        }

        .blog-card:hover{
            box-shadow: 0px 18px 20px -9px rgba(0, 10, 30, 0.75);
        }

        .blog-card:hover .card-info {
            opacity: 1;
            bottom: 100px;
        }

        .blog-card:hover .color-overlay {
            background: rgba(64, 64, 70,0.8);
        }

        .blog-card:hover .title-content{
            margin-top:70px
        }

        .title-content {
            text-align: center;
            margin: 170px 0 0 0;
            position: absolute;
            z-index: 20;
            width: 100%;
            top: 0;
            left: 0;
            transition: all 0.6s;
        }

        .blog-card:hover h3:after{
            animation: changeLetter 0.3s 1 linear;
            width:80%
        }

        .blog-card h3,h1 {
            font-size: 1.9em;
            font-weight: 400;
            letter-spacing: 1px;
            font-family: 'Abril Fatface', serif;
            margin-bottom: 0;
            display:inline-block;
        }

        .blog-card h3 a{  
            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);  
            transition: all 0.2s;
        }

        .blog-card h3 a:hover{
            text-shadow: 0px 8px 20px rgba(0, 0, 0, 0.95);
        }

        h3:after {
            content: " ";
            display: block; 
            width: 10%;
            height: 2px;
            margin: 20px auto;
            border: 0;
            background: #BDA26B;
            transition: all 0.2s;
        }

        @keyframes changeLetter {
            0% {
                width: 10%;
            }
            100% {
                width: 80%;
            }
        }

        .intro {
            width: 170px;
            margin: 0 auto;
            color: #ddd;
            font-style: italic;
            line-height: 18px;
        }

        .intro a{
            color: #ddd
        }

        .intro a:hover{
            text-decoration:underline
        }

        .card-info {
            box-sizing: border-box;
            padding: 0;
            width: 100%;
            position: absolute;
            bottom: -40px;
            left: 0;
            margin: 0 auto;
            padding: 0 50px;
            font-style: 16px;
            line-height: 24px;
            z-index: 20;
            opacity: 0;
            transition: bottom 0.64s, opacity 0.63s cubic-bezier(0.33, 0.66, 0.66, 1);
        }

        .card-info a{
            display:block;
            width:100px;
            margin:15px auto;
            background:#fff;
            color:#444;
            padding:3px 10px;
            border-radius:2px;
            font-size:0.8em
        }

        .card-info a:hover{
            background: #8e7c49;
            color:#fff;
        }

        .card-info a:hover span{
            filter: brightness(10);
            opacity:1
        }

        .utility-info {
            position: absolute;
            bottom: 0px;
            left: 0;
            z-index: 20;
            width:100%;
            text-align:left
        }

        .utility-info:after{
            content:" ";
            background: url(https://rawcdn.githack.com/Nodws/NodPen/ffad95aa5244b4b09a3c7c1508a018959bbedb7e/postItem/licons.svg) center no-repeat;
            background-size: 30px auto;
            display:block;
            opacity: 0.4;
            position:absolute;
            bottom:25px;
            right:15px;
            width:30px;
            height:15px
        }

        .utility-info a:hover{
            text-decoration:underline
        }

        .utility-list {
            list-style-type: none;
            margin: 0 0 10px 20px;
            padding: 0;
            width: 100%;
        }

        .utility-list li {
            margin: 0 5px 0 0;
            padding: 3px 0 15px 0px;
            display: inline-block;
            font-size:0.8em
        }

        .licon{
            position:relative;  
            width:23px;
            height:15px;
            display:inline-block;
            vertical-align:middle;
        }

        .licon:before{
            content:"";
            background:url(https://rawcdn.githack.com/Nodws/NodPen/ffad95aa5244b4b09a3c7c1508a018959bbedb7e/postItem/licons.svg?) -2px -6px no-repeat;
            background-size:250px;
            width:26px;
            height:20px;
            display:inline-block;
            vertical-align:middle;
            position:absolute;
            top:-3px;
            left:0;
        }

        .icon-white{
            filter: brightness(10);
        }

        .icon-black{
            filter: brightness(0);
            opacity:0.6
        }

        .icon-like:before{
            background-position: -183px -6px;
        }

        .icon-com:before{
            background-position: -63px -4px;
        }

        .icon-dat:before{
            background-position: -94px -7px;
        }

        .icon-tag:before{
            background-position: -33px -6px;
        }

        @media (max-width:750px)
        {
            .utility-info {
                text-align:center;
            }
            .utility-info ul{
                width:100%;
                margin:0;
                box-sizing:border-box
            }
            .utility-info li{
                width:49%;
                display:inline-block;
                box-sizing:border-box;
                margin:0
            }
        }

        @media (max-width:500px){
            .utility-info li:last-of-type{
                width:100%
            }
            .card-info{
                display:none
            }
            .blog-card:hover .title-content,.title-content{
                margin-top:40px
            }
            .blog-card{
                height:300px
            }
            .blog-card h3{
                font-size:1.3em
            }
            .intro{
                font-size:0.8em
            }
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            
            <!-- ปุ่มย้อนกลับ -->
<button onclick="window.history.back();">คลิกเพื่อย้อนกลับ</button>

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline" action="search.php" method="GET" onsubmit="return validateForm()">
                            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search" id="searchInput">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="searchButton"><i class="bi bi-search"></i> Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="blog-card spring-fever">
                <div class="title-content">
                    <h3><a href="#">Northern traditions and culture</a></h3>
                </div>
                <div class="card-info">
                    ภาคเหนือ หรือคนส่วนใหญ่เรียกว่าล้านนา เป็นดินแห่งความหลายหลายทางวัฒนธรรม และประเพณี ที่มีเสน่ห์ให้ค้นหาไม่น้อยกว่าภาคอื่น ๆ ของไทย เพราะเป็นเมืองที่เต็มไปด้วยความน่าหลงไหล ทั้งสถานที่ท่องเที่ยว, ประวัติศาสตร์ความเป็นมา, ภาษาท้องถิ่น, การแต่งกาย, การละเล่นพื้นบ้าน, อาหารพื้นเมือง, ประเพณีภาคเหนือ และวัฒนธรรมภาคเหนือ นับเป็นกิจกรรมที่ปฎิบัติสืบต่อกันมาอย่างยาวนาน
                    <a href="north.php">Read More<span class="licon icon-arr icon-black"></span></a>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div><!-- /.blog-card -->
        </div>

        <div class="col-md-6">
            <div class="blog-card spring-fever">
                <div class="title-content">
                    <h3><a href="#">Traditions and culture of the central region</a></h3>
                </div>
                <div class="card-info">
                    ภาคกลาง ดินแดนแห่งความหลากหลายทางประเพณีและวัฒนธรรมที่มีความน่าสนใจ เพราะเป็นเมืองที่เต็มไปด้วยเสน่ห์มนต์ขลัง ชวนให้น่าขึ้นไปสัมผัสความงดงามเหล่านี้ยิ่งนักภาคกลางมีทั้งสิ้น 22 จังหวัด 
                    <a href="central_re.php">Read More<span class="licon icon-arr icon-black"></span></a>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div><!-- /.blog-card -->
        </div>
    </div>
</div>  <br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="blog-card spring-fever">
                <div class="title-content">
                    <h3><a href="#">Northeastern traditions and culture</a></h3>
                </div>
                <div class="card-info">
                ภาคอีสานหรือภาคตะวันออกเฉียงเหนือของประเทศไทย ประกอบไปด้วย 20 จังหวัดนี้ไม่ได้มีดีแค่อาหาร หรือเป็นแหล่งปลูกข้าวที่มีความสำคัญเป็นอันดับสองรองจากภาคกลางเท่านั้น แต่เนื่องจากลักษณะทางกายภาพที่มีพื้นที่ติดต่อกับประเทศลาว และกัมพูชา ซึ่งเป็นแหล่งอารยธรรมโบราณ จึงทำให้วัฒนธรรมประเพณี และความเชื่อของคนในภาคอีสานมีความหลากหลายแตกต่างกันไปในแต่ละท้องถิ่นและโดดเด่นจากภาคอื่นๆ อย่างชัดเจน
                    <a href="northeastern_re.php">Read More<span class="licon icon-arr icon-black"></span></a>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div><!-- /.blog-card -->
        </div>

        <div class="col-md-6">
            <div class="blog-card spring-fever">
                <div class="title-content">
                    <h3><a href="#">Southern traditions and culture</a></h3>
                </div>
                <div class="card-info">
                ภาคใต้ ดินแดนแห่งความหลากหลายทางประเพณีและวัฒนธรรมที่มีความน่าสนใจไม่น้อยไปกว่าภาคอื่นของไทย เพราะเป็นเมืองที่เต็มไปด้วยเสน่ห์มนต์ขลัง ชวนให้น่าขึ้นไปสัมผัสความงดงามเหล่านี้ยิ่งนักภาคใต้มีทั้งสิ้น 14 จังหวัด  ได้แก่    จังหวัดกระบี่   จังหวัดชุมพร   จังหวัดตรัง   จังหวัดนครศรีธรรมราช   จังหวัดนราธิวาส   จังหวัดปัตตานี  จังหวัดพังงา  จังหวัดพัทลุง จังหวัดภูเก็ต   จังหวัดระนอง  จังหวัดสตูล   จังหวัดสงขลา  จังหวัดสุราษฎร์ธานี  จังหวัดยะลา
                    <a href="south.php">Read More<span class="licon icon-arr icon-black"></span></a>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div><!-- /.blog-card -->
        </div>
    </div>
</div>




</body>
</html>
