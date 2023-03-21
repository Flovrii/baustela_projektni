<html>
  
  <head>
    <title>Školske novine</title>
  </head>

  
  <body>

    <div class="container">
      <div class="vertical-center">
        <nav>
            <a class="anim" href="/">Početna</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
               $session = session();
               $sessionCheck = $session->get('username');
               if(isset($sessionCheck))
               {
                echo "<a class='anim' href='Auth/logout'>Logout</a>";
              }
              else
              {
                echo "<a class='anim' href='Auth/'>Prijava</a>";
              }?>
           <?php
              $session = session();
              $check = $session->get('username');
              if(isset($check) && $check== 'admin')
              {
                echo "<a class='anim' href='News/create'>Kreiraj</a>";
              }
            ?>
        </nav>
        
      </div>
    </div>

    

    <main>

    <div class="container1">
      <div class="vertical-center1">
        

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

      </div>
    </div>
      
</main>


<style>

  h2{
  font-family: calibri;
  font-weight: 10;
  font-size: 20px;
  margin: 0px;
 }

 .logo{
   position: absolute;
   width: 100px;
   left: 1%;
   padding: 5px;
 }
  
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  
  .container {
  height: 40px;
  position: relative;
}

  .vertical-center {
  margin: 0;
  position: absolute;
  top: 140%;
  left: 32%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center;
}

.vertical-center.1 {
  margin: 0;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center;
}

.container1 {

  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  body {
  margin: 0px;
}
  
  nav{
  text-align: center;
  font-family: calibri;
  color: black;
  line-height: 5vh;
  background-color: lightgray;
}


  main{
  font-size: 2vh;
  background-color: white;
  font-family: Yu Gothic UI Semibold;
  color: black;
  background-color: white;
  background-image: url("back.jpg");
  height: 100vh;
  margin: 0px;
}
  
  footer{
  text-align: center;
  font-size: 2vh;
  background-color: rgb(150, 162, 176);
  font-family: Calibri;
  color: white;
  line-height: 3.7vh;
  height: 25vh;
}

  .anim{
  text-align: center;
  font-size: 40px;
  font-weight: 10;
  color: black;
  text-decoration: none;
  background:linear-gradient(currentColor 0 0) bottom /var(--d, 0) 3px no-repeat;
  transition:0.3s;
}
  
  .anim:hover {
  --d: 100%;
  color: black;
}

  .row::after {
  content: "";
  clear: both;
  display: table;
}

  .row::after {
  clear: both;
  display: table;
  border-collapse: collapse;
}

  div.gallery {
  margin: 50px;
  border: 10px solid white;
  width: 500px;
  position: relative;
  text-align: center;
  color: white;  
  font-size: 50px;
}

  div.gallery:hover {
  box-shadow: 0 0 5px 1px gray;
}

  div.gallery img {
  width: 500px;

}

  div.desc {
  padding: 15px;
  width: 500px;
  text-align: center;
}

  table {
  margin-left: auto;
  margin-right: auto;
}

</style>