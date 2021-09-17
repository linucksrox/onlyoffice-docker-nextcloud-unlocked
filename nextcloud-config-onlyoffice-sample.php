// add this array to Nextcloud's config.php to match up the JWT auhtorization header with what is defined in stack.yml
'onlyoffice' => 
  array (
    'jwt_header' => 'NCAuth',
  ),

// Add this if you get an error about host not connected because it violates local access rules
'allow_local_remote_servers' => true,
