<?php


abstract class ClasseAbstraite
{
    public function templateMethod() {
        $this->etape1();
        $this->etape2();
        $this->etape3();
    }

    protected function etape1() {
        echo "Étape 1 commune à toutes les implémentations <br/>";
    }

    protected function etape3() {
        echo "Étape 3 commune à toutes les implémentations<br/>";
    }

    abstract protected function etape2();
}