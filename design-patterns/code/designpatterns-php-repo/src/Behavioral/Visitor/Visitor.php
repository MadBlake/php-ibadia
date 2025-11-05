<?php
namespace DesignPatterns\Behavioral\Visitor;

interface Visitor { public function visitText(Text $e); public function visitImage(Image $e); }
interface Element { public function accept(Visitor $v): void; }
class Text implements Element { public function __construct(public string $t){} public function accept(Visitor $v): void { $v->visitText($this);} }
class Image implements Element { public function __construct(public string $p){} public function accept(Visitor $v): void { $v->visitImage($this);} }
class HtmlVisitor implements Visitor {
  public function visitText(Text $e){ echo "<p>{$e->t}</p>\n"; }
  public function visitImage(Image $e){ echo "<img src='{$e->p}'/>\n"; }
}
