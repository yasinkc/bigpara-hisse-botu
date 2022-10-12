<!DOCTYPE html>
  <head>
    <base href="http://www.bigpara.com"></base>
    <style>
      html {
          height: 100%;
      }
      body {
        background-color: #ccc;
        display: flex;
        height: 100%;
      }
      .card {
        background-color: #e5e5e5;
        border-radius: 5px;
        border: 4px white solid;
        margin: auto;
        width: 450px;
        padding: 30px;
        text-align: center;
      }
    </style>
  </head>
  <body>
  <div class="card">
    <?php

      $name = "ASELS";

      $page_data = file_get_contents('http://www.bigpara.com/borsa/hisse-detay-bilgileri/'.$name.'');
      preg_match_all('@<span class="value">(.*?)</span>@si',$page_data,$data_price);
      preg_match_all('@<h1 class="pageTitle mBot10">(.*?)</h1>@si',$page_data,$data_title);
      preg_match_all('@<li class="item percent"><small>Değişim :</small><span>(.*?)</span></li>@si',$page_data,$data_change);
    ?>

      <p><?=$data_title[0][0] ?></p>
      <p>Change: <?=$data_change[1][0] ?></p>
      <h3>Current Price: <?=$data_price[0][0] ?></h3>

    
  </div>
  </body>
</html>


