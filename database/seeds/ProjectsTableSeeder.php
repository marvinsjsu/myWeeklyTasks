<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	factory(App\User::class, 3)->create()->each(function($owner) {

    		$projects = factory(App\Project::class, 5)->create([
    			'user_id' => $owner->id, 
    			'user_id' => $owner->id,
    		]);

    		$projects->each(function($proj, $key) {

                $projComments = factory(App\Comment::class, 4)->create([
                    'user_id' => $proj->user_id, 
                    'commentable_id' => $proj->id, 
                    'commentable_type' => 'App\Project',
                ]);

    			$tasks = factory(App\Task::class, 3)->create([
    				'user_id' => $proj->user_id, 
    				'project_id' => $proj->id,
    			]);

    			$tasks->each(function($task, $key) {
                    
    				$comments = factory(App\Comment::class, 4)->create([
    					'user_id' => $task->user_id, 
    					'commentable_id' => $task->id, 
    					'commentable_type' => 'App\Task',
    				]);
    			});

    		});
    	});
    }
}