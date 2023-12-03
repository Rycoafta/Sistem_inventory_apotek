<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Inventory
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12">
                <p class="card-title">Kasir</p>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example3" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th hidden></th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($kasir as $Kasir) : ?>
                <tr id="<?= $Kasir['kode_obat'] ?>">
                    <td><?= $Kasir['kode_obat'] ?></td>
                    <td><?= $Kasir['nama_obat'] ?></td>
                    <td><?= $Kasir['jenis'] ?></td>
                    <td hidden><?= $Kasir['hj_obat'] ?></td>
                    <td>Rp.<?= $Kasir['hj_obat'] ?></td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <a class="badge badge-light" href="javascript::void(0)" onclick="addCart('<?= $Kasir['kode_obat'] ?>')"><i class="fas fa-cart-plus" style="color: #00ff00;"></i></a>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            <tfoot>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="card-body">
        <table id="" class="table table-bordered table-striped">
            <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Beli</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
            </thead>
            <tbody id="cart">

            </tbody>
        </table>
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="cart_total">Total</label>
                <input type="number" class="form-control" id="cart_total" placeholder="Rp." readonly>
            </div>
                <div class="form-group">
                <label for="cart_bayar">Bayar</label>
                <input type="number" class="form-control" id="cart_bayar" placeholder="Rp." onchange="kembalian()" required>
            </div>
            <div class="form-group">
                <label for="cart_kembalian">Kembali</label>
                <input type="number" class="form-control" id="cart_kembalian" placeholder="Rp." readonly>
            </div>
            <div class="form-group">
                <button type="button" onclick="konfirmasi()" class="btn btn-success mb-2">Konfirmasi</button>
                <a href="<?= route_to('kasir'); ?>" class="btn btn-danger mb-2">Batal</a>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

<script>
    var cart = [];
    function addCart(kode) {
        var nama = document.getElementById(kode).cells[1].innerHTML;
        var jumlah = 1;
        var harga = document.getElementById(kode).cells[3].innerHTML;
        var total = jumlah * harga;
        
        var data = {
            kode: kode,
            nama: nama,
            harga: harga,
            jumlah: jumlah,
            total: total
        };
        var index = cart.findIndex(function (item, i) {
            return item.kode === kode;
        });
        if (index === -1) {
            cart.push(data);
        } else {
            cart[index].jumlah += 1;
            cart[index].total = cart[index].jumlah * cart[index].harga;
        }
        renderCart();
        
        
    }

    function renderCart() {
        var html = '';
        var total = 0;
        cart.forEach(function (item, i) {
            html += '<tr>';
            html += '<td id="cart_' + item.kode + '" hidden>' + item.kode + '</td>';
            html += '<td>' + (i + 1) + '</td>';
            html += '<td>' + item.nama + '</td>';
            html += '<td>' + item.jumlah + '</td>';
            html += '<td>' + item.total + '</td>';
            html += '<td><a class="badge badge-light" href="javascript::void(0)" onclick="minCart(cart_'+item.kode+')"><i class="fas fa-minus" style="color: #ff0000;"></i></a> <a class="badge badge-light" href="javascript::void(0)" onclick="plusCart(cart_'+item.kode+')"><i class="fas fa-plus" style="color: #00ff00;"></i></a></td>';
            html += '</tr>';
            total += item.total;
        });
        document.getElementById('cart').innerHTML = html;
        document.getElementById('cart_total').value = total;
    }

    function minCart(id) {
        var kode = id.innerHTML;
        var index = cart.findIndex(function (item, i) {
            return item.kode === kode;
        });
        if (cart[index].jumlah > 1) {
            cart[index].jumlah -= 1;
            cart[index].total = cart[index].jumlah * cart[index].harga;
        } else {
            cart.splice(index, 1);
        }
        renderCart();
    }

    function plusCart(id) {
        var kode = id.innerHTML;
        var index = cart.findIndex(function (item, i) {
            return item.kode === kode;
        });
        cart[index].jumlah += 1;
        cart[index].total = cart[index].jumlah * cart[index].harga;
        renderCart();
    }

    function kembalian() {
        var total = document.getElementById('cart_total').value;
        var bayar = document.getElementById('cart_bayar').value;
        var kembalian = bayar - total;
        document.getElementById('cart_kembalian').value = kembalian;
    }

    function konfirmasi() {
        var total = document.getElementById('cart_total').value;
        var bayar = document.getElementById('cart_bayar').value;
        var kembalian = document.getElementById('cart_kembalian').value;
        if (kembalian < 0) {
            alert('Uang tidak cukup');
        } else {
            var data = {
                total: total,
                bayar: bayar,
                kembalian: kembalian,
                cart: cart
            };
            $.ajax({
                url: '<?= route_to('kasir/store'); ?>',
                type: 'POST',
                data: data,
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        alert('Transaksi berhasil');
                        window.location.href = '<?= route_to('kasir'); ?>';
                    } else {
                        alert('Transaksi gagal');
                        console.log(data);
                    }
                }
            });
        }
    }

</script>
<?= $this->endSection() ?>