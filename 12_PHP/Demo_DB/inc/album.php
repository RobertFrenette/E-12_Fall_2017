<div class="row">
  <?php
      $mountains = json_decode(getMountains(), true);

      foreach ($mountains as $mountain) {
          $mtn = array_values($mountain);
        
          echo('<div class="card">');
          echo('<img src="http://www.outdoors.org/story-images/images/' . $mtn[2] . '" alt="' . $mtn[0] . '">');
          echo('<p class="card-text">' . $mtn[0] . ': ' . $mtn[1] . '&#39;</p>');
          echo('</div>');
      }
  ?>
</div>
