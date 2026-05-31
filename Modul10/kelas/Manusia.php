<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur; // Variabel umur yang ditambahkan

    // Getter untuk $name
    public function getNama()
    {
        return $this->name;
    }

    // Setter untuk $name
    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter untuk $umur
    public function getUmur()
    {
        return $this->umur;
    }

    // Setter untuk $umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Getter untuk $nik (diubah ke public agar bisa diakses dari index.php)
    public function getNIK()
    {
        return "NIK: {$this->nik}";
    }
}

?>