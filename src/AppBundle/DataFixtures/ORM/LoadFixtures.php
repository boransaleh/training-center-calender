<?php

/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 09:08
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\AppBundle;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;
use AppBundle\Entity\User;


class LoadFixtures implements FixtureInterface
{


    public function load(ObjectManager $manager)
    {
        Fixtures::load(__DIR__.'/Fixtures.yml',$manager,[
            'providers' => [$this]
        ]);
    }
    public function passkey(){

        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    public function standortName()
    {
        $names = array(
            'Köln',
            'Bonn',
            'Duisdorf',
            'Hamburg',
            'BadHonef',
            'Alfter',
            'Berlin',
            'düsseldorf',
            'Hanover',
            'Siegburg',
        );

        return $names[array_rand($names)];
    }


    public function Gesamtfach()
    {
        $names = array(
            'WISO',
            'REWE',
            'Steuern',
        );

        return $names[array_rand($names)];
    }

    public function Einzelfach()
    {
        $names = array(
            'Abgabenordnung',
            'Umsatzsteuer',
            'Einkommensteuer',
            'DATEV-Eink.St.',
            'Körperschaftsteuer',
            'Gewerbesteuer',
            'Abgabenordnung',
            'REWE',
            'WISO',
            'Excel',
            'word',
        );
        
        

        return $names[array_rand($names)];
    }
    public function Groupe()
    {
        $names = array(
            'Steuerfachangestellte/r VZ Wifa',
            'REWEfachangestellte/r VZ Wifa',
            'WISOfachangestellte/r VZ Wifa',
            'Abgabenordnungfachangestellte/r VZ Wifa',
            'DATEV-Eink.St.fachangestellte/r VZ Wifa',
            'Körperschaftsteuerfachangestellte/r VZ Wifa',
            'Einkommensteuerfachangestellte/r VZ Wifa',
            'Excelfachangestellte/r VZ Wifa',
            'wordfachangestellte/r VZ Wifa',
            'powerpointfachangestellte/r VZ Wifa',
            'Officefachangestellte/r VZ Wifa',
        );

        return $names[array_rand($names)];
    }



}