<?php
require_once "Subject.php";
require_once "Observer.php";

$subject = new Subject();

$observer1 = new Observer("Observateur 1");
$observer2 = new Observer("Observateur 2");
$observer3 = new Observer("Observateur 3");

$subject->attach($observer1);
$subject->attach($observer2);
$subject->attach($observer3);

$subject->setState("État 1");
$subject->setState("État 2");

$subject->detach($observer2);

$subject->setState("État 3");