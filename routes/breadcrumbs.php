<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Goal;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Goals
Breadcrumbs::for('goals', function (BreadcrumbTrail $trail) {
    $trail->push('Goals', route('goals.index'));
});

// Dashboard > Goals > Show
Breadcrumbs::for('goals.show', function (BreadcrumbTrail $trail, Goal $goal) {
    $trail->parent('goals');
    $trail->push($goal->name, route('goals.show', $goal));
});

// Dashboard > Goals > Question Edit
Breadcrumbs::for('goals.questions', function (BreadcrumbTrail $trail, Goal $goal) {
    $trail->parent('goals');
    $trail->push($goal->name, route('goals.show', $goal));
    $trail->push('Edit Report Questions', route('goals.questions', $goal));
});

// Profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->push('Profile', route('profile.show'));
});
