<? $a = isset($_GET['a']) ? $_GET['a'] : '';
?>

<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
      <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="text" name="a" value="<?= $a; ?>" class="form-control" placeholder="Search..." aria-label="Search"></br>
        </form>   </div></div>

<div id="artikel">
  <?php if ($artikel) : foreach ($artikel as $row) : ?>
      <article class="artikel">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
        <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=$row['judul']; ?>">
          <div>
            <h2>
              <?= $row['judul']; ?>
            </h2>
            <p><?= substr($row['isi'], 0, 200); ?></p>
          </div>
        </a>
        
      </article>
  </div>
  
      <hr class="divider" />
      
    <?php endforeach;
  else : ?>
    <article class="entry">
      <h2>Belum ada data.</h2>
    </article>
  <?php endif; ?>
  

  <!-- Pagination component -->
  <?= $pager->only(['a'])->links(); ?>


<?= $this->include('template/footer'); ?>