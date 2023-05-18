<main>
  <div class="">
    <div class="card-container d-flex flex-wrap gap-4">
      <?php foreach ($products as $key => $product){?>
        <div class="card">
          <div class="images">
            <img class="card-img-top" src="<?php echo $product->img; ?>" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $product->name; ?></h5>
            <p class="card-text"><span>Prezzo : </span> <?php echo $product->price; ?>€</p>
            <p class="card-text"><span>Categoria : </span> <?php echo $product->category->name; ?></p>
            <p class="card-text"><?php echo $product->category->icon; ?></p>
          </div>
        </div>
      <?php }; ?>
    </div>
  </div>
</main>