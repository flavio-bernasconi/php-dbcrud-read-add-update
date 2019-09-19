$(document).ready(init);



function getBibite(){

  resetSection();

  $.ajax({
      url : "api.php",
      method : "GET",
      success : function(data){
      console.log(data);

      var source = $(".template").html();
      var template = Handlebars.compile(source);

      for (var i = 0; i < data.length; i++) {
        var d = data[i];

        var context = d;

        var html = template(context);
        $("#bibite-wrapper").append(html);

      }

    },//fine success
    error: function(err){
      console.log(err);
    }
  })

};

function deleteBibita(){

  var id = $(this).parent().data('id');
  console.log(id);

  $.ajax({
      url : "api-delete.php",
      method : "GET",
      data : {
        id : id
      },
      success : function(data){
        console.log(data);
        getBibite();

    },//fine success
    error: function(err){
      console.log(err);
    }
  })

}

function updateBibita(){

  var id = $(this).parent().data('id');
  console.log("id = ",id);

  var newPrice = prompt("new price?");
  console.log("new price = ", newPrice);


  $.ajax({
      url : "api-update.php",
      method : "GET",
      data : {
        id : id,
        price : newPrice
      },
      success : function(data){
        console.log(data);
        getBibite()

    },//fine success
    error: function(err){
      console.log(err);
    }
  })

}

function addBibita(){

  var new_nome = prompt("nome");
  var new_marca = prompt("marca");
  var new_prezzo = prompt("prezzo");
  var new_scadenza = prompt("scadenza");

  $.ajax({
      url : "api-add.php",
      method : "GET",
      data : {
        nome : new_nome,
        marca : new_marca,
        prezzo: new_prezzo,
        scadenza : new_scadenza
      },
      success : function(data){
        console.log(data);
        getBibite();

    },//fine success
    error: function(err){
      console.log(err);
    }
  })



}





function resetSection(){
  $("#bibite-wrapper").html("");
}

function  init(){
  console.log("funziona");
  getBibite();

  $(document).on("click",".btn-delete", deleteBibita);
  $(document).on("click",".btn-update", updateBibita);
  $(document).on("click",".btn-add", addBibita);

}
