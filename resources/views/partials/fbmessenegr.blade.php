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