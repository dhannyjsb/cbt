<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtruang extends CI_Controller { public function __construct() { goto wq9DS; tct7Z: $this->load->library(["\144\141\164\x61\164\141\x62\154\x65\163", "\x66\157\x72\x6d\x5f\166\141\154\151\x64\x61\x74\151\x6f\x6e"]); goto MnxyP; TVFB0: $this->form_validation->set_error_delimiters('', ''); goto O_AMi; ihJkC: $this->load->model("\x44\141\x73\x68\x62\157\141\162\144\137\x6d\x6f\144\145\x6c", "\144\x61\x73\x68\142\x6f\x61\x72\144"); goto XTJp2; SAlZ0: AxeH8: goto tct7Z; gQIHA: if (!$this->ion_auth->logged_in()) { goto YXwxp; } goto oClAG; oClAG: if ($this->ion_auth->is_admin()) { goto NE7XT; } goto SiHeY; cj30B: goto AxeH8; goto w0BPU; SiHeY: show_error("\x48\x61\x6e\x79\141\x20\x41\x64\x6d\x69\156\151\163\164\x72\141\164\157\x72\x20\171\x61\x6e\147\x20\144\x69\142\145\162\151\x20\x68\141\153\x20\165\156\164\165\153\40\x6d\145\156\x67\x61\x6b\x73\x65\163\40\x68\141\154\x61\x6d\141\156\40\151\x6e\x69\x2c\x20\x3c\x61\40\150\x72\145\x66\75\x22" . base_url("\x64\x61\163\x68\142\157\x61\x72\144") . "\x22\76\113\x65\x6d\142\141\x6c\151\40\153\145\40\155\x65\156\x75\x20\x61\167\x61\x6c\74\x2f\x61\x3e", 403, "\x41\153\x73\145\x73\x20\124\x65\x72\154\141\x72\141\x6e\147"); goto a5jUQ; MnxyP: $this->load->model("\115\x61\x73\164\145\162\137\x6d\x6f\x64\x65\x6c", "\155\x61\163\x74\145\162"); goto ihJkC; wq9DS: parent::__construct(); goto gQIHA; XTJp2: $this->load->model("\103\x62\164\x5f\x6d\x6f\144\145\154", "\x63\x62\164"); goto TVFB0; a5jUQ: NE7XT: goto cj30B; w0BPU: YXwxp: goto v6hyR; v6hyR: redirect("\x61\165\x74\150"); goto SAlZ0; O_AMi: } public function output_json($data, $encode = true) { goto sKgUE; JjyAb: $this->output->set_content_type("\141\160\160\154\151\x63\141\164\151\x6f\156\x2f\x6a\x73\x6f\x6e")->set_output($data); goto CDWq4; sKgUE: if (!$encode) { goto e75iI; } goto hokN3; hokN3: $data = json_encode($data); goto VRk0V; VRk0V: e75iI: goto JjyAb; CDWq4: } public function index() { goto GgrBQ; N1wzA: $this->load->view("\137\164\145\x6d\160\154\x61\x74\145\x73\57\144\x61\x73\150\142\x6f\x61\162\144\57\x5f\x66\x6f\157\164\145\x72"); goto U87xv; OuH4u: $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\165\154" => "\x52\165\141\156\147\40\125\152\151\141\156", "\x73\165\142\x6a\x75\x64\165\x6c" => "\104\141\164\x61\x20\x52\165\141\156\147\40\x55\152\x69\141\x6e", "\x70\x72\x6f\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto VCNjQ; Pz4Lx: $this->load->view("\x63\142\x74\57\162\x75\141\156\x67\57\144\141\x74\141"); goto N1wzA; yla28: $data["\x73\155\164\137\x61\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto kxlQA; GgrBQ: $user = $this->ion_auth->user()->row(); goto OuH4u; VCNjQ: $data["\164\160"] = $this->dashboard->getTahun(); goto lqPRV; lqPRV: $data["\x74\160\137\x61\143\x74\x69\166\x65"] = $this->dashboard->getTahunActive(); goto hcVeC; hcVeC: $data["\163\155\164"] = $this->dashboard->getSemester(); goto yla28; kxlQA: $this->load->view("\137\164\x65\x6d\x70\154\141\164\145\163\57\144\x61\x73\x68\142\x6f\x61\x72\x64\x2f\x5f\x68\x65\141\144\x65\x72", $data); goto Pz4Lx; U87xv: } public function data() { $this->output_json($this->cbt->getRuang(), false); } public function add() { goto nhBeJ; nhBeJ: $insert = ["\x6e\141\155\x61\137\x72\x75\141\156\x67" => $this->input->post("\x6e\x61\155\141\137\162\x75\x61\x6e\147", true), "\153\x6f\x64\145\x5f\x72\x75\141\x6e\x67" => $this->input->post("\x6b\x6f\144\145\137\x72\165\141\156\x67", true)]; goto f94tT; NOUTq: $data["\x73\164\141\x74\x75\163"] = $insert; goto ajGXV; ajGXV: $this->output_json($data); goto Jn_fu; f94tT: $this->master->create("\143\x62\x74\137\162\165\x61\156\x67", $insert, false); goto NOUTq; Jn_fu: } public function update() { $data = $this->cbt->updateRuang(); $this->output->set_content_type("\x61\160\160\154\x69\x63\x61\164\151\157\x6e\x2f\152\163\x6f\156")->set_output($data); } public function delete() { goto ZCqD1; PaxnN: $this->output_json(["\x73\164\141\164\x75\163" => false]); goto yzd3N; ldzeh: m4PDw: goto PaxnN; QdLTW: $this->output_json(["\163\x74\141\x74\165\163" => true, "\x74\x6f\x74\x61\154" => count($chk)]); goto wn_qz; yzd3N: KsHsN: goto d8OMg; zAxh1: if (!$this->master->delete("\x63\142\x74\x5f\x72\165\141\x6e\x67", $chk, "\x69\144\137\x72\x75\x61\x6e\x67")) { goto r4kXc; } goto QdLTW; ZCqD1: $chk = $this->input->post("\143\150\145\143\x6b\x65\144", true); goto svFtz; yb2Ot: goto KsHsN; goto ldzeh; svFtz: if (!$chk) { goto m4PDw; } goto zAxh1; wn_qz: r4kXc: goto yb2Ot; d8OMg: } }
