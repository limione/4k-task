<?php


namespace app\commands;

use app\models\Form2;
use Yii;
use DateTime;
use yii\console\Controller;
use yii\swiftmailer\Mailer;

/**
 * Test controller
 */
class TestController extends Controller {

    public function actionIndex() {
        $mailer = new Mailer();
        $mailer->useFileTransport = true;
        $second_model = new Form2();
        $second_form_data = $second_model->find()->all();
        $dt = new DateTime();
        foreach ($second_form_data as $data){
            $placement_date = DateTime::createFromFormat('Y-m-d H:i:s', $data->placement_date);
            $placement_date_str = $placement_date->format('Y-m-d H:i');
            if(($placement_date_str == $dt->format('Y-m-d H:i')) && ($data->status == NULL)){
                $data->status = '1';
                $data->save();
                $mailer->compose()
                        ->setFrom('company@mail.com')
                        ->setTo('admin@mail.com')
                        ->setSubject('TASK')
                        ->setTextBody('Task')
                        ->setHtmlBody('<b>Task</b>
                    <p>From:'.$data->contact_name.'</p>
                    <p>From the company:'.$data->company_name.'</p>
                    <p>His mail:'.$data->contact_email.'</p>
                    ')
                        ->send();// в runtime/mail
            }
            elseif (($placement_date_str <= $dt->format('Y-m-d H:i')) && ($data->status == NULL)){
                $data->status = '1';
                $data->save();
                $mailer->compose()
                    ->setFrom('company@mail.com')
                    ->setTo('admin@mail.com')
                    ->setSubject('TASK SENT LATE')
                    ->setTextBody('Task')
                    ->setHtmlBody('<b>Task</b>
                    <p>From:'.$data->contact_name.'</p>
                    <p>From the company:'.$data->company_name.'</p>
                    <p>His mail:'.$data->contact_email.'</p>
                    ')
                    ->send(); // в runtime/mail
            }
        }
    }
}
