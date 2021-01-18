<?php
//$array = [
//    'https://github.com/GitDzreal93/imtest/blob/ca09728c726cfccb8521b0c5b7c00ea0e8517b8c/SendMsg/Controller/batchPushMsgSync/getUidByPhone.php' => 111,
//    'https://github.com/sunlbs/creator/blob/986ed5bad631f4b1998ab661f36c96c5dbc77f4c/Creater/Helper/CommonHelper.class.php' => 222,
//];
//echo $array['https://github.com/sunlbs/creator/blob/986ed5bad631f4b1998ab661f36c96c5dbc77f4c/Creater/Helper/CommonHelper.class.php'];

//$url_add = 'https://github.com/sunlbs/creator/blob/986ed5bad631f4b1998ab661f36c96c5dbc77f4c/Creater/Helper/CommonHelper.class.php';
//
//$url_add = 'https://github.com/lianzhili3/ceshi/blob/bfbe1e5827101b73c1aa18a2c0b8edfdd7e78cad/git3.php';
//$url_array = explode('/', $url_add);
//     var_dump($url_array);
$a = [
    'build_id'         => 'build_id',
    'git_module_name'  => 'git_module_name',
    'git_project_id'   => 'git_project_id',
    'commit_id'        => 'commit_id',
    'tag_name'         => 'tag_name',
    'status'           => 'status',
    'build_user'       => 'build_user',
    'create_time'      => 'create_time',
    'update_time'      => 'update_time',
    'package_url'      => 'package_url',
    'package_number'   => 'package_number',
    'origin_branch'    => 'origin_branch',
    'before_commit_id' => 'before_commit_id',
    'build_language'   => 'build_language',
    'fail_reason'      => 'fail_reason',
    'is_whole'         => 'is_whole',
    'package_md5'      => 'package_md5',
    'project_id'       => 'project_id',
    'project_name'     => 'project_name',
    'tag_status'       => 'tag_status',
    'default_branch'   => 'default_branch',
    'build_params'     => 'build_params',
    'human_lock'       => 'human_lock',
    'is_cr'            => 'is_cr',
    'is_notest'        => 'is_notest',
    'gittab'           => 'gittab',
    'cli_build_stat'           => 'cli_build_stat',
    'business_id' =>'business_id',
    'lock_file_check' =>'lock_file_check',
    'es6_check' =>'es6_check',
    'npm_sdk' =>'npm_sdk',

];
var_dump(array_keys($a));