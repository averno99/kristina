<?php

class M_pus extends CI_Model
{

    public function tampil_data()
    {
        $query = $this->db->select('*, kecamatan.Nama_Kecamatan as nmakec')
            ->from('pus')

            ->join('kecamatan', 'pus.id = kecamatan.id')

            ->get();
        return $query;
    }
    public function cari_data($keyword)
    {

        $query = $this->db->select('*, kecamatan.Nama_Kecamatan as nmakec')
            ->from('pus')

            ->join('kecamatan', 'pus.id = kecamatan.id')
            ->where('tahun', $keyword)

            ->get();
        return $query;
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        $this->db->select('*');
        $this->db->from('pus');
        $this->db->join('kecamatan', 'pus.id = kecamatan.id');
        $query = $this->db->get();
        // return $query->row($where, $table);

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

        $data = $this->db->get('pus');
        return $data->result_array();
    }
    public function jumlah_pus()
    {

        $sql = $this->db->select('*, sum(jumlah_pus) as ju')
            ->from('pus')
            ->group_by('tahun')
            ->get();
        return $sql->result_array();
    }
}
