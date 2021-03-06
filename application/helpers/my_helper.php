<?php

/**
 * filter data berdasarkan nama dari tanaman
 */
function filterNamaTanaman($data, $nama, $index)
{
  $result = [];
  for ($i = 0; $i < sizeof($data); $i++) {
    if ($data[$i][$index] == $nama) {
      $result[] = $data[$i][$index];
    }
  }
  return $result;
}

/**
 * cek apakah yang dimasukan divariabel $nama1, $nama2 dan $nama3
 * terdapat didalam array yang dimasukan ke variabel $data
 */
function cekNamaTanaman($data, $nama1, $nama2, $nama3)
{
  for ($i = 0; $i < sizeof($data); $i++) {
    if (in_array($nama1, $data) && in_array($nama2, $data) && in_array($nama3, $data)) return true;
  }
  return false;
}

/**
 * membalikan format tanggal
 * format tanggal default bawaan mysql adalah yyyy-MM-dd
 * dengan function ini mengubah menjadi dd-MM-yyyy
 * sesuai dengan cara baca tanggal indonesia.
 */
function reverseTanggal($tanggal)
{
  $result = explode('-', $tanggal);
  $result = $result[2] . '-' . $result[1] . '-' . $result[0];
  return $result;
}
