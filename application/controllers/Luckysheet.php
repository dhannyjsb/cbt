<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\105\120\x41\124\110") or exit("\116\x6f\40\144\151\x72\145\143\x74\40\x73\x63\x72\151\160\164\40\x61\143\x63\x65\163\x73\x20\x61\x6c\154\157\167\x65\x64"); class Luckysheet extends CI_Controller { public function __construct() { goto jkXFS; OSVz2: goto dUIw9; goto sP1kM; n4Wv4: redirect("\141\165\164\150"); goto IaBIq; sP1kM: qaSHn: goto n4Wv4; aorMz: if (!$this->ion_auth->logged_in()) { goto qaSHn; } goto skZ5F; jkXFS: parent::__construct(); goto aorMz; NAn2M: $this->load->model("\113\x65\154\141\163\x5f\155\x6f\144\x65\154", "\x6b\145\154\x61\163"); goto jSzyB; IaBIq: dUIw9: goto LL7FR; skZ5F: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto Ts8Vp; } goto P3OWv; rC3YY: Ts8Vp: goto OSVz2; P3OWv: show_error("\110\x61\156\171\141\40\x41\144\155\x69\x6e\x69\163\164\162\x61\x74\x6f\162\40\x79\x61\x6e\x67\40\144\x69\x62\145\162\151\x20\x68\141\x6b\40\x75\x6e\x74\x75\x6b\x20\155\145\x6e\x67\x61\153\163\x65\x73\40\150\x61\154\x61\155\x61\x6e\x20\151\x6e\x69\x2c\40\x3c\x61\x20\x68\x72\145\146\x3d\x22" . base_url("\144\x61\x73\150\x62\x6f\x61\x72\x64") . "\42\x3e\113\x65\155\x62\141\154\x69\40\x6b\x65\40\x6d\x65\x6e\x75\x20\141\x77\141\154\x3c\x2f\x61\76", 403, "\101\x6b\x73\145\x73\40\124\x65\162\x6c\x61\x72\x61\x6e\x67"); goto rC3YY; Tw8tR: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\144\137\155\x6f\144\x65\154", "\x64\x61\163\150\142\157\x61\x72\x64"); goto xNoZo; LL7FR: $this->load->library(["\x64\141\164\x61\x74\x61\x62\x6c\x65\x73", "\x66\157\162\x6d\137\166\x61\x6c\151\144\x61\x74\151\157\x6e"]); goto Tw8tR; M9Gpk: $this->form_validation->set_error_delimiters('', ''); goto o4T4r; WeWY_: $this->load->model("\115\141\163\x74\145\x72\x5f\x6d\x6f\x64\145\154", "\x6d\141\163\x74\x65\162"); goto M9Gpk; xNoZo: $this->load->model("\122\141\160\157\x72\x5f\x6d\x6f\x64\x65\154", "\x72\x61\x70\x6f\162"); goto NAn2M; jSzyB: $this->load->model("\x44\162\157\160\x64\x6f\167\x6e\x5f\x6d\x6f\x64\x65\x6c", "\x64\x72\157\160\x64\157\x77\156"); goto WeWY_; o4T4r: } public function output_json($data, $encode = true) { goto Qz1Je; OIuz9: WRkWy: goto WJs4u; WJs4u: $this->output->set_content_type("\141\160\x70\x6c\x69\143\x61\x74\151\x6f\156\x2f\x6a\163\157\156")->set_output($data); goto Ph_Ww; lJfay: $data = json_encode($data); goto OIuz9; Qz1Je: if (!$encode) { goto WRkWy; } goto lJfay; Ph_Ww: } public function index() { goto qWOp_; VoK2I: $tp = $this->dashboard->getTahunActive(); goto i9Tkz; E5ljg: $this->load->view("\155\x65\155\142\145\x72\x73\x2f\147\165\162\165\x2f\154\x75\x63\153\171\x76\151\x65\x77"); goto gKQPS; i9Tkz: $smt = $this->dashboard->getSemesterActive(); goto eTqv3; Ti0kg: $data["\164\x70\x5f\x61\143\164\151\x76\x65"] = $tp; goto TZY1a; YBvgK: $this->load->view("\x6d\x65\x6d\142\x65\162\163\57\147\165\162\165\x2f\x74\x65\155\160\154\x61\164\145\x73\x2f\150\x65\141\144\x65\x72", $data); goto E5ljg; sOgGg: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto pJ36e; bDr9n: $data = ["\165\x73\x65\162" => $user, "\x6a\165\x64\x75\x6c" => "\125\163\145\162\40\115\141\156\141\147\145\x6d\x65\x6e\164", "\163\x75\x62\152\165\x64\165\x6c" => "\104\x61\x74\141\x20\125\163\x65\x72\40\x53\151\163\x77\x61", "\x73\x65\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto VoK2I; pJ36e: $data["\147\x75\x72\165"] = $guru; goto YBvgK; gKQPS: $this->load->view("\155\145\x6d\142\145\162\163\x2f\147\x75\x72\x75\57\164\x65\155\x70\154\141\x74\145\x73\x2f\x66\x6f\157\164\x65\x72"); goto hF2Bi; qWOp_: $user = $this->ion_auth->user()->row(); goto bDr9n; b6QgB: $data["\163\155\x74\x5f\141\x63\164\151\x76\x65"] = $smt; goto sOgGg; eTqv3: $data["\164\160"] = $this->dashboard->getTahun(); goto Ti0kg; TZY1a: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto b6QgB; hF2Bi: } }
