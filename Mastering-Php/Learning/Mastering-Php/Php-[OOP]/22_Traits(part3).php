<?php

    /*
        - Traits (part3) : 
        -------------------
    */

    trait Feature1{
        public function feature(){
            echo "This is feature 1 <br>";
        }
    }
    trait Feature2{
        public function feature(){
            echo "This is feature2 <br>";
        }
    }

    class Phone{
        use Feature1, Feature2 {
            // Trait-Name :: Method-name instedof method-name
            Feature1::feature insteadof Feature2;
            // Trait-name :: method-name as new name
            Feature2::feature as medoFeature;
        }
    }
    $phone = new Phone;
    $phone->feature();
    $phone->medoFeature();
