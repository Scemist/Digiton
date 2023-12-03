<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExportStatic extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:export-static';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$this->call('export');

		$this->info('Nice');
	}
}
