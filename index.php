<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert your text here</title>
  </head>
  <body>
    Text <input type="text" name="text" id = "text" value="">
    <div class="" id = "result">
    </div>
    <button type="button" name="button" onclick = "result();">Submit</button> <br>

    <script type="text/javascript">
      <?php
      require 'config.php';
      $words = mysqli_query($conn, "SELECT * FROM word");
      foreach($words as $word){
         $badword[] = $word["badword"];
         $goodword[] = $word["goodword"];
      }
      ?>

      function replace(text, badword, goodword) {
        var badwordindexof, badwordsubstring;

        for (var i = 0; i < badword.length; i++) {
          for(var j = 0; j < text.length; j++){
            badwordindexof = text.toLowerCase().indexOf(badword[i]);
            if(badwordindexof != -1){
              badwordsubstring = text.substring(badwordindexof, badword[i].length + badwordindexof);
              text = text.replace(badwordsubstring, goodword[i]);
            }
            else{
              text = text;
            }
            text = text;
          }
        }

        return text;
      }

      function result(){
        var badword = <?php echo json_encode($badword); ?>;
        var goodword = <?php echo json_encode($goodword); ?>;
        var text = document.getElementById('text').value;
        document.getElementById("result").innerHTML = replace(text, badword, goodword);;
      }
    </script>
  </body>
</html>
