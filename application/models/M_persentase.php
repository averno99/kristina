<?php

class M_persentase extends CI_Model
{

    public function tampil_data()
    {
        $query = $this->db->select('*,total.id as id, kecamatan.Nama_Kecamatan as nmakec, SUM((harkat_penduduk * 2) + (harkat_pus * 2) + (harkat_akseptor * 3) + (harkat_pelayanan * 1) + (harkat_kelahiran * 2)) as total_semua, COUNT(kecamatan_id) as pembagi')
            ->from('total')
            ->join('kecamatan', 'total.kecamatan_id = kecamatan.id')
            ->group_by('total.kecamatan_id')

            ->get();
        return $query;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
