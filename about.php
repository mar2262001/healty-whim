<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Las características que nos distinguen:</h1>
    <ul class="list-group">
      <?php
        $i = 0;
        while ($i < count($features)) {
          echo "<li class=\"list-group-item\">$features[$i]</li>";  
          $i++;
        }
      ?>
  </ul>
  </div>
</div>
