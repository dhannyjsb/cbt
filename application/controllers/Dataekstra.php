<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\x50\x41\x54\110") or exit("\x4e\157\40\144\151\x72\145\x63\x74\x20\x73\143\162\151\160\x74\40\x61\x63\x63\x65\x73\163\40\x61\x6c\x6c\x6f\x77\145\144"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; class Dataekstra extends CI_Controller { public function __construct() { goto FWp8Q; XO8df: HaaUY: goto aoEJZ; cDciZ: $this->load->model("\x4d\x61\163\164\145\162\137\155\x6f\144\145\x6c", "\x6d\x61\163\x74\145\x72"); goto TrAtw; A7Ff3: $this->load->model("\x44\x72\157\160\144\157\x77\156\137\x6d\157\144\x65\x6c", "\144\x72\x6f\x70\144\157\x77\156"); goto nOMq7; fzZfA: $this->form_validation->set_error_delimiters('', ''); goto WSZwh; TrAtw: $this->load->model("\x44\141\x73\150\x62\x6f\x61\x72\144\x5f\155\157\144\145\154", "\144\141\x73\150\x62\157\x61\162\x64"); goto A7Ff3; oWNr0: show_error("\110\141\x6e\x79\141\x20\x41\x64\x6d\x69\x6e\x69\163\x74\162\x61\164\157\x72\40\171\141\x6e\147\40\144\x69\x62\x65\x72\x69\x20\150\141\x6b\x20\165\156\x74\x75\x6b\40\155\145\x6e\x67\x61\153\163\x65\x73\40\150\141\154\x61\x6d\x61\156\x20\x69\x6e\151\54\x20\x3c\x61\x20\150\x72\x65\146\x3d\x22" . base_url("\144\x61\x73\150\142\x6f\141\x72\x64") . "\x22\76\113\145\155\142\141\154\151\x20\x6b\145\40\155\145\x6e\165\40\141\167\141\x6c\x3c\57\x61\x3e", 403, "\x41\153\163\x65\163\40\124\x65\162\x6c\x61\x72\x61\156\x67"); goto q9mxs; q9mxs: aTkYf: goto Jf_nE; YUSjU: if (!$this->ion_auth->logged_in()) { goto HaaUY; } goto LSu8B; Jf_nE: goto NO95k; goto XO8df; FWp8Q: parent::__construct(); goto YUSjU; tIpZZ: $this->load->library(["\x64\x61\x74\141\164\x61\x62\x6c\x65\x73", "\146\157\x72\155\137\166\x61\154\151\x64\141\x74\x69\x6f\156"]); goto cDciZ; nOMq7: $this->load->model("\x4b\x65\154\x61\163\x5f\x6d\157\x64\145\154", "\153\x65\154\141\163"); goto fzZfA; mkVbv: NO95k: goto tIpZZ; LSu8B: if ($this->ion_auth->is_admin()) { goto aTkYf; } goto oWNr0; aoEJZ: redirect("\x61\x75\x74\150"); goto mkVbv; WSZwh: } public function output_json($data, $encode = true) { goto lLIlq; zEGG2: $data = json_encode($data); goto RJ3OQ; RJ3OQ: amYNu: goto MmngH; lLIlq: if (!$encode) { goto amYNu; } goto zEGG2; MmngH: $this->output->set_content_type("\141\160\x70\154\x69\143\141\164\x69\x6f\156\57\152\163\x6f\x6e")->set_output($data); goto YDrnI; YDrnI: } public function index() { goto HPp0g; mFw6O: $kelasEks = []; goto oH4Sl; iXWCU: $data["\164\160"] = $this->dashboard->getTahun(); goto NNIUc; HK2s9: $data = ["\165\x73\x65\162" => $user, "\152\x75\144\x75\x6c" => "\105\153\163\164\x72\x61\153\x75\x72\x69\x6b\165\154\145\x72", "\163\165\x62\x6a\165\x64\x75\x6c" => "\x44\141\x74\x61\40\x4d\141\x74\x61\40\120\145\x6c\141\152\x61\162\141\156", "\x70\x72\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto yUVE5; XDLm7: $data["\x73\155\164\137\141\143\x74\151\x76\x65"] = $smt; goto VrZ41; iI91h: $this->load->view("\x5f\x74\145\x6d\160\154\141\164\145\163\57\x64\x61\x73\x68\x62\x6f\x61\162\x64\57\137\x66\x6f\x6f\x74\x65\162"); goto JdwuP; Yzclm: $this->load->view("\137\x74\145\x6d\160\154\x61\x74\145\x73\x2f\x64\x61\163\x68\142\x6f\141\x72\144\57\x5f\x68\145\x61\144\145\x72", $data); goto EEgay; HPp0g: $user = $this->ion_auth->user()->row(); goto HK2s9; oH4Sl: foreach ($kelas as $key => $kls) { $kelasEks[$key] = $this->kelas->getKelasEkskul($key, $tp->id_tp, $smt->id_smt); JRfMS: } goto f5kGR; f5kGR: hAOoJ: goto I16Pi; I16Pi: $data["\x65\x6b\x73\x6b\x75\x6c\137\x6b\x65\154\141\x73"] = $kelasEks; goto j9LTv; NNIUc: $data["\x74\x70\137\x61\143\x74\x69\x76\x65"] = $tp; goto e7cQZ; XBCrm: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto mFw6O; VrZ41: $data["\x65\x6b\163\x6b\x75\x6c"] = $this->dropdown->getAllEkskul(); goto XBCrm; H6hGx: $smt = $this->dashboard->getSemesterActive(); goto iXWCU; j9LTv: $data["\153\145\154\141\163"] = $kelas; goto QNQot; yUVE5: $tp = $this->dashboard->getTahunActive(); goto H6hGx; EEgay: $this->load->view("\x6d\x61\163\x74\x65\162\57\145\x6b\x73\x74\162\141\57\x64\x61\x74\141"); goto iI91h; QNQot: $data["\x70\145\155\142\151\155\x62\x69\156\147"] = $this->dropdown->getAllGuru(); goto Yzclm; e7cQZ: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto XDLm7; JdwuP: } public function create() { goto uL6En; uL6En: $insert = ["\x6e\141\x6d\x61\x5f\145\x6b\x73\164\162\141" => $this->input->post("\156\141\155\141\x5f\x65\153\x73\164\162\141", true), "\x6b\x6f\144\145\x5f\145\153\163\x74\x72\x61" => $this->input->post("\x6b\x6f\144\x65\137\145\153\163\164\x72\x61", true)]; goto inaw6; inaw6: $data = $this->master->create("\x6d\141\163\x74\x65\162\137\x65\x6b\163\164\x72\x61", $insert); goto HVXoz; HVXoz: $this->output->set_content_type("\141\160\160\154\x69\143\141\x74\x69\157\156\57\152\x73\x6f\156")->set_output($data); goto AgOwc; AgOwc: } public function read() { goto YHJT4; Bhfhy: echo $this->datatables->generate(); goto KaT0C; Id3Nx: $this->datatables->from("\155\141\163\x74\145\x72\137\x65\x6b\x73\164\162\141"); goto Bhfhy; YHJT4: $this->datatables->select("\x2a"); goto Id3Nx; KaT0C: } public function update() { $data = $this->master->updateEkstra(); $this->output->set_content_type("\x61\160\x70\x6c\x69\143\141\x74\x69\157\156\57\152\163\x6f\x6e")->set_output($data); } public function delete($id) { goto s3JEU; iq3Ab: $this->output_json(["\163\x74\x61\x74\165\163" => false, "\155\x65\x73\163\x61\147\x65" => "\105\x6b\163\x6b\165\154\x20\147\141\x67\141\x6c\x20\144\151\x68\x61\160\165\x73"]); goto YSsBI; RwPN3: $this->output_json(["\x73\164\x61\164\165\x73" => true, "\155\145\163\163\x61\x67\145" => "\x45\x6b\163\153\165\154\x20\x62\145\x72\x68\x61\x73\151\154\40\x64\x69\x68\141\x70\165\x73"]); goto bNWCO; EgB02: $this->output_json($tables); goto A8spi; Q2VkD: goto ZnLaz; goto qCLt9; qie_u: $tables = []; goto u67_h; ACtqy: Cox2s: goto RwPN3; Bj3Nt: if ($this->master->delete("\155\141\x73\x74\145\162\137\x65\x6b\163\164\x72\141", [$id], "\151\x64\137\x65\153\163\x74\x72\141")) { goto Cox2s; } goto iq3Ab; DoZSX: FNS9c: goto EgB02; V6zYX: Ak00T: goto sC27g; qCLt9: aVIDj: goto XXCKM; u5sFL: foreach ($tabless as $table) { goto nXN9n; DpvOf: foreach ($fields as $field) { goto khV7X; zLkV0: array_push($tables, $table); goto YuEzw; YuEzw: kIseh: goto Rs98W; khV7X: if (!($field->name == "\x69\x64\x5f\x65\153\x73\164\x72\141" || $field->name == "\145\x6b\x73\x74\162\141\x5f\151\144")) { goto kIseh; } goto zLkV0; Rs98W: zChTD: goto ASTZx; ASTZx: } goto C9pSZ; nXN9n: $fields = $this->db->field_data($table); goto DpvOf; tc5xL: MiwNd: goto PC_Cw; C9pSZ: rgX1o: goto tc5xL; PC_Cw: } goto DoZSX; s3JEU: $messages = []; goto qie_u; XXCKM: $this->output_json(["\x73\164\x61\x74\x75\x73" => false, "\164\157\164\x61\154" => "\x4d\141\160\x65\154\40\x64\151\x67\x75\x6e\x61\x6b\x61\x6e\x20\x64\x69\40" . count($messages) . "\x20\164\141\x62\x65\x6c\x3a\x3c\142\162\76" . implode("\74\x62\162\x3e", $messages)]); goto mx1GE; YSsBI: goto o3kKz; goto ACtqy; A8spi: foreach ($tables as $table) { goto y33qw; tMbXw: xqVvh: goto cxTXO; A1q_3: $num = $this->db->count_all_results($table); goto BfRFA; BfRFA: if (!($num > 0)) { goto mnSmG; } goto igg1s; NPNpJ: $this->db->where("\x69\144\137\x65\153\x73\x74\x72\141", $id); goto A1q_3; y33qw: if (!($table != "\155\x61\x73\x74\x65\x72\137\145\x6b\163\164\x72\x61")) { goto xqVvh; } goto NPNpJ; igg1s: array_push($messages, $table); goto M3XRM; M3XRM: mnSmG: goto tMbXw; cxTXO: xpYGb: goto FVlOk; FVlOk: } goto V6zYX; u67_h: $tabless = $this->db->list_tables(); goto u5sFL; bNWCO: o3kKz: goto Q2VkD; mx1GE: ZnLaz: goto Hc2fS; sC27g: if (count($messages) > 0) { goto aVIDj; } goto Bj3Nt; Hc2fS: } public function save() { goto BYXIv; BYXIv: $check_kelas = json_decode(json_encode(json_decode($this->input->post("\x6b\145\154\x61\x73", true)))); goto ZvP87; c2P4d: vckKY: goto Pc4vv; NVq0Y: foreach ($check_kelas as $key => $kls) { goto JkZs1; eRUaK: $ekstras = ["\151\x64\x5f\153\145\154\141\163\137\x65\153\163\x74\x72\141" => $kls->kls_id . $tp . $smt, "\151\x64\137\153\x65\154\141\163" => $kls->kls_id, "\151\x64\137\x74\x70" => $tp, "\x69\144\x5f\163\x6d\x74" => $smt, "\145\153\163\x74\x72\x61" => serialize($ekstra)]; goto TLUIR; vAv9f: $kelaseks = $this->input->post("\x65\153\x73\153\x75\x6c" . $kls->kls_id . "\133" . $j . "\x5d", true); goto EzL_y; EzL_y: $ekstra[] = ["\x65\x6b\x73\164\x72\141" => $kelaseks]; goto jPgCp; NzQsj: wxwWl: goto eRUaK; TLUIR: $update[] = $this->db->replace("\153\x65\154\141\163\x5f\x65\x6b\x73\164\162\x61", $ekstras); goto DhOXd; hhnsb: goto qrH_t; goto NzQsj; qhCsj: if (!$check_ekskul) { goto uoJw_; } goto xqgJT; dcw3s: qrH_t: goto f2gh1; jPgCp: EsxNm: goto Dz06T; Dz06T: $j++; goto hhnsb; xqgJT: $row_ekskul = count($this->input->post("\145\153\163\x6b\x75\154" . $kls->kls_id, true)); goto v_xzk; JkZs1: $check_ekskul = $this->input->post("\x65\x6b\x73\x6b\165\x6c" . $kls->kls_id, true); goto qhCsj; v_xzk: $ekstra = []; goto dWTlT; f2gh1: if (!($j <= $row_ekskul)) { goto wxwWl; } goto vAv9f; dWTlT: $j = 0; goto dcw3s; DhOXd: uoJw_: goto gvvQu; gvvQu: UR1nL: goto Dd0WL; Dd0WL: } goto c2P4d; yPEW2: $this->output_json($res); goto Ku3H2; ZPNKp: $update = []; goto NVq0Y; ZvP87: $tp = $this->master->getTahunActive()->id_tp; goto iNv5R; iNv5R: $smt = $this->master->getSemesterActive()->id_smt; goto d3sD5; Pc4vv: $res["\x73\x74\x61\164\165\x73"] = true; goto B3J6G; B3J6G: $res["\x75\x70\144\141\x74\x65"] = $update; goto yPEW2; d3sD5: $row_insert = 0; goto ZPNKp; Ku3H2: } public function import($import_data = null) { goto Sp7YS; zyUT0: $data["\x74\x70"] = $this->dashboard->getTahun(); goto QNvJ2; jZJEQ: $data["\x73\x6d\x74\137\141\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto RGwvi; Sp7YS: $user = $this->ion_auth->user()->row(); goto iSCL_; v3t73: HxIPK: goto zyUT0; xlSJW: $data["\151\155\160\x6f\162\x74"] = $import_data; goto v3t73; RGwvi: $this->load->view("\137\x74\145\155\x70\154\141\x74\145\x73\57\x64\141\163\150\x62\157\x61\162\144\x2f\x5f\150\x65\x61\x64\145\162", $data); goto rpc0B; QNvJ2: $data["\164\160\137\x61\143\x74\151\166\145"] = $this->dashboard->getTahunActive(); goto CyrKo; uOxnl: if (!($import_data != null)) { goto HxIPK; } goto xlSJW; CyrKo: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto jZJEQ; ZjFyE: $this->load->view("\137\164\145\155\160\154\141\x74\145\163\57\144\141\163\x68\x62\157\x61\x72\144\x2f\x5f\x66\x6f\x6f\x74\x65\162"); goto oiNTF; rpc0B: $this->load->view("\x6d\x61\x73\x74\x65\162\x2f\145\x6b\163\164\162\141\57\151\155\x70\x6f\162\x74"); goto ZjFyE; iSCL_: $data = ["\165\x73\x65\162" => $user, "\152\x75\144\x75\154" => "\x4d\x61\164\x61\40\120\145\x6c\x61\152\x61\162\141\156", "\x73\165\142\x6a\165\x64\x75\x6c" => "\111\x6d\x70\x6f\162\x74\x20\x4d\141\164\141\x20\x50\x65\x6c\141\152\141\162\x61\156", "\x70\162\x6f\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto uOxnl; oiNTF: } }
