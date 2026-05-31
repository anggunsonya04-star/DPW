<?php

require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // kita bisa langsung manfaatkan fungsi dari kelas manusia.php
        $this->setNama($nama);
    }

    // =============================================
    // GETTER DAN SETTER $NIM
    // =============================================
    public function getNim()
    {
        return $this->NIM;
    }

    public function setNIM($NIM)
    {
        $this->NIM = $NIM;
    }

    // =============================================
    // GETTER DAN SETTER $jurusan
    // =============================================
    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // =============================================
    // GETTER DAN SETTER $kelas
    // =============================================
    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
}

?>