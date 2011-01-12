window.fbAsyncInit = function() {
    FB.init({
        appId: '<?= $fbconfig['appid'] ?>', status: true, cookie: true, xfbml: true
        });

    /* All the events registered */
    FB.Event.subscribe('auth.login', function(response) {
        // do something with response
        login();
    });
    FB.Event.subscribe('auth.logout', function(response) {
        // do something with response
        logout();
    });
};
(function() {
    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.src = document.location.protocol +
    '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
}());

function login(){
    document.location.href = "<?= $config['baseurl'] ?>";
}
function logout(){
    document.location.href = "<?= $config['baseurl'] ?>";
}