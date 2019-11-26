	
    $(document).ready(function() {
        $(".submit").click(function(){
    		var categoria = $('#categoria').val();
    	});

    $.ajax({
        type:"post",//como vou enviar os dados ao servidor
        url:"insertcat.php",//para onde vou enviar
        data:categoria,// o que eu vou enviar
        //caso dê certo esse código é executado
        success: function(data){
            alert('success')
            
        },
        //caso dê erro esse código é executado
        error: function(data){
            navigator.notification.alert("Erro ao cadastrar!");
        }
    });

  });
