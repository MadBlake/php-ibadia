<?php
abstract class DataExporter {
  final public function export(array $rows): void { $this->open(); $this->writeHeader(); foreach($rows as $r) $this->writeRow($r); $this->close(); }
  protected abstract function open(): void; protected abstract function writeHeader(): void; protected abstract function writeRow(array $row): void; protected abstract function close(): void;
}
class CSVExporter extends DataExporter { protected function open(): void{} protected function writeHeader(): void{ echo "id,name\n"; } protected function writeRow(array $row): void{ echo $row['id'].",".$row['name']."\n"; } protected function close(): void{} }
(new CSVExporter())->export([['id'=>1,'name'=>'Ana'],['id'=>2,'name'=>'Luis']]);
