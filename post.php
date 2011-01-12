<html>
    <head>
      <title>My Great Website</title>
    </head>
    <body>
      <div id="fb-root"></div>
      <script src="http://connect.facebook.net/en_US/all.js">
      </script>
      <script>
         FB.init({ 
            appId:'160859240627581', cookie:true, 
            status:true, xfbml:true 
         });

        FB.ui(
   {
     method: 'feed',
	 display: 'popup',
     name: 'Facebook Dialogs',
     link: 'http://carbonfootprint.omahaha.com/',
     picture: 'http://fbrell.com/f8.jpg',
     caption: 'Reference Documentation',
     description: 'Dialogs provide a simple, consistent interface for applications to interface with users.',
     message: 'Facebook Dialogs are easy!'
   },
   function(response) {
     if (response && response.post_id) {
       alert('Post was published.');
     } else {
       alert('Post was not published.');
     }
   }
 );
      </script>
	  <a name=”fb_share” type=”button_count” href=”http://carbonfootprint.omahaha.com/index.php”>Share</a>
<script src=”http://static.ak.fbcdn.net/connect.php/js/FB.Share” type=”text/javascript”></script>
     </body>
 </html> 