<div class="container-fluid">
    <div class="row">

    <?php foreach ($barang as $barang) :?>

        <div class="card" style="width: 16rem;">
            <img src="..." class="card-img-top "alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
              <p class="card-text"> Some quick example text to build</p>
              <a href="#" class="btn btn-primary"> Go somewhere</a>
            </div>
        </div>
        
        <?php endforeach; ?>
    </div>
</div>