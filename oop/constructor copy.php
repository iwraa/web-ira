<?php 

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
        //echo "Hello";
        $this ->judul = $judul;
        $this ->penulis = $penulis;
        $this ->penerbit = $penerbit;
        $this ->harga = $harga;
    }   


    public function getlabel(){
            return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
            //return this ->judul .',' . this->penulis;
    }
}
$produk1 = new Produk("Siksa Kubur", "ira", "PT.Ulin", 300000) ;
$produk2 = new Produk("Horor", "Shafira", "PT.ptptpt", 100000) ;
$produk3 = new Produk("Pedihnya Api Neraka", "iraaa", "PT.RumahIra", 200000);
$produk4 = new Produk("Mari berDzikir", "Iralagi", "PT.ira", 100000);

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




?>