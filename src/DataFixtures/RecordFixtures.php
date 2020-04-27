<?php

namespace App\DataFixtures;

use App\Entity\Record;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RecordFixtures extends BaseFixture implements DependentFixtureInterface {
    protected function loadData(ObjectManager $manager)
    {
        // Générer 100 records
        $this->createMany(100,'record',function(){
            $record = (new Record())
                ->setTitle($this->faker->catchPhrase)
                ->setDescription($this->faker->realText())
                ->setReleasedAt($this->faker->dateTimeBetween('-6 month'))
                ->setArtist(($this->getRandomReference('artist')))
                ->setLabel($this->getRandomReference('label'))
            ;

            return $record;
        });
    }

    /**
     * liste des classes de Fixtures à charger avant RecordFixtures
     */
    public function getDependencies()
    {
        return[
            ArtistFixtures::class,
            LabelFixtures::class,

        ];
    }
}