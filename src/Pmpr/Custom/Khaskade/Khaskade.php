<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             69a0b91ce2cd2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Khaskade; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Khaskade\ManualOrder\ManualOrder; use Pmpr\Custom\Khaskade\OrderCampaign\OrderCampaign; use Pmpr\Custom\Khaskade\OrderInvoice\OrderInvoice; use Pmpr\Custom\Khaskade\OrderStatus\OrderStatus; class Khaskade extends ComponentInitiator { const PREFIX = 'cst_khaskade_'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Khaskade Custom', PR__CST__KHASKADE); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye']); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { ManualOrder::symcgieuakksimmu(); OrderInvoice::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('sms')) { OrderStatus::symcgieuakksimmu(); OrderCampaign::symcgieuakksimmu(); } } } }
