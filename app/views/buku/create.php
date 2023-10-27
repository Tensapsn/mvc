<div class="container">
    <h3 class="mb-3">Ajukan Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/buku/updateBuku" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang">
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor">Adaptor</option>
                    <option value="LAN">LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>