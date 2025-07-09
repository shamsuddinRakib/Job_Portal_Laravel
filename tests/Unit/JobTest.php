<?php

use App\Models\Employer;

it(' belongs to employer', function () {

    $employer =  Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,]); //important to mention relation key

    expect($job->employer()->is($employer))->toBeTrue();
});

it('can have tags', function () {

    $job = \App\Models\Job::factory()->create();
    $job->tag('frontend');

    expect($job->tags)->toHaveCount(1);

});
