<?php
require_once "ClasseAbstraite.php";

class Impl1 extends ClasseAbstraite {
    protected function etape2() {
        echo "Implémentation 1 de l'étape 2<br/>";
    }
}