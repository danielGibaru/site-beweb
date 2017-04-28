var api_url = "http://api.beweb.local";
var api_key = "{24927EE0-34C7-4963-9CC7-4DECDA07CEE9}";


$().ready(function(){
    $("#contactform").submit(function(){
        sendContactMessage();
        return false;
    });
});

function sendContactMessage(){
    $.ajax({
        type:"POST",
        url: api_url + "/?Contact/Send/&api_key=" + api_key,
        dataType: "json",
        data: {"email":   $("#contactemail").val(),
               "subject": $("#contactsubject").val(),
               "message": $("#contactcontent").val()},
        success: function(msg) {
            alert(msg.message);
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
}