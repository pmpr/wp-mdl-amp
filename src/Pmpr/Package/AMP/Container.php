<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed202bc0dd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AMP; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { const qgwkyemuiussyyoy = "\x30\56\61"; const wcwemgogyesywcww = "\x68\x74\x74\160\x73\72\x2f\x2f\x63\x64\156\56\x61\x6d\160\x70\162\x6f\152\x65\143\164\56\157\x72\147\x2f\x76\60"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function eywqecukyieuoaom() : ?string { return $this->weysguygiseoukqw(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if ($iwywmkygwewiamwm) { goto mqccmesakuemceqi; } $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(); mqccmesakuemceqi: $aweokccqeyqmaygy = explode("\57", $this->kmakyewuoeikaccy($iwywmkygwewiamwm)); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) == $this->eywqecukyieuoaom() && strrev($iwywmkygwewiamwm)[0] === "\57"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if (!$wp_rewrite) { goto twkmiuomimomscew; } if (!($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\x2f{$wp_rewrite->pagination_base}\57"))) { goto eyiamcekkgkiawqy; } $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); eyiamcekkgkiawqy: twkmiuomimomscew: return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = ManipulateSetting::ewswusimyeosaogm(); if (empty($jkmcwmwkaqwqegqq)) { goto qwcegcuowwgiccos; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); if (!($migiiksoiymissge != false)) { goto kooskuwkuayiuose; } $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); kooskuwkuayiuose: goto qcessicwuikwqsis; qwcegcuowwgiccos: $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, ManipulatePost::ycqquoiyyuesegsy($post)); qcessicwuikwqsis: return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if (!($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy))) { goto yssscwioiyygssec; } $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()); yssscwioiyygssec: return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if ($migiiksoiymissge) { goto ieumumsgyguceusy; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy(); ieumumsgyguceusy: if (!$migiiksoiymissge) { goto coywmiyqgsweuiic; } $migiiksoiymissge = explode("\x2f", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); ManipulateArray::unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\x2f", $migiiksoiymissge); coywmiyqgsweuiic: return trailingslashit($migiiksoiymissge); } public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; $post = ManipulatePost::get($post); if (!$post) { goto ycakugokkqkuqyiu; } $yemgmmgogcwccuky = $this->weysguygiseoukqw(Setting::egaaowwogygqqyia, []); if (!(is_array($yemgmmgogcwccuky) && in_array(ManipulatePost::mwikyscisascoeea($post), ConvertArray::comkeiiwgwaqmcwe($yemgmmgogcwccuky)))) { goto siqagquguiemuoku; } $iwwqyiewcwimqcga = false; siqagquguiemuoku: ycakugokkqkuqyiu: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x67\145\137\x68\141\x73\x5f\x61\x6d\x70"), $iwwqyiewcwimqcga); } }
