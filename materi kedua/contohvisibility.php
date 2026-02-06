<?php
class bankaccount{
    public $peimilik;
    private $saldo;
    public function __construct($pemilik, $saldoawal){
        $this->pemilik = $pemilik;
        $this->saldo = $saldoawal;
    }
    public function deposit($jumlah){
        $this->saldo += $jumlah;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}
$account = new bankaccount("aldo", 1000000);
$account->deposit(1000000);
echo $account->pemilik . " adalah orang yang sangat kaya saldonya mmencapai: " . $account->getSaldo();
?>