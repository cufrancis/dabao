<div class="container">
    <h1><?php echo $cursor->name;?></h1>
    <p>
        created_at:<span id="created_at"><?php echo $cursor->created_at;?></span> |
        updated_at:<?php echo $cursor->updated_at;?> |
        finished_at:<?php echo $cursor->finished_at;?> |
        Teacher:<a href="/user/<?php echo $cursor->teacher->id;?>"><?php echo $cursor->teacher->username;?></a>
    </p>

</div>
