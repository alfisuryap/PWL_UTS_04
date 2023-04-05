<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'no_rekening' => 342041140,
                'nama' => 'Alfi Surya Pratama',
                'alamat' => 'Jl.sss Jakarta',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '50000000',
                'id' => '001'
            ],
            [
                'no_rekening' => 348104567,
                'nama' => 'Veronika Sina',
                'alamat' => 'Jl.xxx Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '1000000',
                'id' => '002'
            ],
            [
                'no_rekening' => 348104568,
                'nama' => 'Februlia Saun',
                'alamat' => 'Jl.yyy Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '5000000',
                'id' => '003',
            ],
            [
                'no_rekening' => 348104569,
                'nama' => 'Monisa Lisa',
                'alamat' => 'Jl.zzz Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '4500000',
                'id' => '004',
            ],
            [
                'no_rekening' => 348104570,
                'nama' => 'Kang Haerin',
                'alamat' => 'Jl.aaa Seoul',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '30000000',
                'id' => '005',
            ],
            [
                'no_rekening' => 348104571,
                'nama' => 'Kim Minji',
                'alamat' => 'Jl.ccc Seoul',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '35000000',
                'id' => '006',
            ],
            [
                'no_rekening' => 348104572,
                'nama' => 'Ahmad Bima Tristan',
                'alamat' => 'Jl.bbb Bogor',
                'jenis_tabungan' => 'Gold',
                'saldo' => '25000000',
                'id' => '007',
            ],
            [
                'no_rekening' => 348104573,
                'nama' => 'Abdullah Azzam',
                'alamat' => 'Jl.aaa Jakarta',
                'jenis_tabungan' => 'Silver',
                'saldo' => '20000000',
                'id' => '008',
            ],
            [
                'no_rekening' => 348104574,
                'nama' => 'Muhammad Endar Darmawan',
                'alamat' => 'Jl.eee Bandung',
                'jenis_tabungan' => 'Gold',
                'saldo' => '30000000',
                'id' => '009',
            ],
            [
                'no_rekening' => 348104575,
                'nama' => 'Andhito Galih Nur Cahyo',
                'alamat' => 'Jl.ddd Madura',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '50000000',
                'id' => '010',
            ],
            [
                'no_rekening' => 348104576,
                'nama' => 'Dimitri Abdullah',
                'alamat' => 'Jl.ddd Bekasi',
                'jenis_tabungan' => 'Silver',
                'saldo' => '15000000',
                'id' => '011'
            ],
            [
                'no_rekening' => 348104577,
                'nama' => 'Iemaduddin',
                'alamat' => 'Jl.iii Madura',
                'jenis_tabungan' => 'Gold',
                'saldo' => '22000000',
                'id' => '012'
            ],
            [
                'no_rekening' => 348104578,
                'nama' => 'An Yujin',
                'alamat' => 'Jl.yyy Seoul',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '45000000',
                'id' => '013',
            ],
            [
                'no_rekening' => 348104579,
                'nama' => 'Dunk Nata',
                'alamat' => 'Jl.ddd Bangkok',
                'jenis_tabungan' => 'Silver',
                'saldo' => '22000000',
                'id' => '014',
            ],
            [
                'no_rekening' => 348104580,
                'nama' => 'Joong Arc',
                'alamat' => 'Jl.jjj Bangkok',
                'jenis_tabungan' => 'Gold',
                'saldo' => '33000000',
                'id' => '015',
            ],
            [
                'no_rekening' => 348104581,
                'nama' => 'Boom Kitt',
                'alamat' => 'Jl.bbb Phuket',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '46000000',
                'id' => '016',
            ],
            [
                'no_rekening' => 348104582,
                'nama' => 'Peak Peam',
                'alamat' => 'Jl.ppp Phuket',
                'jenis_tabungan' => 'Silver',
                'saldo' => '16000000',
                'id' => '017',
            ],
            [
                'no_rekening' => 348104583,
                'nama' => 'Liz',
                'alamat' => 'Jl.lll Seoul',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '39000000',
                'id' => '018',
            ],
            [
                'no_rekening' => 348104584,
                'nama' => 'Hanni Pham',
                'alamat' => 'Jl.hhh Seoul',
                'jenis_tabungan' => 'Gold',
                'saldo' => '34000000',
                'id' => '019',
            ],
            [
                'no_rekening' => 348104585,
                'nama' => 'Forth',
                'alamat' => 'Jl.fff Bangkok',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '47000000',
                'id' => '020',
            ],
        ];
        DB::table('nasabahs')->insert($data);
    }
}
