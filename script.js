window.onload = function(){
    var intervalID = setInterval(function () {
        updateListenMessage();
    }, 500);
    $('#text').keyup(function(){
        onMessageType();
    });
};

function onMessageType() {
    let arr = $('#chatForm').serialize();
    //check user and pass
    //send message to database
    $.post("postText.php", arr, function (data) {
        $('#updateText').text(data);
    }, 'text');
}

function updateListenMessage() {
    let arr = $('#listenForm').serialize();
    //check user and pass
    //send message to database
    $.post("getText.php", arr, function (data) {
        $('#listenText').text(data);
    }, 'text');
}