<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email, "login");
$validate->validateData($dataNascimento);
$validate->validateCpf($cpf);
$validate->validateConfSenha($senha,$senhaConf);
$validate->validateStrongSenha($senha);
$validate->validateUserActive($email);
$validate->validateAttemptLogin();
$validate->validateFinalLogin($email);
var_dump($validate->getErro());


