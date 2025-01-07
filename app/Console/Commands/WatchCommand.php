<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\Console\Command\SignalableCommandInterface;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class WatchCommand extends Command implements SignalableCommandInterface
{
    public const string WATCHER = 'vendor/laravel/octane/bin/file-watcher.cjs';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:watch {exec}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Watch Command';

    private ?Process $process = null;

    private ?Process $watcher = null;

    public function __construct(private readonly Repository $configRepository)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $command = $this->argument('exec');
        $watcher = $this->watcher();

        $output = function (string $stdout, string $stderr): void {
            echo $stdout . PHP_EOL;
            echo $stderr . PHP_EOL;
        };

        $this->process = new Process(explode(' ', $command), base_path(), timeout: null);
        $this->process->enableOutput();
        $this->process->start($output);

        $this->info("Process '$command' started");

        while ($watcher->isRunning()) {
            if ($watcher->getIncrementalOutput() !== '' && $watcher->getIncrementalOutput() !== '0') {
                $this->info("Restarting command '$command'");
                $this->process->stop();
                $this->process = $this->process->restart($output);
                $this->info("Restarted command '$command'");
            }

            usleep(500 * 1000);
        }
    }

    private function watcher(): Process
    {
        if ($this->watcher instanceof Process) {
            return $this->watcher;
        }

        $this->watcher = new Process([
            (new ExecutableFinder)->find('node'),
            self::WATCHER,
            $this->watchFiles(),
            false,
        ], base_path(), null, null, null);

        $this->watcher->enableOutput();
        $this->watcher->start();

        return $this->watcher;
    }

    private function watchFiles(): string
    {
        $paths = (new Collection($this->configRepository->get('octane.watch')))->map(
            fn($path) => base_path($path)
        );

        return json_encode($paths, JSON_THROW_ON_ERROR);
    }

    public function getSubscribedSignals(): array
    {
        return [SIGINT, SIGTERM, SIGHUP];
    }

    #[NoReturn]
    public function handleSignal(int $signal, false|int $previousExitCode = 0): int|false
    {
        $this->info('Exiting with signal: ' . $signal);
        $this->watcher?->stop(1, $signal);
        $this->process?->stop(1, $signal);
        exit(0);
    }
}
