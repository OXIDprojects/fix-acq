<?php
$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'fix-acq',
    'title'       => '<b>fix:</b> active check query',
    'description' => 'extends active check query with check for parent article',
    'thumbnail'   => 'bestlife.png',
    'version'     => '0.1.0',
    'author'      => 'Marat Bedoev, Bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array('oxarticle' => 'fix-acq/bla_fixacq_oxarticle')
);
