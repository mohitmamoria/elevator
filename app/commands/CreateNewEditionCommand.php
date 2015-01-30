<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CreateNewEditionCommand extends Command {

	/**
	 * Path to the blank edition stub
	 */
	const VIEW_STUB_PATH = 'views/_stubs/edition.stub';
	
	/**
	 * Where editions are stored?
	 */
	const EDITIONS_BASE = 'views/editions';

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'edition:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Prepares the environment to create a new edition.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->info('Preparing a blank stage for next great edition.');

		$edition = Edition::create(['name' => $this->argument('name')]);
		$this->comment("[SUCCESS] Added in database. ID: {$edition->id}");

		$path = $this->createBlankView($edition);
		$this->comment("[SUCCESS] Created blank view. Path: $path");

		$this->info('All ready. Create something worthy!');
	}

	private function createBlankView($edition)
	{
		$stub = File::get(app_path(self::VIEW_STUB_PATH));
		$stub = str_replace('**NAME**', $edition->name, $stub);

		$target = app_path(self::EDITIONS_BASE . '/' . $edition->slug . '.blade.php');
		File::put($target, $stub);

		return $target;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('name', InputArgument::REQUIRED, 'Name of the edition.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			// array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
