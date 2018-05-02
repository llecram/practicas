$(document).ready({

$("#buscar").click(function(){
    $.ajax({url: "main.php", success: function(result){
        $("#div1").html(result);
    }});
});	
	
	
});
