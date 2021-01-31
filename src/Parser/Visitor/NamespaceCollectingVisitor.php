<?php
namespace J6s\PhpArch\Parser\Visitor;

use PhpParser\NodeVisitorAbstract;

abstract class NamespaceCollectingVisitor extends NodeVisitorAbstract
{
    /** @var string[] */
    protected array $namespaces = [];

    public function getNamespaces(): array
    {
        return $this->namespaces;
    }
}
