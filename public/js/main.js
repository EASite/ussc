$(document).ready(function() {
    console.log($('#action_message').text());

    setTimeout( function() {
        $('#action_message').fadeOut();
    }, 2500);
});
