<?php

namespace App\DataFixtures;

use App\Entity\Label;
use Doctrine\Common\Persistence\ObjectManager;

class LabelFixtures extends BaseFixture
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(15,'label',function(){
            $name = $this->faker->lastName;
            $name = $this->faker->randomElement([
                'Productions',
                'Records',
                'Recs',
                ''
            ]);


            $label = (new Label())
                ->setName($name)
            ;

            return $label;
        });
    }
}

