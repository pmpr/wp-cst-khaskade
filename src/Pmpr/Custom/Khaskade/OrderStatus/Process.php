<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             69a1b8711aa88             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Khaskade\OrderStatus; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; use Pmpr\Custom\Khaskade\Khaskade; class Process extends Queue { const eoiomwooikyqgmuw = Khaskade::PREFIX . 'send_sms_on_order_status_changed'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'khaskade_order_status'; } public function wwqqgimsseiouksy($gkkgcoiwayaccqgm) : int { $ksaameoqigiaoigg = 0; if (!$this->ikoiwkkcuqicgksy($gkkgcoiwayaccqgm)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::eoiomwooikyqgmuw, [$gkkgcoiwayaccqgm]); } return $ksaameoqigiaoigg; } public function ikoiwkkcuqicgksy($gkkgcoiwayaccqgm) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::eoiomwooikyqgmuw, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$gkkgcoiwayaccqgm]]); } }
