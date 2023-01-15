<?php
namespace Deployer;
require 'recipe/common.php';

set('repository','git@github.com:mpraeauer/benbaeckt_wp.git');


set('shared_files', ['public/wp-config.php', 'public/.htaccess']);
set('shared_dirs', ['public/wp-content/uploads']);
set('keep_releases', 3);



// Hosts
host('88.198.150.108')
        ->set('remote_user','marlyben')    

        ->set('deploy_path', '/var/www/marlyben');
 

// Composer
set('composer_action', false);

// Tasks
desc('Deploy your project');
task('deploy', [
    //'deploy:info',
    'deploy:prepare',
    //'deploy:lock',
    //'deploy:release',
   // 'deploy:update_code',
    //'deploy:shared',
    //'deploy:writable',
    //'deploy:clear_paths',
    //'deploy:symlink',
    //'deploy:unlock',
     'deploy:publish'
]);

task('delete_src_folder', function () {
        run('rm -rf {{release_path}}/src');
    });

// [Optional] If deploy fails automatically unlock.
after('deploy', 'delete_src_folder');
after('deploy:failed', 'deploy:unlock');