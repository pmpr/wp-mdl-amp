<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64327266db9bc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AMP; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { const qgwkyemuiussyyoy = "\x30\56\61"; const wcwemgogyesywcww = "\x68\x74\164\x70\x73\x3a\57\x2f\x63\144\x6e\56\x61\x6d\160\160\x72\157\x6a\145\x63\164\x2e\x6f\162\x67\57\166\x30"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function eywqecukyieuoaom() : ?string { return $this->weysguygiseoukqw(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if ($iwywmkygwewiamwm) { goto qicwaskssogcokgm; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); qicwaskssogcokgm: $aweokccqeyqmaygy = explode("\x2f", $iwywmkygwewiamwm); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) === $this->eywqecukyieuoaom() && strrev($iwywmkygwewiamwm)[0] === "\57"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if (!$wp_rewrite) { goto uqqaiagaeqgqgaiy; } if (!($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\57{$wp_rewrite->pagination_base}\x2f"))) { goto uguigkcmukuouway; } $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); uguigkcmukuouway: uqqaiagaeqgqgaiy: return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->ewswusimyeosaogm(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (empty($jkmcwmwkaqwqegqq)) { goto gaomwagkcciesyqy; } if ($migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post)) { goto aegysmeecgcgayyw; } goto esuiysskoweawsue; gaomwagkcciesyqy: $migiiksoiymissge = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, $seumokooiykcomco->ycqquoiyyuesegsy($post)); goto esuiysskoweawsue; aegysmeecgcgayyw: $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); esuiysskoweawsue: return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if (!($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy))) { goto suqkuqygkkgwyaie; } $agoaugssmsiumiym = $this->caokeucsksukesyo()->gyecsegqciqykomu()->iyooiokaaaqgesue($eeamcawaiqocomwy); $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()) . $agoaugssmsiumiym; suqkuqygkkgwyaie: return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if ($migiiksoiymissge) { goto soaccwqimeksgwiw; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(); soaccwqimeksgwiw: if (!$migiiksoiymissge) { goto wiysogeqqwgioyka; } $migiiksoiymissge = explode("\57", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\57", $migiiksoiymissge); wiysogeqqwgioyka: return trailingslashit($migiiksoiymissge); } public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; if (!($gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto giaacoqqqsekcayy; } $sciomagaqmgggsiu = $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post), $sciomagaqmgggsiu, true)) { goto cgiscsqwwgqqaeqi; } $iwwqyiewcwimqcga = false; goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $yemgmmgogcwccuky = $this->weysguygiseoukqw(Setting::egaaowwogygqqyia, []); if (!(is_array($yemgmmgogcwccuky) && in_array($gcqseksiskwueksc, $yemgmmgogcwccuky))) { goto skkamseieeusycye; } $iwwqyiewcwimqcga = false; skkamseieeusycye: syiqkaasoueowwui: giaacoqqqsekcayy: return $this->ocksiywmkyaqseou("\160\141\x67\145\x5f\x68\x61\x73\137\x61\x6d\x70", $iwwqyiewcwimqcga); } }
