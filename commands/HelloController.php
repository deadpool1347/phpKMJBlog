<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {

        echo $message . "\n";

        return ExitCode::OK;
    }

    public function actionInit()
   {
       $auth = Yii::$app->authManager;

       $admin = $auth->createRole('admin');
       $author = $auth->createRole('author');
       $user = $auth->createRole('user');
       $inactive = $auth->createRole('inactive');

       $auth->add($admin);
       $auth->add($author);
       $auth->add($user);
       $auth->add($inactive);

       $auth->addChild($user, $inactive);
       $auth->addChild($author, $user);
       $auth->addChild($admin, $author);

       // добавляем разрешение "createPost"
       $createArticle = $auth->createPermission('createArticle');
       $createArticle->description = 'Добавление статьи';
       $updateArticle = $auth->createPermission('updateArticle');
       $updateArticle->description = 'Изменение статьи';
       $deleteArticle = $auth->createPermission('deleteArticle');
       $deleteArticle->description = 'Удаление статьи';

       $auth->add($createArticle);
       $auth->add($updateArticle);
       $auth->add($deleteArticle);

       $auth->addChild($author, $createArticle);
       $auth->addChild($author, $updateArticle);
       $auth->addChild($admin, $deleteArticle);
   }
}
