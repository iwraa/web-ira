    <?php

    class Produk{
        public $judul,
                $penulis,
                $penerbit,
                $harga;

        public function getlabel(){
            return "$this->judul, $this->penulis";
            //return this-> judul .','. this->penulis;
        }
    }

    $produk1 = new Produk();
    $produk1->judul = "Siksa Kubur";
    $produk1->penulis = "ira";

    $produk2 = new Produk();
    $produk2->judul = "Horor";
    $produk2 ->penulis = "Shafira";

    //var_dump($produk1);
    //var_dump($produk2);

    echo $produk1->getlabel();
    echo "<br>";
    echo $produk2->getlabel();

     
    ?>


