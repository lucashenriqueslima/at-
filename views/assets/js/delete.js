<script>

$(window).on("load", function(){

  $("body").on("click", "[data-action]", function(e) {
    e.preventDefault();

  var r = confirm("Tem certeza que deseja excluir o usuário?");
  if (r == true) {
    var data = $(this).data();
    var div = $(this).parent().parent();

    $.post(data.action, data, function(){
      div.fadeOut();
      setTimeout(function(){  
      M.toast({
                            html: 'Usuário deletado com sucesso!',
                            displayLength: 3500,
                            classes:' green '
                        }) 
                    
                      },200)

    },"json").fail(function (){
        alert ("Erro ao processar requisição!");
    });

  }


  })

});
    </script>