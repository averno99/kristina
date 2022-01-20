<?php

class M_penduduk extends CI_Model
{

    public function tampil_data()
    {

        $query = $this->db->select('*, kecamatan.Nama_Kecamatan as nmakec')
            ->from('penduduk')

            ->join('kecamatan', 'penduduk.id = kecamatan.id')

            ->get();
        return $query;
    }

    public function cari_data($keyword)
    {

        $query = $this->db->select('*, kecamatan.Nama_Kecamatan as nmakec')
            ->from('penduduk')

            ->join('kecamatan', 'penduduk.id = kecamatan.id')
            ->where('tahun', $keyword)

            ->get();
        return $query;
    }


    public function filterTahun($keyword)
    {
        $query = $this->db->select('*')
            ->from('penduduk')
            ->join('kecamatan', 'jumlah_penduduk.idKecamatan = kecamatan.id')
            ->where('tahun', $keyword)
            ->order_by('tahun, kecamatan.nama')
            ->get()->result_array();
        return $query;
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function graph()
    {
        $this->db->group_by(array('id', 'tahun'));

        $data = $this->db->get('penduduk');
        return $data->result_array();
    }
    public function jumlah_penduduk()
    {

        $sql = $this->db->select('*, sum(jumlah_penduduk) as jpen')
            ->from('penduduk')
            ->group_by('tahun')
            ->get();
        return $sql->result_array();
    }
}
