<div class="d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <p class="card-text">
        Name: <?= $data['nama'] ?>
        <br>
        Job: <?= $data['pekerjaan'] ?>
    </p>
    <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>