<?php

function valid (array $post) : array {
    $validate=[
 'error'=>false,
    'success' =>false,
        'messages'=>[],

    ];

    if (!empty($post['login']) && !empty($post['password'])){

$login = trim($post ['login']);
        $password = trim($post ['password']);


        $constraints= [
                'login' => 6,
            'password'=>3,
        ];

        $validateForm=validLoginAndPassword($login, $password, $constraints);



        if (!$validateForm['Login']) {


            $validate['error'] = true;
            array_push( $validate ['messages'],
            "Логин должен содержать больше 6 символов "
            );
        }


        if (!$validateForm['password']) {


            $validate['error'] = true;
            array_push( $validate ['messages'],
                "Пароль должен содержать больше 3 символов "
            );
        }

        if (!$validate['error']){


                $validate['success'] = true;
                array_push(
                        $validate['messages']
                );
        }
        return $validate;
    }
    return $validate;
}