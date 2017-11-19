<?php

// Check if login-related pages.
switch (Yii::$app->urlManager->parseRequest(Yii::$app->request)[0])
{
    case 'admin/user/login':
        // If yes, display the custom layout & styles.
        echo $this->render(
            'main-login',
            ['content' => $content]
        );
        break;
  
    default:
        // If no, display default layout & styles.
        echo $this->render(
            'admin',
            ['content' => $content]
        );
        break;
}