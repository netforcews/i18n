<?php

return [
    'login' => [
        'title' => 'Identifique-se',
        'subtitle' => 'Faça o seu login',
        'email' => 'E-mail',
        'password' => 'Senha',
        'enter' => 'Entrar',
        'remember' => 'Esqueceu sua senha?',
    ],

    'remember' => [
        'title' => 'Redefina sua senha',
        'subtitle' => 'Redefina sua senha',
        'message' => 'Digite seu endereço de e-mail e nós lhe enviaremos instruções para redefinir a sua senha.',
        'hint' => 'Digite seu e-mail',
        'enter' => 'Enviar',
        'back' => 'Voltar ao login',
        'messages' => [
            'sendmail' => 'Foi enviado para você um e-mail com instruções para trocar a sua senha.',
        ],
    ],

    'reset' => [
        'title' => 'Trocar senha',
        'subtitle' => 'Troque sua senha',
        'message' => 'Escolha uma senha segura e não reutilize em outras contas.',
        'new' => 'Nova senha',
        'confirm' => 'Repita a senha',
        'enter' => 'Trocar senha',
        'back' => 'Voltar ao login',
        'messages' => [
            'pass-changed' => 'Senha alterada com sucesso.',
        ],
    ],

    'errors' => [
        'login' => 'Usuário ou senha incorreta',
        'user-notfound' => 'Usuário não encontrado',
        'user-disabled' => 'Usuário sem permissão para acessar o sistema',
        'no-change-pass' => 'Sem permissão para trocar a senha',
    ],
];
