<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FPPSeeder extends Seeder
{
    public function run()
    {
        $fpp = [
            ['id' => 1, 'tanggal' => '2023-07-21 15:30:00', 'jenis_kebutuhan' => 'Rutin', 'nama_pelanggan' => 'Randika Sagala', 'lokasi_penempatan' => 'Bekasi', 'ref' => 'PNI-INV-000140-02-(01)', 'ref_fpb' => '1', 'keterangan' => 'no ket', 'nama_barang' => 'Kabel Optik', 'id_barang' => '321', 'tipe' => '20mm', 'harga_satuan' => '15000', 'qty' => '20', 'jumlah' => '300000', 'vendor' => 'https://www.tokopedia.com/cahayaelectrindo/kabel-utp-cat-6-draka-prysmian-uc400-23pvc-blue-305mtr?extParam=ivf%3Dfalse%26src%3Dsearch', 'status_fpp' => 'Pending'],
            ['id' => 2, 'tanggal' => '2023-10-21 15:30:00', 'jenis_kebutuhan' => 'Segera', 'nama_pelanggan' => 'Jody', 'lokasi_penempatan' => 'Jakpus', 'ref' => 'CNI-INV-000110-05-(12)', 'ref_fpb' => '2', 'keterangan' => 'Butuh mobil', 'nama_barang' => 'RJ45', 'id_barang' => '123', 'tipe' => '1ks', 'harga_satuan' => '12000', 'qty' => '12', 'jumlah' => '144000', 'vendor' => 'https://www.tokopedia.com/scriptechnology/konektor-rj45-lan-cat-6-nyk-ori-50pcs-connector-rj45-cover-belden-cat6?extParam=ivf%3Dfalse%26src%3Dsearch', 'status_fpp' => 'Pending'],
            ];
        $this->db->table('fpp')->insertBatch($fpp);
    }
}
