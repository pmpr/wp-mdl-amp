<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bb9b0c50f0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AMP; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Head extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\150\x65\141\144", [$this, "\x63\147\157\161\167\x6d\x75\x79\171\147\151\x65\157\x61\141\141"], 99); parent::wigskegsqequoeks(); } public function cgoqwmuyygieoaaa() { if (!$this->iwwqyiewcwimqcga()) { goto umgaesggesswoaqe; } if (!($migiiksoiymissge = $this->eyuiyyuiwqkmceyo())) { goto wwkgkaecgiwggcck; } ManipulateHTML::awwqwouuoioauoaw("\154\x69\156\x6b", ["\162\145\154" => "\x61\155\x70\150\x74\x6d\x6c", "\x68\162\x65\146" => trailingslashit($migiiksoiymissge)]); wwkgkaecgiwggcck: umgaesggesswoaqe: } public function eyuiyyuiwqkmceyo() : ?string { global $wp, $post; $kgccggmwkeukkkci = $this->eywqecukyieuoaom(); $mkomwsiykqigmqca = $wp->request; $ewkaiqqqacmkgqws = $wp->matched_rule; $uucakqegucckiega = null; if (!(!DecoratorQuery::aauyuieeeaakygki() && !DecoratorQuery::kmmyuiwaogukwqqi() && !DecoratorPost::ugcgywasgqgaysek($post))) { goto mosqsmqimqgqoase; } if (DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::takycgcamoacksqw() || DecoratorQuery::migkyseymeomymmy()) { goto kiwqkcaekqqyuegq; } $uucakqegucckiega = $this->ycqquoiyyuesegsy(DecoratorQuery::keeuqgyooycqoygw()); goto quwcqmyokicssyew; kiwqkcaekqqyuegq: $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca); if (!(DecoratorQuery::migkyseymeomymmy() && false === strpos($migiiksoiymissge, "\151\156\x64\x65\x78\56\x70\150\160") && false !== strpos($ewkaiqqqacmkgqws, "\x69\x6e\x64\x65\x78\x2e\160\x68\x70"))) { goto qsygcycwieukkgwc; } $mkomwsiykqigmqca = "\151\x6e\x64\145\170\56\x70\150\x70\x2f{$mkomwsiykqigmqca}"; qsygcycwieukkgwc: $uucakqegucckiega = trailingslashit(ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca)); quwcqmyokicssyew: $qawuqcsueakkgiio = (int) ManipulateArray::get($wp->query_vars, self::kkcqmwgccaygggcu, 0); if (!$qawuqcsueakkgiio) { goto yqykqysmiquwoasu; } if (!($qawuqcsueakkgiio >= 2 && (DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::migkyseymeomymmy()))) { goto cmqucgoewuyieoyk; } $ywgeysoisuqwkikk = ManipulateServer::gmigwwwmwemyaayy("\57"); if (!((DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::migkyseymeomymmy()) && false !== strpos($ewkaiqqqacmkgqws, "\151\x6e\144\x65\170\x2e\x70\150\160") && false === strpos(ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca), "\151\156\x64\x65\x78\56\x70\x68\160"))) { goto iqcogmsguwoikame; } $qmseqawymuougskk = ManipulateServer::gmigwwwmwemyaayy(); $ywgeysoisuqwkikk = ManipulateServer::gmigwwwmwemyaayy("\151\x6e\x64\145\x78\56\x70\150\160"); $uucakqegucckiega = str_replace($qmseqawymuougskk, $ywgeysoisuqwkikk, $uucakqegucckiega); iqcogmsguwoikame: if (!(null != $mkomwsiykqigmqca)) { goto gimmuoqwckiseaik; } $okegewoueuwgekmu = explode("\x2f", $mkomwsiykqigmqca); $wceacoukmmiqekkc = [$this->eywqecukyieuoaom()]; array_splice($okegewoueuwgekmu, -2, 0, $wceacoukmmiqekkc); $mmqwimuaakmaquei = implode("\57", $okegewoueuwgekmu); $uucakqegucckiega = $ywgeysoisuqwkikk . $mmqwimuaakmaquei; gimmuoqwckiseaik: cmqucgoewuyieoyk: yqykqysmiquwoasu: $uucakqegucckiega = user_trailingslashit($uucakqegucckiega); if (!DecoratorQuery::gouusicsisumuiei()) { goto ayyweymyuuiauamo; } DecoratorQuery::yqymaqmqiqmmmsoo([$kgccggmwkeukkkci => 1, "\x73" => DecoratorQuery::siiwuwaswckkuoya()], trailingslashit(ManipulateServer::auksikwsewaywikq())); ayyweymyuuiauamo: mosqsmqimqgqoase: return $this->qgqoaoicmmgiiamy($uucakqegucckiega); } public function qgqoaoicmmgiiamy($migiiksoiymissge) : ?string { global $wp_query; $kgccggmwkeukkkci = $this->eywqecukyieuoaom(); $mqqisesagsuooios = ManipulateSetting::ewswusimyeosaogm(); if (empty($mqqisesagsuooios)) { goto wmmggowmigekyoso; } if (!DecoratorQuery::cukiusasccucgwqc()) { goto eegqyykygiccaoeo; } $migiiksoiymissge = untrailingslashit($migiiksoiymissge); eegqyykygiccaoeo: if (!(DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::migkyseymeomymmy() || DecoratorQuery::takycgcamoacksqw())) { goto ywqgcegomwaiuquc; } $migiiksoiymissge = user_trailingslashit(trailingslashit($migiiksoiymissge) . $kgccggmwkeukkkci); ywqgcegomwaiuquc: goto soqqemyioggmoakg; wmmggowmigekyoso: if (!(DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::migkyseymeomymmy() || DecoratorQuery::takycgcamoacksqw())) { goto iggyqogweyosuikc; } $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo($kgccggmwkeukkkci, "\x31", $migiiksoiymissge); if (!(DecoratorQuery::seokosgecygsmqau() && DecoratorQuery::qaumqeeagueuqkcg("\x70\141\x67\x65\x5f\151\144") == ManipulatePage::eokiwumgqmymgyoa())) { goto ygcsmkuycoagwyou; } $eqgoocgaqwqcimie = DecoratorQuery::qaumqeeagueuqkcg("\160\x61\147\145\137\x69\x64"); if (!('' != $eqgoocgaqwqcimie)) { goto omugkkesagcyagmk; } $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo("\160\x61\147\x65\137\151\144", $eqgoocgaqwqcimie, $migiiksoiymissge); omugkkesagcyagmk: ygcsmkuycoagwyou: if (!(DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu) >= 2)) { goto kqksuugcgsyeoayy; } $eqgoocgaqwqcimie = DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo(self::kkcqmwgccaygggcu, $eqgoocgaqwqcimie, $migiiksoiymissge); kqksuugcgsyeoayy: iggyqogweyosuikc: if (!DecoratorQuery::migkyseymeomymmy()) { goto miyqyeiwquwsacsm; } $gygawogosumsgmme = "\155"; if (!DecoratorQuery::ocwoeosukggumggw()) { goto qqewoyookaskiuek; } $gygawogosumsgmme = "\164\x61\x67"; qqewoyookaskiuek: if (!DecoratorQuery::sgayqmgoigoseaoo()) { goto ssoucoucsgccekwe; } $gygawogosumsgmme = "\x63\141\164"; ssoucoucsgccekwe: if (!DecoratorQuery::mykygowqgwcuecua()) { goto qkcyqocqqwmqgqww; } $gygawogosumsgmme = "\141\165\x74\150\157\162"; qkcyqocqqwmqgqww: $eqgoocgaqwqcimie = DecoratorQuery::qaumqeeagueuqkcg($gygawogosumsgmme); $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo($gygawogosumsgmme, $eqgoocgaqwqcimie, $migiiksoiymissge); miyqyeiwquwsacsm: soqqemyioggmoakg: $agoaugssmsiumiym = ManipulateServer::cgaoowikqaqqoqww(true); if (!($agoaugssmsiumiym && DecoratorQuery::cukiusasccucgwqc())) { goto oqugqwcyomiaaoqu; } if (DecoratorQuery::kccakwkaqugygwmq()) { goto acaqummmoyiemqss; } $ymqmyyeuycgmigyo = ManipulateArray::get($wp_query->query, "\160\141\147\145\156\141\x6d\145", ''); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $ymqmyyeuycgmigyo = ManipulateArray::get($wp_query->query, "\156\141\x6d\x65", ''); suswcqoyyqkkquuo: if (!$ymqmyyeuycgmigyo) { goto eeqesooyqagwawae; } ManipulateArray::unset($agoaugssmsiumiym, "\x71"); eeqesooyqagwawae: $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo($agoaugssmsiumiym, $migiiksoiymissge); oqugqwcyomiaaoqu: return $migiiksoiymissge; } }
