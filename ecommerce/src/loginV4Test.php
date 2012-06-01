<html>
    <head>
        <?php
        require '../php/IncludesPath.php';
        require_once $FB_PHP;
        require_once $FB_GLOBAL_DEFINES;
        define($scope,'read_stream, friends_likes');
        
          
        $config = array(
            'appId' => $appId,
            'secret' => $appSecret,
        );
        
        $facebook = new Facebook($config);
        
        //$user_id = $facebook->getUser();
        
        ?>
    </head>
    <body>

        <?
        if ($user_id) {
            
            $params = array(
                'ok_session' => $HOME_PAGE_URL,
                'no_user' =>  $LOGIN_PAGE_NO_USER_URL,
                'no_session' => $LOGIN_PAGE_NO_SESSION_URL,
            );

            $next_url = $facebook->getLoginStatusUrl($params);
        } else {
            
            $params = array(
                'scope' => 'read_stream, friends_likes',
                'redirect_uri' => $HOME_PAGE_URL,
            );

            $loginUrl = $facebook->getLoginUrl($params);
            echo 'Please <a href="' . $loginUrl . '">login.</a>';
        }
        ?>

    </body>
</html>