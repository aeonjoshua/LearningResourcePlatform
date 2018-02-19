<p>Individual Project</p>
  <a id="conv" href ="<?php echo base_url(); ?>user/profile"> Back to Profile </a>
<script type="text/javascript">
function selectedtext(){
  var iframe = document.getElementById('pdfview');
  var idoc = iframe.contentDocument || iframe.contentWindow.document; // ie compatibility
  var str = idoc.getSelection().toString();
  var cout = str.length;
  //var arr = jQuery.makeArray(lines);
  if(cout==0){
    alert("No text selected");
    }
  else {
    $("#rm").append('<div><p class="list-group-item list-group-item-action">'+str+'</p></div>');
    str=null;
  }
}
</script>

<?php
  foreach ($showproj as $project) {
    echo '<h2>'.
    $project['title'].
    '</h2><p><small>Uploaded by: </small><a href="#">'.
    $project['uploader'].
    '</a><br><small><i><a href="#">'.
    $project['course'].'</a></i></small> | <small><i>'.
    date('F d, Y (h:i A)', strtotime($project['dateuploaded'])).
    '</i></small></p>'.
    '<iframe id="pdfview" width="700" height="850" src="./output/'.
    $project['filename'].
    '"></iframe><button type="button" onClick="selectedtext()">Add to Resource Manager</button>';
  //   '<iframe src="./output/lorem_ipsum.html'.
  //   $project['filename'].
  //   '" width="600" height="800"></iframe>';
   }
?>

<!-- <div id="pdfv" width="600" height="800" w3-include-html="./output/lorem_ipsum.html"></div>

<script type="text/javascript">
w3.includeHTML();
</script> -->
