    $.ajax({url: "/david/api/listings/individuals/", success: function(result){
        $("#listdata").html(result);
        console.log(result);
    }});