<?php
$mailPreFills = [
    'subject' => 'Návrh do inkubátoru',
    'body' => <<<TEXT
Ahoj, měl(a) bych návrh na další zajímavou nepočítačovou RPG hru, která sice ještě není hotová, ale vyvíjí se slibně.

Odkaz na ní je www.example.com 
TEXT
    ,
];

$mailPreFillsWithKeys = [];
foreach ($mailPreFills as $key => $mailPreFillValue) {
    $mailPreFillsWithKeys[] = rawurlencode($key) . '=' . rawurlencode($mailPreFillValue);
}
$mailPreFill = implode('&', $mailPreFillsWithKeys);

$newProposal = <<<HTML
<a class="navrh" href="mailto:info@drdplus.info?<?= $mailPreFill ?>">
  <div class="align-middle text-center">
    <h2 class="on-hover">
      <span class="hide-on-hover">Máš návrh?<br><i class="fas fa-envelope"></i></span>
      <span class="show-on-hover">Sem s ním!<br><i class="fas fa-envelope-open"></i></span>
    </h2>
  </div>
</a>
HTML;

?>
<div class="container guidepost">
  <div class="row">
    <div class="col" id="topProposal">
        <?= $newProposal ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md col-sm-6 no-gutters" id="draciHlidka">
      <a class="draci-hlidka" href="https://www.dracihlidka.cz/#top">
        <div class="name">Dračí hlídka<br>
          <div class="date">září 2019</div>
        </div>
      </a>
    </div>
    <div class="col-md col-sm no-gutters" id="jeskyneADraci">
      <a class="jeskyne-a-draci" href="/jeskyne-a-draci">
        <div class="name">Jeskyně a draci
          <div class="note">Dungeons & Dragons česky</div>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md col-sm-6 no-gutters" id="neviditelnaKniha">
      <a class="neviditelna-kniha small-image" href="http://neviditelnakniha.cz/">
        <div class="name">Neviditelná kniha 2</div>
      </a>
    </div>
    <div class="col-md col-sm no-gutters" id="draciADracata">
      <a class="draci-a-dracata small-image" href="/draci-a-dracata">
        <div class="name">Draci a dráčata
          <div class="note">Osedlej si draka</div>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md col-sm-6 no-gutters" id="zapovezeneZeme">
      <a class="zapovezene-zeme" href="http://mytago.cz/zapovezene-zeme">
        <div class="name">Neviditelná kniha 2</div>
      </a>
    </div>
    <div class="col-md col-sm no-gutters" id="draciADracata">
      <a class="draci-a-dracata" href="/draci-a-dracata">
        <div class="name">Draci a dráčata
          <div class="note">Osedlej si draka</div>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col" id="bottomProposal">
        <?= $newProposal ?>
    </div>
  </div>
</div>