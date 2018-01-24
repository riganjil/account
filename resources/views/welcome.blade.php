@extends('layouts.main')
@section('title')
@endsection
@section('head')
@endsection
@section('body')
    <div class="container p-0">
        <div class="card card-body">
            <h6>
                APA ITU PENJUAL TERPILIH SHOPEE?
            </h6>
            <p class="mb-0">
                Sebuah apresiasi untuk penjual yang aktif dan
                memiliki pelayanan pelanggan yang baik
            </p>
        </div>

        <div class="card card-body card-bg">
            <h6>
                KRITERIA PENJUAL TERPILIH SHOPEE
            </h6>

            <table class="table">
                <tr>
                    <td>
                        Detil No. KTP
                        telah sukses
                        diterima dan
                        disetujui oleh
                        Shopee
                    </td>
                    <td>
                        Mempunyai
                        persentase chat
                        dibalas: <span>≥80%</span>
                    </td>
                    <td>
                        Mempunyai
                        rating: <span>≥4.5</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="pt-2 pb-2"></td>
                </tr>

                <tr>
                    <td>
                        Mempunyai
                        minimum jumlah
                        transaksi
                        berhasil sebesar
                        <span>50 pesanan</span>
                        dalam sebulan
                        terakhir
                    </td>
                    <td>
                        Melayani
                        <span>25 pembeli
                        berbeda</span> dalam
                        sebulan terakhir
                    </td>
                    <td>
                        Pembatalan dan
                        pengembalian
                        dalam sebulan
                        terakhir <span><10%</span>
                    </td>
                </tr>
            </table>

            <p>
                Pastikan bahwa produk yang kamu jual sesuai dengan
                <a href="https://shopee.co.id/docs/3000">Ketentuan dan Kebijakan Shopee</a>
            </p>

            <a href="https://mall.shopee.co.id/help_center/answer/3813/?category=payment&__classic__=1" class="btn btn-block btn-primary text-uppercase">
                cek kriteria lengkap disini
            </a>
        </div>

        <div class="card card-body">
            <h6>
                BAGAIMANA CARA MENGENALI
                PENJUAL TERPILIH SHOPEE?
            </h6>
            <p>
                Penjual Terpilih Shopee dapat dikenali dari
                badge <span class="badge badge-primary">√ Terpilih</span> yang dapat kamu temukan di:
                badge <span class="badge badge-primary">√ Terpilih</span> yang dapat kamu temukan di:
            </p>

            <table class="table">
                <tr>
                    <td>
                        √ Bawah foto profil toko
                    </td>
                    <td>
                        √ Setiap halaman produk
                    </td>
                    <td>
                        √ Setiap foto produk
                    </td>
                </tr>
            </table>
        </div>

        <div class="card card-body card-bg">
            <h6>
                APA KEUNTUNGAN MENJADI
                PENJUAL TERPILIH SHOPEE?
            </h6>

            <table class="table">
                <tr>
                    <td>
                        <strong>
                            Toko Lebih
                            Menarik dengan
                            Tampilan
                            Eksklusif
                        </strong>
                        Tokomu akan
                        terlihat lebih
                        terpercaya dan
                        istimewa
                        dibandingkan
                        toko yang lain
                        dengan badge
                        kami.
                    </td>
                    <td>
                        <strong>
                            Kesempatan
                            Bergabung
                            Dalam Promosi
                        </strong>
                        Mendapatkan
                        lebih banyak
                        exposure dan
                        dapat
                        menjangkau
                        lebih banyak
                        pembeli.
                    </td>
                    <td>
                        <strong>
                            Koin Shopee
                            Eksklusif
                            untuk Penjual
                            Terpilih
                            Shopee
                        </strong>
                        Koin Shopee
                        tidak dapat
                        digunakan pada
                        penjual lainnya.

                        <a href="" class="btn btn-block btn-primary">
                            Selengkapnya
                        </a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card card-body">
            <a href="{{url('auth/register')}}" class="btn btn-block btn-lg btn-outline-primary mb-2">GABUNG SEKARANG</a>
            <p>
                Pendaftaran dan pengumuman Penjual Terpilih Shopee
                akan dilakukan setiap hari Jumat.
            </p>
        </div>
    </div>
@endsection
@section('foot')
@endsection