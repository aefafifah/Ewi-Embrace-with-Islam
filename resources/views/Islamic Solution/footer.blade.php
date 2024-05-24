<link rel="stylesheet" href="css/footer.css">
<div id="contact">
    <div class="wrapper">
        <div class="footer">
            <div class="footer-section">
                <h3>Akses Kelas Premium?</h3>
                <p>Dapatkan bimbingan lebih intensif bersama mentor-mentor berpengalaman!</p>
                <form action="/" method="POST">
                    @csrf <!-- Laravel CSRF Protection -->
                    <div class="row">
                        <div class="col">
                            <label>Nama:</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Jenis kelamin:</label>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Umur:</label>
                            <input type="number" name="umur" class="form-control" placeholder="Umur">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>No.Telp:</label>
                            <input type="tel" name="no_telp" class="form-control" placeholder="Nomor Telepon"
                                pattern="[0-9]{10}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Alamat:</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Permasalahan Yang Dihadapi</label>
                        <textarea name="permasalahan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit" value="Daftar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
