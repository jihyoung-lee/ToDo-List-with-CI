
<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
            <ul>
      테스트!!
      <?php
      foreach ($Tests as $entry){
          ?>
          <li><a href="/index.php/test/get/<?=$entry->id?>"><?=$entry -> name?></a> </li>
                <?php

      }
      ?>
            </ul>
</body>
</html>