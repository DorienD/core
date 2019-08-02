<?php

declare(strict_types=1);

namespace Bolt\Command;

use Bolt\Extension\ExtensionRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ExtensionsListCommand extends Command
{
    protected static $defaultName = 'extensions:list';

    /** @var ExtensionRegistry */
    private $extensionRegistry;

    public function __construct(ExtensionRegistry $extensionRegistry)
    {
        $this->extensionRegistry = $extensionRegistry;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('List extensions');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $io = new SymfonyStyle($input, $output);

        dump($this->extensionRegistry->getExtensions());

        $io->success('Done');
    }
}
