$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '3514656423',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '3514656423.1677ed0.1b31984b2d28401b84acb85c1755a2bc',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});