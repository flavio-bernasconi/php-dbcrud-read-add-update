<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.2.0/handlebars.js" charset="utf-8"></script>

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="script.js"></script>


    <title>bibite database</title>


  </head>
  <body>
    <div class="container">






      <div class="head-text">
        <h1 class="big-one">bibite</h1>
        <h4 class="btn-add">Add drink</h4>

        <div class="form">
          <div class="form-content">
            <p>Nome</p>
            <input type="text" id="new-nome">
            <p>Prezzo</p>
            <input type="number" id="new-prezzo">
            <p>Marca</p>
            <input type="text" id="new-company">
            <p>Scadenza</p>
            <input type="date" id="new-scadenza">
            <a class="btn-send">ADD ITEM</a>
          </div>
        </div>
      </div>



      <div id="bibite-wrapper">

      </div>
    </div>









    <script class="template" type="text/x-handlebars-template">
          <div class="bibita" data-id="{{id}}">
              <div class="text">
                <h2 class="nome-bibita">{{nome}}</h2>
                <h3 class="price">prezzo : ${{prezzo}}</h3>
                <h5>{{marca}}</h5>
                <p>scadenza : {{scadenza}}</p>
              </div>
              <div class="up" data-id="{{id}}">
                <p class="btn-update">Update</p>
                <p class="btn-delete">delete</p>
              </div>
          </div>
    </script>



  </body>
</html>
