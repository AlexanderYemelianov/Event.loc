$(document).ready(function() {

    $(".popup").magnificPopup({type:'image'});

    $('.decorations-containers').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled:true
        }
    });

});
