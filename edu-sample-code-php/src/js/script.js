function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }  

    if(!$("#age").val()) {
        $("#age-info").html("(required)");
        $("#age").css('background-color','#FFFFDF');
        valid = false;
    } 
    if(!$("#phone").val()) {
        $("#phone-info").html("(required)");
        $("#phone").css('background-color','#FFFFDF');
        valid = false;
    }  
    return valid;
}

function confirmationDelete(){
    var conf = confirm('Are you sure want to delete this patient?');
    if(conf)
        window.location=anchor.attr("href");
}