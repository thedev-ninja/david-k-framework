    $.ajax({url: "/david/api/listings/companies/", success: function(result){
        $("#listdata").html(result);
        console.log(result);
    }});