$(function(){
    $("#loginForm").on("submit",function(){
        var formData = new FormData($('#loginForm')[0]);
        formData.append("request_type", "login");
        $.ajax({
            url: "./api/auth.php",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function (data)
            { 
                $(".alert").remove()
                $(`<div class="alert alert-${data.status ? 'success':'danger'}" role="alert">${data.message}</div>`).insertBefore(".formRow");
                setTimeout(() => {
                     if(data.status){
                        $('#loginForm')[0].reset();
                        location.href = 'dashboard.php'
                        return false
                    }
                } , 2500);
                                
            }
        });
        return false;
    })

})