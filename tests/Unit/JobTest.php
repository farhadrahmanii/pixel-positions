<?php

use App\Models\Job;
use App\Models\Employer;

it('Belongs to  an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();

});


it('can have tag', function () {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('Frontend');

    // Assert
    expect($job->tags)->toHaveCount(1);
});
