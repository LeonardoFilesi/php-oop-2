<?php
require_once __DIR__ . '/models/products.php';
?>

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
          
            <?php if (get_class($product) === "food") { ?>
              <span>Da consumarsi entro :</span> <span class="caract"> <?php echo $product->getExpiration(); ?></p></span>
            <?php } ?>
           
            <?php try { ?>
              <?php $product->setDiscount(110); ?>
              <p class="card-text"><span>Sconto : </span> <span class="caract"><?php echo $product->getDiscount(); ?>%</span></p>
            <?php } catch (Exception $e) { ?>
              <p class="card-text">Errore nello sconto: <?php echo $e->getMessage(); ?></p>
            <?php } ?>
          
          </div>
        </div>
      <?php }; ?>
    </div>
  </div>
</main>