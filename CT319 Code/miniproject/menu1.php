<?php include 'condb.php' ?> <!-- เรียกใช้งานตัวคอนดีบี -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Little Baby Shop</title>

  <style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
html,body{
  margin:0;
  height:120%;
  font-family: 'Josefin Sans', sans-serif;

}
a{
  text-decoration:none
}
.header{
  position:relative;
  overflow:hidden;
  display:flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  align-content: flex-start;
  height:50vw;
  min-height:400px;
  max-height:550px;
  min-width:300px;
  color:#eee;
}
.header:after{
  content:"";
  width:100%;
  height:100%;
  position:absolute;
  bottom:0;
  left:0;
  z-index:-1;
 background: linear-gradient(to bottom, rgba(0,0,0,0.12) 40%,rgba(27,32,48,1) 100%);
}
.header:before{
  content:"";
  width:100%;
  height:200%;
  position:absolute;
  top:0;
  left:0;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0); backface-visibility: hidden;
  scale(1.0, 1.0);
    transform: translateZ(0);
  background:#1B2030 url(https://i.pinimg.com/564x/dc/5d/b3/dc5db30f82686ecde8b13dddb1418306.jpg) 50% 0 no-repeat;
  background-size: cover; /* ปรับให้เป็น cover */
  background-size:100%;
  background-attachment:fixed;
  animation: grow 360s  linear 10ms infinite;
  transition:all 0.4s ease-in-out;
  z-index:-2
}
.header a{
  color:#eee
}
.menu{
  display:block;
  width:40px;
  height:30px;
  border:2px solid #fff;
  border-radius:3px;
  position:absolute;
  right:20px;
  top:20px;
  text-decoration:none
}
.menu:after{
  content:"";
  display:block;
  width:20px;
  height:3px;
  background:#fff;
  position:absolute;
  margin:0 auto;
  top:5px;
  left:0;
  right:0;
  box-shadow:0 8px, 0 16px
}
.logo{
  border:2px solid #fff;
  border-radius:3px;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  align-content:center;
  margin:20px;
  padding:0px 10px;
  font-weight:900;
  font-size:1.1em;
  line-height:1;
  box-sizing:border-box;
  height:40px
}
.sides, .info{
  flex: 0 0 auto;
  width:50%
}
.info{
  width:100%;
  padding:15% 10% 0 10%;
  text-align:center;
  text-shadow:0 2px 3px rgba(0,0,0,0.2)
}
.author{
  display:inline-block;
  width:50px;
  height:50px;
  border-radius:50%;
  background:url(https://scontent.fbkk5-6.fna.fbcdn.net/v/t39.30808-6/287158661_5120633664686302_537861398672775933_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=uvtdYMC91o0AX-NcmQE&_nc_oc=AQk60AqMxbRh7efUeij5N0_dra_LDhyrasdUQBs_MYYEpuddB8s4MqUmsfRLeAAPHIE&_nc_ht=scontent.fbkk5-6.fna&oh=00_AfDJsqU0lKWCBG0B6I5glWpVUzmzFXeWEGU5mVKPkothZQ&oe=650E538F) center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px
}
.info h4, .meta{
  font-size:0.7em
}
.meta{
  font-style:italic;
}
@keyframes grow{
  0% { transform: scale(1) translateY(0px)}
  50% { transform: scale(1.2) translateY(-400px)}
}
.content{  
  padding:5% 10%;
  text-align:justify
}
.btn{
  color:#333;
  border:2px solid;
  border-radius:3px;
  text-decoration:none;
  display:inline-block;
  padding:5px 10px;
  font-weight:600
}

.twtr{
  margin-top:100px
}.btn.twtr:after{content:"\1F426";padding-left:5px}

</style>

</head>


<body>
<div class="header">
  <div class="sides">
    <a href="admin/index.php" class="logo">Admin</a>
  </div>

  <div class="sides"> <a href="menu2.php" class="menu"></a></div>

  
  <div class="info">
    <h4><a href="#category">Welcome</a></h4>
    <h1>THAI TRADITION</h1>
    <div class="meta">
      <a href="https://twitter.com/nodws" target="_blank" class="author"></a><br>
      By <a href="https://twitter.com/nodws" target="_blank">Rangsima Nawaphon ID: 630406401291</a> on Sep 20, 2023
    </div>
  </div>
</div>
<section class="content">
  <p>ประเพณี เป็นกิจกรรมที่มีการปฏิบัติสืบเนื่องกันมา เป็นเอกลักษณ์และมีความสำคัญต่อสังคม เช่น การแต่งกาย ภาษา วัฒนธรรม ศาสนา ศิลปกรรม กฎหมาย คุณธรรม ความเชื่อ ฯลฯ อันเป็นบ่อเกิดของวัฒนธรรมของสังคมเชื้อชาติต่างๆ กลายเป็นประเพณีประจำชาติและถ่ายทอดกันมาโดยลำดับ หากประเพณีนั้นดีอยู่แล้วก็รักษาไว้เป็นวัฒนธรรมประจำชาติ หากไม่ดีก็แก้ไขเปลี่ยนแปลงไปตามกาลเทศะ.</p>
  <p>Tradition (English: tradition) is an activity that has been practiced continuously. It is unique and important to society such as dress, language, culture, religion, art, law, morality, beliefs, etc., which is the source of culture of societies of various races. It has become a national tradition and has been passed down in succession. If the tradition is already good, then preserve it as national culture. If it's not good, change it according to the occasion.</p>

  <p align="center"><a href="https://www.facebook.com/profile.php?id=100002191574012" class="btn twtr" target="_blank">Follow me on Facebook</a></p>
</section>
</body>
</html>
