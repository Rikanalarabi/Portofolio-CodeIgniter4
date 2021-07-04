<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><p> No Telphone: <a href="https://wa.me/6281313243232"><?= $a['Wa']; ?></a></p></li>
                    <li><p>Email : <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=Rikanalarabi8@gmail.com?" class="text-drak fw-bold"><?= $a['Email']; ?></a></p></li>
                    <li><p>Alamat : <?= $a['alamat']; ?></p></li>
                    <li><p>Domisili : <?= $a['domisili']; ?></p></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
    <div class="row text-center mb-3">
                <div class="col">
                    <h2>Message</h2>
                </div>
            </div>
    <div class="row justify-content-center">
                <div class="col-md-9">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        
                         <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#dc3545" fill-opacity="1" d="M0,0L288,128L576,160L864,0L1152,128L1440,0L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
<?= $this->endSection(); ?>