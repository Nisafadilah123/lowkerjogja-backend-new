<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use apply_jobs;
use candidates;
use companies;
use corp;
use education;
use jobs;
use save_jobs;
use skills;
use teams;
use team_user;
use users;


class lowker extends Model
{
    protected $table = array(
        'apply_jobs', 'candidates', 'companies', 'corp', 'education', 'jobs',
        'save_jobs', 'skills', 'teams', 'team_user', 'users'
    );
}
