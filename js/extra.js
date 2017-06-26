wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true        // default
                    }
                    )
wow.init();


var feed = new Instafeed({
    get: 'tagged',
    tagName: 'LoafshackWedding',
    clientId: 'b13ba61d7c504e03b04d3ff8033e4716'
});
feed.run();
