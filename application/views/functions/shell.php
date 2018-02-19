  <div class="list-group">
  <div id="sidemenu">
    <h4>Resource Manager</h4>
    <ul id="rm">
      <?php
      $arrayResource = array();
       ?>

       <!-- <div><p id="line1" class="list-group-item list-group-item-action">Init div</p></div> -->
      <!-- <div><p id="line2" class="list-group-item list-group-item-action"></p></div>
      <div><p id="line3" class="list-group-item list-group-item-action"></p></div>
      <div><p id="line4" class="list-group-item list-group-item-action"></p></div> -->
      <!-- <div><li><a href="#" class="list-group-item list-group-item-action shell">Dapibus ac facilisis in</a></li></div> -->
      <!-- <div><li><a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a></li></div> -->
      <!-- <div><li><a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a></li></div> -->
      <!-- <div><li><a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a></li></div> -->
    </ul>
  </div>
</div>


<script type="text/javascript">

  $(document).ready(function(){
  $(document).keydown(function(e){
        //CTRL + C keydown combo
        if(e.ctrlKey && e.keyCode == 67){
              $("#check").text(selectedtext());
              // $(".shell").text("putangina");
              // $(".shell").text(window.getSelection().toString());
              //document.execCommand('copy')
              //alert(window.clipboardData.getData());
        }
  });
  });



</script>
