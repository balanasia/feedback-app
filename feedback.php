<!-- Created by: https://github.com/bradtraversy -->

<?php
  include 'inc/header.php';
?>

<?php
  $feedback = [
    ['id' => 1,
    'name' => 'Luz Noceda',
    'body' => 'Kewl Website! :)',
    ],
    ['id' => 2,
    'name' => 'Hooty da Owl',
    'body' => 'HOOT *o*',
    ]
  ]
?>
   
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3">
        <div class="card-body">
           <?php echo $item['body']; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <?php
  include 'inc/footer.php';
?>