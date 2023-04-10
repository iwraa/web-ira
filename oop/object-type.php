<?php 

class Produk{
    public $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        //echo "Hello";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        //return this->judul .',' . this->penulis;
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga)";
        return $str;
    }
}

$produk1 = new Produk("Doraemon", "Mahashi Nishimoto", "Erlangga", 10000);
$produk2 = new Produk("onepiece", "shafira", "erlanggga", 20000);
$produk3 = new Produk("spongebob", "Faisal", "Tri Suaka", 10000);
$produk4 = new Produk("upinipin", "Dedi Hartono", "Pintar Baca", 10000);


//var_dump($produk1);
//var_dump($produk2);

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
echo "<br>";
echo $produk3->getlabel();
echo "<br>";
echo $produk4->getlabel();
echo "<br>";

$infoproduk = new CetakInfoProduk();
echo $infoproduk->cetak($produk1);
//echo "Naruto | Masahi Nishimoto, Erlangga (Rp.10000)";
?>