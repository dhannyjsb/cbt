<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtstatus extends CI_Controller { public function __construct() { goto Xx9WI; zZbWC: $this->load->model("\x43\142\x74\x5f\x6d\x6f\x64\145\x6c", "\x63\142\x74"); goto Wai8R; nZR5s: $this->load->model("\x4d\x61\x73\x74\x65\162\137\x6d\x6f\144\145\154", "\x6d\141\163\x74\145\162"); goto MCSfj; ikLnI: redirect("\141\x75\164\x68"); goto RTOQh; ud7iQ: if (!$this->ion_auth->logged_in()) { goto spToZ; } goto SqC59; MCSfj: $this->load->model("\x44\x61\x73\150\142\157\141\162\144\x5f\155\157\x64\145\x6c", "\x64\141\x73\x68\142\157\x61\162\x64"); goto zZbWC; UHZj6: LZLrX: goto dOBvl; Gl0vN: show_error("\110\x61\156\171\141\40\x41\144\155\151\156\151\163\164\162\x61\x74\157\x72\40\x79\141\x6e\x67\40\x64\x69\142\x65\x72\x69\40\x68\141\x6b\40\x75\x6e\x74\x75\153\x20\x6d\x65\x6e\x67\x61\x6b\x73\x65\163\40\150\x61\154\x61\x6d\x61\x6e\40\x69\x6e\x69\54\x20\74\141\40\x68\x72\145\x66\75\x22" . base_url("\144\x61\163\150\x62\x6f\x61\162\x64") . "\42\76\x4b\x65\155\x62\141\x6c\151\x20\153\x65\40\155\145\156\165\40\141\x77\x61\154\x3c\x2f\x61\x3e", 403, "\101\x6b\x73\x65\x73\x20\124\145\x72\x6c\141\x72\x61\156\x67"); goto UHZj6; aq9ir: $this->load->library(["\x64\x61\x74\141\x74\141\x62\154\145\x73", "\146\x6f\x72\155\137\x76\141\154\151\x64\141\x74\151\x6f\156"]); goto IQ8Lv; YeFJy: $this->form_validation->set_error_delimiters('', ''); goto VxOrR; Wai8R: $this->load->model("\x44\162\x6f\160\144\x6f\167\156\x5f\x6d\x6f\144\145\x6c", "\x64\162\157\x70\144\157\167\156"); goto YeFJy; SqC59: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto LZLrX; } goto Gl0vN; dOBvl: goto MgZ8b; goto I2Ymg; RTOQh: MgZ8b: goto aq9ir; IQ8Lv: $this->load->library("\165\x70\x6c\157\141\x64"); goto nZR5s; I2Ymg: spToZ: goto ikLnI; Xx9WI: parent::__construct(); goto ud7iQ; VxOrR: } public function output_json($data, $encode = true) { goto xh17u; xh17u: if (!$encode) { goto kl8CJ; } goto vQSio; vQSio: $data = json_encode($data); goto n0R0h; n0R0h: kl8CJ: goto cFWCt; cFWCt: $this->output->set_content_type("\141\x70\160\x6c\x69\x63\x61\164\151\157\156\x2f\x6a\163\157\156")->set_output($data); goto QtDaD; QtDaD: } public function index() { goto cFii6; zJ5Wg: $this->load->view("\155\x65\155\142\145\x72\163\57\147\165\x72\165\57\x74\145\x6d\x70\x6c\x61\x74\x65\163\57\x66\x6f\x6f\164\145\x72"); goto pbKvW; L56TG: $data["\162\165\141\x6e\x67"] = $this->dropdown->getAllRuang(); goto Y4bXC; Fz84o: $data["\x74\160"] = $this->dashboard->getTahun(); goto ZNf71; pJga7: $this->load->view("\x6d\x65\155\142\x65\162\163\57\147\x75\x72\165\x2f\x74\x65\x6d\x70\154\x61\164\x65\163\57\x68\x65\141\x64\145\162", $data); goto lwyt4; HS12a: $data["\160\162\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto QOI2u; eb5lt: $this->load->view("\137\x74\x65\155\160\154\141\x74\x65\x73\57\144\x61\163\150\x62\x6f\x61\x72\x64\x2f\137\x68\145\141\x64\x65\x72", $data); goto X2Ds2; xGR8l: $data["\x72\x75\141\x6e\147"] = $this->dropdown->getAllRuang(); goto lrC5J; srGah: $data["\x6a\x61\144\x77\x61\154"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru); goto L56TG; rexHz: $smt = $this->dashboard->getSemesterActive(); goto Fz84o; TN0u2: $data["\x73\x6d\164\x5f\x61\143\164\151\166\145"] = $smt; goto YJuYD; p_o7q: $tp = $this->dashboard->getTahunActive(); goto rexHz; cFii6: $user = $this->ion_auth->user()->row(); goto R3K6m; t3wGC: $this->load->view("\137\164\x65\155\160\154\141\164\145\163\x2f\x64\x61\x73\x68\142\157\141\x72\x64\x2f\137\146\x6f\x6f\164\145\x72"); goto dOUu_; ZNf71: $data["\x74\160\137\x61\x63\164\151\166\x65"] = $tp; goto aGVS6; XXuNm: PWsNs: goto HS12a; QOI2u: $data["\x6a\141\x64\167\x61\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto xGR8l; dOUu_: y2Tpo: goto V8dsX; X2Ds2: $this->load->view("\x63\142\164\x2f\163\164\x61\164\165\x73\57\x64\x61\x74\141"); goto t3wGC; aGVS6: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto TN0u2; iXHk2: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Dj3qM; Dj3qM: $data["\x67\x75\x72\165"] = $guru; goto srGah; YJuYD: if ($this->ion_auth->is_admin()) { goto PWsNs; } goto iXHk2; lwyt4: $this->load->view("\x63\142\x74\57\x73\164\x61\164\165\163\x2f\144\141\x74\x61"); goto zJ5Wg; R3K6m: $data = ["\x75\163\145\x72" => $user, "\x6a\x75\x64\165\154" => "\x53\164\141\x74\165\x73\40\123\x69\163\x77\x61", "\163\165\x62\152\x75\144\165\154" => "\x53\164\x61\x74\x75\x73\40\x53\151\x73\x77\x61", "\163\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto p_o7q; Y4bXC: $data["\163\145\163\x69"] = $this->dropdown->getAllSesi(); goto pJga7; pbKvW: goto y2Tpo; goto XXuNm; lrC5J: $data["\x73\x65\163\x69"] = $this->dropdown->getAllSesi(); goto eb5lt; V8dsX: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function getJadwalUjianByJadwal() { goto Lps_j; ozO48: audp5: goto X4Xbh; X4Xbh: $this->output_json($kelases); goto I15tW; OCKMK: $data["\x73\155\x74\x5f\x61\x63\164\x69\166\145"] = $smt; goto FTaTB; wrYCd: $smt = $this->dashboard->getSemesterActive(); goto HT8d0; HT8d0: $data["\x74\160"] = $this->dashboard->getTahun(); goto gUUv6; BdxaD: $kelases = []; goto ylzvO; Y99yn: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto OCKMK; ylzvO: foreach ($kelas as $key => $value) { $kelases[$value["\153\x65\154\x61\163\x5f\x69\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\x6b\x65\x6c\x61\x73\137\151\x64"]); GqmEY: } goto ozO48; FTaTB: $kelas = unserialize($info->bank_kelas); goto BdxaD; gUUv6: $data["\164\160\x5f\141\x63\164\x69\x76\x65"] = $tp; goto Y99yn; Fufvb: $tp = $this->dashboard->getTahunActive(); goto wrYCd; Lps_j: $jadwal = $this->input->get("\151\144\x5f\152\141\144\167\x61\x6c"); goto KGahq; KGahq: $info = $this->cbt->getJadwalById($jadwal); goto Fufvb; I15tW: } public function getJadwalUjianByKelas() { goto nMXp0; GbxwY: foreach ($jadwals as $jadwal) { goto K_obn; aPa2o: drcFM: goto cZhgK; K_obn: $kls = unserialize($jadwal->bank_kelas); goto j6cVX; j6cVX: foreach ($kls as $kl) { goto eyw0Q; eyw0Q: if (!($kl["\153\x65\x6c\141\x73\x5f\151\144"] == $kelas)) { goto X3_96; } goto Ii8O5; mA4qN: NBNmw: goto Shg5M; Ii8O5: $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode; goto HGiN0; HGiN0: X3_96: goto mA4qN; Shg5M: } goto i2kp7; i2kp7: lg0Ed: goto aPa2o; cZhgK: } goto C_q2I; CzUbi: $this->output_json($jdwl); goto cq23q; zo5Su: $smt = $this->dashboard->getSemesterActive(); goto P_zet; nMXp0: $kelas = $this->input->get("\151\x64\x5f\153\145\154\141\x73"); goto DM1Jm; ZRlDi: $jdwl = []; goto GbxwY; P_zet: $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt); goto ZRlDi; C_q2I: LQ8CK: goto CzUbi; DM1Jm: $tp = $this->dashboard->getTahunActive(); goto zo5Su; cq23q: } public function getSiswaKelas() { goto I2asT; fwBm_: $info = $this->cbt->getJadwalById($jadwal); goto YS3yd; hQ9cA: $data["\151\x6e\x66\157"] = $info; goto FhbT2; FhbT2: $this->output_json($data); goto wlkED; YS3yd: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto Fw0nd; Fw0nd: $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal); goto nfmlB; I2asT: $kelas = $this->input->get("\x6b\x65\154\x61\163"); goto Vh_mH; DM2Mt: foreach ($siswas as $siswa) { goto JGwzm; g0YqW: $arrDur[$siswa->id_siswa] = ["\144\165\162" => $dur_siswa, "\x6c\157\147" => $log_siswa]; goto wG86p; Eh3mI: $log_siswa = []; goto GqFnM; JGwzm: $dur_siswa = null; goto YnFBk; GqFnM: foreach ($logs as $log) { goto Iqbnm; qq2UC: o2mmf: goto J9Gp_; Iqbnm: if (!($log->id_siswa == $siswa->id_siswa)) { goto x0WcN; } goto Vj75i; Vj75i: array_push($log_siswa, $log); goto S3dUI; S3dUI: x0WcN: goto qq2UC; J9Gp_: } goto xikZq; wG86p: Z0Ucl: goto YdkJh; YnFBk: foreach ($durasies as $durasi) { goto pXHHD; N_c19: $lamanya = $durasi->lama_ujian; goto lkwI8; bI8PC: dA2ks: goto InL12; oOfNU: $em = $elap[1] == "\60\60" ? '' : intval($elap[1]) + $ed . "\40\x6d"; goto mg38q; pXHHD: if (!($durasi->id_siswa == $siswa->id_siswa)) { goto dA2ks; } goto N_c19; q9tbX: goto q776K; goto z_rt0; mg38q: $dd = $ej . $em; goto VaGB5; Y7oqN: $dur_siswa = $durasi; goto bI8PC; lkwI8: if (strpos($lamanya, "\72") !== false) { goto CWzjV; } goto g0oz5; z_rt0: CWzjV: goto jpMTs; HZw5f: q776K: goto Y7oqN; g0oz5: $durasi->lama_ujian .= "\155"; goto q9tbX; v4AAm: $ed = $elap[2] == "\x30\x30" ? 0 : 1; goto VBa9J; VaGB5: $durasi->lama_ujian = $dd == '' ? "\60\x20\155" : $dd; goto HZw5f; InL12: b2onH: goto ZeeoK; jpMTs: $elap = explode("\72", $lamanya); goto v4AAm; VBa9J: $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\x20\x6a\40"; goto oOfNU; ZeeoK: } goto wZxOB; wZxOB: PSsxL: goto Eh3mI; xikZq: I1stI: goto g0YqW; YdkJh: } goto OovET; pWPKr: $data["\163\151\163\167\x61"] = $siswas; goto OCE5i; Yx2sd: $smt = $this->dashboard->getSemesterActive(); goto fwBm_; OovET: t1ACS: goto dh38o; dh38o: $this->db->trans_complete(); goto pWPKr; Vh_mH: $jadwal = $this->input->get("\x6a\x61\144\x77\x61\x6c"); goto PbUOA; BP41A: $tp = $this->dashboard->getTahunActive(); goto Yx2sd; r8nzn: $arrDur = []; goto DM2Mt; OCE5i: $data["\x64\165\162\141\x73\151"] = $arrDur; goto hQ9cA; nfmlB: $logs = $this->cbt->getLogUjianByJadwal($jadwal); goto r8nzn; PbUOA: $this->db->trans_start(); goto BP41A; wlkED: } public function getSiswaRuang() { goto sC_H1; Y5MOb: $data["\x69\156\x66\157"] = $info; goto cD9ck; UY2Q9: $jadwal = $this->input->get("\152\141\144\167\x61\154"); goto GMh21; Wktho: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi); goto A2w7_; uQGzz: $arrDur = []; goto Bhu1V; BUtpI: $smt = $this->dashboard->getSemesterActive(); goto Wktho; Bhu1V: foreach ($siswas as $siswa) { goto AK6dW; VlFuu: $i = 0; goto DDfoH; Aq7O1: if (!($i < $info->jml_soal)) { goto fQZWS; } goto P3mPz; DDfoH: D7Oo9: goto Aq7O1; mgwjP: $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $this->cbt->getDurasiSiswa($siswa->id_siswa . $jadwal), "\152\141\167\141\x62" => $arrJawab[$siswa->id_siswa], "\154\x6f\147" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto l4at0; P3mPz: $arrJawab[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 1 . ($i + 1)); goto DMKmP; HQ6fh: goto D7Oo9; goto QARCa; Xnobz: $i++; goto HQ6fh; l4at0: vsbAo: goto xs1X4; AK6dW: $arrJawab = []; goto VlFuu; DMKmP: zI6JO: goto Xnobz; QARCa: fQZWS: goto mgwjP; xs1X4: } goto xSETA; GMh21: $this->db->trans_start(); goto BsuFj; k2UfK: $data["\163\x69\163\x77\141"] = $siswas; goto zoq4X; zoq4X: $data["\144\165\162\141\x73\x69"] = $arrDur; goto Y5MOb; BsuFj: $tp = $this->dashboard->getTahunActive(); goto BUtpI; A2w7_: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto uQGzz; BLgvN: $sesi = $this->input->get("\x73\x65\163\151"); goto UY2Q9; o6Buk: $this->db->trans_complete(); goto k2UfK; xSETA: ovcRW: goto o6Buk; cD9ck: $this->output_json($data); goto glxz6; sC_H1: $ruang = $this->input->get("\x72\x75\141\156\x67"); goto BLgvN; glxz6: } public function detail() { goto Io6wq; LZvMf: $data = ["\165\163\x65\x72" => $user, "\152\165\x64\x75\x6c" => "\x44\x65\x74\141\x69\x6c\x20\123\164\x61\164\165\163\40\123\x69\x73\x77\x61", "\163\x75\142\152\165\x64\x75\x6c" => "\123\164\x61\x74\x75\x73\x20\123\151\x73\x77\x61", "\x73\x65\164\164\x69\156\147" => $this->dashboard->getSetting()]; goto xMICn; pYjv0: $this->load->view("\x63\x62\164\x2f\163\x74\141\x74\x75\x73\x2f\144\145\x74\141\x69\154"); goto hLm5q; Vhs3X: $smt = $this->dashboard->getSemesterActive(); goto LC5Ld; oUo2e: $this->load->view("\155\x65\155\x62\145\162\x73\57\x67\x75\162\165\57\x74\145\x6d\160\x6c\x61\x74\145\x73\x2f\150\145\x61\144\x65\x72", $data); goto j7CVI; tl6pr: $this->load->view("\x5f\164\145\155\x70\154\141\x74\145\x73\57\144\141\163\x68\x62\157\141\162\x64\x2f\137\x68\x65\141\x64\x65\162", $data); goto pYjv0; UaUin: $data["\163\157\141\x6c"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa); goto tLW3v; LIQzU: $data["\x74\160\137\x61\x63\164\x69\166\x65"] = $tp; goto fnJmw; tLW3v: if ($this->ion_auth->is_admin()) { goto rideD; } goto cYgz0; OWjPg: $this->load->view("\155\x65\155\142\145\x72\x73\x2f\147\x75\162\165\57\164\x65\x6d\x70\x6c\x61\164\145\x73\57\x66\x6f\x6f\x74\x65\x72"); goto PfPls; juksH: $jadwal = $this->input->get("\152\x61\144\x77\141\x6c"); goto FZubp; PfPls: goto TjolX; goto DTXhY; O3bj2: $data["\160\162\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto tl6pr; FPl03: $data["\x73\x69\x73\x77\x61"] = $this->master->getSiswaById($siswa); goto UaUin; cYgz0: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto C1EpN; j7CVI: $this->load->view("\143\x62\164\57\x73\164\x61\x74\165\163\57\x64\145\164\141\x69\x6c"); goto OWjPg; DTXhY: rideD: goto O3bj2; yBTNn: $data["\x73\x6d\164\x5f\x61\x63\x74\151\166\x65"] = $smt; goto FPl03; C1EpN: $data["\147\x75\x72\x75"] = $guru; goto oUo2e; fnJmw: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto yBTNn; FZubp: $user = $this->ion_auth->user()->row(); goto LZvMf; LC5Ld: $data["\164\x70"] = $this->dashboard->getTahun(); goto LIQzU; Io6wq: $siswa = $this->input->get("\x73\151\163\x77\x61"); goto juksH; D1xYx: TjolX: goto ZZ4Go; xMICn: $tp = $this->dashboard->getTahunActive(); goto Vhs3X; hLm5q: $this->load->view("\x5f\164\x65\155\x70\154\141\164\145\x73\x2f\144\141\163\150\142\x6f\x61\x72\144\57\x5f\146\x6f\x6f\164\145\x72"); goto D1xYx; ZZ4Go: } }
