<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400ba08a49             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AMP\Traits; use Pmpr\Module\AMP\Setting; trait CommonTrait { public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; if (!($gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto yowsmsiyimmimemc; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sciomagaqmgggsiu = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post), $sciomagaqmgggsiu, true)) { goto eqkauqciwewmgeoi; } $iwwqyiewcwimqcga = false; goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $yemgmmgogcwccuky = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::egaaowwogygqqyia, []); if (!(is_array($yemgmmgogcwccuky) && in_array($gcqseksiskwueksc, $yemgmmgogcwccuky))) { goto sciwggaeogcoesiu; } $iwwqyiewcwimqcga = false; sciwggaeogcoesiu: kwagwqyusyiyoaqs: yowsmsiyimmimemc: return $this->ocksiywmkyaqseou("\x70\141\147\x65\137\x68\141\163\137\x61\x6d\x70", $iwwqyiewcwimqcga); } public function eywqecukyieuoaom() : ?string { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if ($iwywmkygwewiamwm) { goto kiqogmwcgcamwiig; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); kiqogmwcgcamwiig: $aweokccqeyqmaygy = explode("\x2f", $iwywmkygwewiamwm); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) === $this->eywqecukyieuoaom() && is_string($iwywmkygwewiamwm) && strrev($iwywmkygwewiamwm)[0] === "\57"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if (!$wp_rewrite) { goto sqiciiuwmykocycc; } if (!($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\57{$wp_rewrite->pagination_base}\57"))) { goto iomcaiwewsawiamu; } $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); iomcaiwewsawiamu: sqiciiuwmykocycc: return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->ewswusimyeosaogm(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (empty($jkmcwmwkaqwqegqq)) { goto uukumskkeggaowck; } if ($migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post)) { goto cggowoquuiwqkyew; } goto eequksumcoogyoem; uukumskkeggaowck: $migiiksoiymissge = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, $seumokooiykcomco->ycqquoiyyuesegsy($post)); goto eequksumcoogyoem; cggowoquuiwqkyew: $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); eequksumcoogyoem: return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if (!($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy))) { goto ocokwuuquaokmasc; } $agoaugssmsiumiym = $this->caokeucsksukesyo()->gyecsegqciqykomu()->iyooiokaaaqgesue($eeamcawaiqocomwy); $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()) . $agoaugssmsiumiym; ocokwuuquaokmasc: return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if ($migiiksoiymissge) { goto yiwiqaqmwiogawym; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(); yiwiqaqmwiogawym: if (!$migiiksoiymissge) { goto goacqqsgaaigyuaw; } $migiiksoiymissge = explode("\57", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\57", $migiiksoiymissge); goacqqsgaaigyuaw: return trailingslashit($migiiksoiymissge); } }
