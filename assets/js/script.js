$(document).ready(function () {

    console.log("working fine");


})



function submitFormData() {

    let formData = new FormData(formId);

    $.ajax({
        url: "http://localhost/frame/MyForm/success",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            if(data == 1){
                console.log("form submitted successfully");
            }
            else{
                data = JSON.parse(data);
                console.log(data);
                $(".error").text("");
                $('.image-Error').text("");
                
                if(data.fields == 'fields'){
                    for (let i = 0; i < data.errorKeys.length; i++) {
                        $(`.${data.errorKeys[i]}-Error`).text(data.errorValues[i]);
                    }
                    if(data.errorKeys[0] === 'image'){
                        $(".image-Error").text("Image is required")
                    }
                }
                if(data.fields == 'image'){
                    $('.image-Error').text(data.imageError);
                }
            }
        }
    })

}


















































