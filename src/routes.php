<?php
$routes = [
    'metadata',
    'getAllProjects',
    'getProject',
    'getProjectComments',
    'getAllCreativesToFollow',
    'getAllCreativeFields',
    'getAllUsers',
    'getUserByName',
    'getUser',
    'getUserProjects',
    'getUserProjectsByUsername',
    'getUserWips',
    'getUserWipsByUsername',
    'getUserAppreciations',
    'getUserAppreciationsByUsername',
    'getUserCollections',
    'getUserCollectionsByUsername',
    'getUserStats',
    'getUserStatsByUsername',
    'getUserFollowers',
    'getUserFollowersByUsername',
    'getUserFollowing',
    'getUserFollowingByUsername',
    'getUserWorkExperience',
    'getUserWorkExperienceByUsername',
    'getAllCollections',
    'getCollection',
    'getProjectFromCollection'

];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}
