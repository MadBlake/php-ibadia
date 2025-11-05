<?php
interface Transport { public function deliver(): string; }
class Truck implements Transport { public function deliver(): string { return "Por carretera"; } }
class Ship implements Transport { public function deliver(): string { return "Por mar"; } }
abstract class Logistics { abstract protected function createTransport(): Transport; public function planDelivery(): string { return $this->createTransport()->deliver(); } }
class RoadLogistics extends Logistics { protected function createTransport(): Transport { return new Truck(); } }
class SeaLogistics extends Logistics { protected function createTransport(): Transport { return new Ship(); } }
echo (new RoadLogistics())->planDelivery(), PHP_EOL; echo (new SeaLogistics())->planDelivery(), PHP_EOL;
