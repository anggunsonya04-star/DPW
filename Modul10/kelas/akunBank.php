<?php

class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama; // Variabel $nama yang ditambahkan

    // Constructor
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang       = $nominal;
    }

    // =============================================
    // GETTER DAN SETTER $nama
    // =============================================
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // =============================================
    // GETTER DAN SETTER $accountNumber
    // =============================================
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($nomorAkun)
    {
        $this->accountNumber = $nomorAkun;
    }

    // =============================================
    // METHOD KELOLA UANG
    // =============================================

    // Menambahkan jumlah uang
    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
        echo "Berhasil menambahkan Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
    }

    // Mengurangi jumlah uang
    public function kurangUang($jumlah)
    {
        if ($jumlah > $this->jmlUang) {
            echo "Saldo tidak cukup!<br>";
        } else {
            $this->jmlUang -= $jumlah;
            echo "Berhasil mengurangi Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        }
    }

    // Menampilkan jumlah uang
    public function tampilUang()
    {
        echo "Saldo saat ini : Rp " . number_format($this->jmlUang, 0, ',', '.') . "<br>";
    }

    // Menghitung pajak (jumlah uang x 11%)
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        echo "Pajak (11%)    : Rp " . number_format($pajak, 0, ',', '.') . "<br>";
        return $pajak;
    }
}

?>