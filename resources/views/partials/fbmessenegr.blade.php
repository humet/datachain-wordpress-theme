<script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
<script>
  var myLandbot = new LandbotLivechat({
    index: 'https://landbot.io/u/H-210125-BKMTLHJ7HILMQ0RM/index.html',
  });
</script><script>
  // Show a proactive message on landbot load
  myLandbot.on('landbot-load', () => {
    myLandbot.sendProactive("Need some help?");
  });
</script>


<script> 
   // Custom Avatar in Proactive Message  (Different than Header Pic) 
   //TODO=> CHANGE URL FOR CUSTOM URL PICTURE// 
   var urlCustomAvatar = "https://www.socialchain.com/wp-content/uploads/2019/07/SC-Data-Icon2.png"; 

   //DO NOT EDIT BELOW THIS LINE// 
   var holderUrl = `url(${urlCustomAvatar})` 
   myLandbotLivechat.on('landbot-load', () => { window.document.getElementsByClassName("LandbotProactive__frame__content")[0].contentDocument.body.childNodes[0].childNodes[0].childNodes[3].childNodes[1].childNodes[0].childNodes[0].childNodes[0].style.backgroundImage = holderUrl 

  // ualee_076 // }); 
</script>


<script> 
  //  myLandbotLivechat.on('landbot-load', () => { 
  //  var frameBody = window.document.getElementsByClassName("LandbotProactive__frame__content")[0].contentDocument.body; 
  //  frameBody.querySelector(".hu-message-author").style.display = "none" 
  //  // ualee_077 // });

   myLandbotLivechat.on('landbot-load', () => { 
   var frameBody = window.document.getElementsByClassName("LandbotProactive__frame__content")[0].contentDocument.body; 
   frameBody.querySelector(".hu-message-author").style.display = "none"});

</script>