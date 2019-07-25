<?php
$mailPreFills = [
    'subject' => 'Návrh do inkubátoru inkubator.drdplus.info',
    'body' => <<<TEXT
Ahoj, měl(a) bych návrh na další zajímavou nepočítačovou RPG hru, která sice ještě není hotová, ale vyvíjí se slibně.

Odkaz na ní je www.example.com 
TEXT
    ,
];

$mailPreFillsWIthKeys = [];
foreach ($mailPreFills as $key => $mailPreFillValue) {
    $mailPreFillsWIthKeys[] = "$key=$mailPreFillValue";
}

$mailPreFill = implode('&', array_map('htmlspecialchars', $mailPreFillsWIthKeys));
?>
<div class="container guidepost">
  <div class="row">
    <div class="col" id="proposal">
      <a class="navrh" href="mailto:info@drdplus.info?<?= $mailPreFill ?>">
        <div class="align-middle text-center">
          <h2 class="on-hover">
            <span class="hide-on-hover">Máš návrh?<br><i class="fas fa-envelope"></i></span>
            <span class="show-on-hover">Sem s ním!<br><i class="fas fa-envelope-open"></i></span>
          </h2>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md col-sm no-gutters" id="DnD">
      <a class="jeskyne-a-draci" href="http://jeskyneadraci.cz/">
        <div class="name">Jeskyně a draci
          <div class="note">Dungeons & Dragons česky</div>
        </div>
      </a>
    </div>
    <div class="col-md col-sm no-gutters" id="DraciADracata">
      <a class="draci-a-dracata" href="/draci-a-dracata">
        <div class="name">Draci a dráčata
          <div class="note">Osedlej si draka</div>
        </div>
      </a>
    </div>
  </div>
</div>