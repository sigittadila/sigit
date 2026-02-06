<?php
class mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getprofile() {
        return   "[$this->nim] $this->nama-$this->prodi";
    }
}
$mahasiswa1 = new mahasiswa("T3124077", "aldo firmansyah A. buka", "teknik Informatika");
echo $mahasiswa1->getprofile();

?>