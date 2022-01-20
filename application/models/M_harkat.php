<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_harkat extends CI_Model
{
    public function loadtahun_penduduk()
    {
        $kec = $this->input->get('kecamatansel');

        $this->db->select('*, tahun');
        $this->db->from('penduduk');
        $this->db->where('penduduk.id', $kec);
        return $this->db->get()->result_array();
    }

    public function loadtahun_pelayanan()
    {
        $kec = $this->input->get('kecamatansel');

        $this->db->select('*, tahun');
        $this->db->from('pelayanan');
        $this->db->where('pelayanan.id', $kec);
        return $this->db->get()->result_array();
    }

    public function loadtahun_pus()
    {
        $kec = $this->input->get('kecamatansel');

        $this->db->select('*, tahun');
        $this->db->from('pus');
        $this->db->where('pus.id', $kec);
        return $this->db->get()->result_array();
    }

    public function loadtahun_kelahiran()
    {
        $kec = $this->input->get('kecamatansel');

        $this->db->select('*, tahun');
        $this->db->from('kelahiran');
        $this->db->where('kelahiran.id', $kec);
        return $this->db->get()->result_array();
    }

    public function loadtahun_akseptor()
    {
        $kec = $this->input->get('kecamatansel');

        $this->db->select('*, tahun');
        $this->db->from('akseptor');
        $this->db->where('akseptor.id', $kec);
        return $this->db->get()->result_array();
    }

    // public function getKecamatanPenduduk($kec)
    // {
    //     $this->db->select('jumlah_penduduk');
    //     $this->db->from('penduduk');
    //     $this->db->where('id_kecamatan', $kec);
    //     return $this->db->get()->row();
    // }

    public function getNowPenduduk($data)
    {
        $this->db->select('jumlah_penduduk');
        $this->db->from('penduduk');
        $this->db->where('tahun', $data);
        return $this->db->get()->row();
    }

    public function getPenduduk($data)
    {
        $tahun = (int)$data - 1;

        $this->db->select('jumlah_penduduk');
        $this->db->from('penduduk');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row();
    }

    public function getNowPelayanan($data)
    {
        $this->db->select('jumlah_pelayanan');
        $this->db->from('pelayanan');
        $this->db->where('tahun', $data);
        return $this->db->get()->row();
    }

    public function getPelayanan($data)
    {
        $tahun = (int)$data - 1;

        $this->db->select('jumlah_pelayanan');
        $this->db->from('pelayanan');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row();
    }

    public function getNowKelahiran($data)
    {
        $this->db->select('jumlah_kelahiran');
        $this->db->from('kelahiran');
        $this->db->where('tahun', $data);
        return $this->db->get()->row();
    }

    public function getKelahiran($data)
    {
        $tahun = (int)$data - 1;

        $this->db->select('jumlah_kelahiran');
        $this->db->from('kelahiran');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row();
    }

    public function getNowAkseptor($data)
    {
        $this->db->select('jumlah_akseptor');
        $this->db->from('akseptor');
        $this->db->where('tahun', $data);
        return $this->db->get()->row();
    }

    public function getAkseptor($data)
    {
        $tahun = (int)$data - 1;

        $this->db->select('jumlah_akseptor');
        $this->db->from('akseptor');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row();
    }

    public function getNowPus($data)
    {
        $this->db->select('jumlah_pus');
        $this->db->from('pus');
        $this->db->where('tahun', $data);
        return $this->db->get()->row();
    }

    public function getPus($data)
    {
        $tahun = (int)$data - 1;

        $this->db->select('jumlah_pus');
        $this->db->from('pus');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row();
    }
}
