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
                    <th hidden></th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
            foreach ($kasir as $Kasir) : ?>
                <tr id="<?= $Kasir['kode_obat'] ?>">
                    <td><?= $Kasir['kode_obat'] ?></td>
                    <td><?= $Kasir['nama_obat'] ?></td>
                    <td>Rp.<?= $Kasir['hj_obat'] ?></td>
                    <td hidden><?= $Kasir['hj_obat'] ?></td>
                    <td><?= $Kasir['jenis'] ?></td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <a class="badge badge-light" href="javascript::void(0)"
                                    onclick="addCart('<?= $Kasir['kode_obat'] ?>')"><i class="fas fa-cart-plus"
                                        style="color: #00ff00;"></i></a>
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
                    <th>Harga</th>
                    <th>Keterangan</th>
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
    <div class="row">
        <div class="col-6">
            <div class="card-body">
                <form method="POST" action="">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="cart_total">Total</label>
                        <input type="number" class="form-control" id="cart_total" placeholder="Rp." readonly>
                    </div>
                    <div class="form-group">
                        <label for="cart_bayar">Bayar</label>
                        <input type="number" class="form-control" id="cart_bayar" placeholder="Rp."
                            onchange="kembalian()" required>
                    </div>
                    <div class="form-group">
                        <label for="cart_kembalian">Kembali</label>
                        <input type="number" class="form-control" id="cart_kembalian" placeholder="Rp." readonly>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="konfirmasi()" class="btn btn-success mb-2">Konfirmasi</button>
                        <a href="<?= route_to('kasir'); ?>" class="btn btn-danger mb-2">Batal</a>
                        <!-- button print -->
                        <button type="button" onclick="printDiv('printArea')" class="btn btn-primary mb-2">Print</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="card-body" id="printArea">
                <div class="row">
                    <div class="col-6">
                        <p>
                            APOTEK DUA SAUDARA
                            <br>
                            Jl. Bojong Waru
                            <br>
                            Desa Renca Mulya
                            <br>
                            SIPA : 503/1.2.1/1.2.1/2020
                            <br>
                            SIA : 503/1.2.1/1.2.1/2020
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="<?= base_url('assets/img/duabersaudara.jpg'); ?>" align="right" alt="logo"
                            width="150px">
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <p>
                        APOTEK DUA SAUDARA
                        <br>
                        Jl. Bojong Waru
                        <br>
                        Desa Renca Mulya
                    </p>
                </div>
                <hr>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <p>
                            <?= date('d-m-Y'); ?> - <?= date('H:i'); ?>
                        </p>
                    </div>
                    <div class="col-4">
                        <p>
                            <?= date('Y'); ?>/Order/<?= $lastId; ?>
                        </p>
                    </div>
                    
                    <div class="col-4">
                        <p>
                            Kasir : <?= session()->get('username'); ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div>
                    <table class="table table-borderless">
                        <tbody  id="invoiceDetail">

                        </tbody>
                    </table>
                    <hr>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Total</td>
                                <td>:</td>
                                <td>Rp. <span id="invoice_total"></span></td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td>:</td>
                                <td>Rp. <span id="invoice_bayar"></span></td>
                            </tr>
                            <tr>
                                <td>Kembali</td>
                                <td>:</td>
                                <td>Rp. <span id="invoice_kembalian"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
            html += '<td><a class="badge badge-light" href="javascript::void(0)" onclick="minCart(cart_' + item
                .kode +
                ')"><i class="fas fa-minus" style="color: #ff0000;"></i></a> <a class="badge badge-light" href="javascript::void(0)" onclick="plusCart(cart_' +
                item.kode + ')"><i class="fas fa-plus" style="color: #00ff00;"></i></a></td>';
            html += '</tr>';
            total += item.total;
        });
        document.getElementById('cart').innerHTML = html;
        document.getElementById('cart_total').value = total;

        var htmlInvoice = '';
        cart.forEach(function (item, i) {
            htmlInvoice += '<tr>';
            htmlInvoice += '<td>' + (i + 1) + '</td>';
            htmlInvoice += '<td>' + item.nama + '</td>';
            htmlInvoice += '<td>' + item.jumlah + '</td>';
            htmlInvoice += '<td>Rp.' + item.harga + '</td>';
            htmlInvoice += '<td>Rp.' + item.total + '</td>';
            htmlInvoice += '</tr>';
        });
        document.getElementById('invoiceDetail').innerHTML = htmlInvoice;

        document.getElementById('invoice_total').innerHTML = total;
        document.getElementById('invoice_bayar').innerHTML = document.getElementById('cart_bayar').value;
        document.getElementById('invoice_kembalian').innerHTML = document.getElementById('cart_kembalian').value;
        


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
        renderCart();
    }

    function konfirmasi() {
        renderCart();
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

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<?= $this->endSection() ?>