<?php
interface SortStrategy { public function sort(array $d): array; }
class QuickSort implements SortStrategy { public function sort(array $d): array { sort($d); return $d; } }
class BubbleSort implements SortStrategy { public function sort(array $d): array { for($i=0;$i<count($d);$i++){ for($j=0;$j<count($d)-1;$j++){ if($d[$j]>$d[$j+1]){ [$d[$j],$d[$j+1]] = [$d[$j+1],$d[$j]]; }}} return $d; } }
class Context { public function __construct(private SortStrategy $s){} public function run(array $d): array { return $this->s->sort($d); } }
print_r((new Context(new QuickSort()))->run([3,1,2]));
