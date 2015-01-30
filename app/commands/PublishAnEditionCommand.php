<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PublishAnEditionCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'edition:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publishes an edition.';

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
		try
		{
			$edition = Edition::publish($id = $this->argument('id'));

			$this->info("Edition ({$edition->name}) published successfully.");
		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			$this->error("Unpublished edition with ID: $id not found.");
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('id', InputArgument::REQUIRED, 'ID of edition to publish.'),
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
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
