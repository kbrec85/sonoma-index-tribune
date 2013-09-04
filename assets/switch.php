<?php
  session_start();
  //grab referring url
  //$redirectUrl = $_SERVER['HTTP_REFERER'];
  echo 'Switching view. Please hold.';
  //start session for mobile switch
  if(isset($_GET['desktop'])){
   $_SESSION['view']='desktop';
  }
  elseif(isset($_GET['mobile'])){
   $_SESSION['view']='mobile';
  }
 
?>
<script type="text/javascript">
  window.location = 'http://sit.allnorthbay.com/';
</script>
