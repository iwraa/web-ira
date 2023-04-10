<?php 

class Produk {
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


    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        //return $this->judul .','. $this-.penulis;
    }

    public function getInfoProduk(){
        $str = "$this->judul | $this->penulis, $this->penerbit (Rp.$this->harga)";

        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0) { 
    // $this->judul = $judul;
    // $this->penulis = $penulis;
    // $this->penerbit = $penerbit;
    // $this->harga = $harga;
    // $this->jmlHalaman = $jmlHalaman;

    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman=$jmlHalaman;
}
    public function getInfoProduk(){
        $str = "Komik: " . parent::getInfoProduk() . " - $this->jmlHalaman Halaman";

        return $str;
    }
}

class Game extends Produk {
    public $waktumain;
    
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain=$waktuMain;
    }
    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " - $this->waktuMain Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
       $str = "$produk->judul | $produk->penulis, $produk->penerbit,(Rp.$produk->harga), $produk->waktuMain Jam";
        return $str;
    }
}

$produk1 = new Komik("Spongebob", "shafira", "Erlangga", 200000, 150);
$produk2 = new Produk("doraemon", "iniira", "Pusaka Ilmu", 100000, 50);
$produk3 = new Produk("OnePiece", "iraa", "ptIra");
$produk4 = new Produk();


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

// $infoProduk = new CetakInfoProduk()
// echo $infoproduk->cetak($produk1);
// echo "Naruto | Masashi Nishimoto, Erlangga (Rp.3000)";

?>