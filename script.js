window.onload = function(){
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
        console.log(data);
    }, 'text');
}