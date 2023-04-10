<?php 

class Produk{
    private $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getJudul(){
        return $this->judul; 
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    
    $this->jmlHalaman=$jmlHalaman;
}

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - $this->jmlHalaman Halaman";
        return $str;

    }
}

class Game extends Produk {
    public $waktumain;

    public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga = 0, $waktumain = 0) {
         // $this->judul = $judul;
        // $this->penulis = $penulis;
        // $this->penerbit = $penerbit;
        //$this->harga = $harga;
        //$this->waktumain = $waktumain;
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktumain=$waktumain;
    }

    public function getInfoProduk(){
        $str = "Game: " . parent::getInfoProduk() . " - $this->waktumain jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktumain Jam";
        return $str;
    }
}


$produk1 = new Komik("Doraemon", "Mahashi Nishimoto", "Erlangga", 10000);
$produk2 = new Game("Onepiece", "Shafira", "Ilmuan", 20000);

$produk1->setJudul("Dragon Ball");
$produk1->judul = "spongebob";

 
echo $produk1->getJudul();

?>