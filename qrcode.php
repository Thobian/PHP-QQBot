<?php
include __DIR__.'/lib/init.php';

//PT::curl('https://w.qq.com',[],'GET',[
//    'cookie'=>[]
//]);

$con    = PT::curl('https://ssl.ptlogin2.qq.com/ptqrshow', [
    'appid' => 501004106,
    'e'     => 0,
    'l'     => 'M',
    's'     => 5,
    'd'     => 72,
    'v'     => 4,
    't'     => 0.1,
], 'GET', [
        //'referer' => 'https://ui.ptlogin2.qq.com/cgi-bin/login?daid=164&target=self&style=16&mibao_css=m_webqq&appid=501004106&enable_qlogin=0&no_verifyimg=1&s_url=http%3A%2F%2Fw.qq.com%2Fproxy.html&f_url=loginerroralert&strong_login=1&login_state=10&t=20131024001',
        'cookie'=>[],
    ]
);
header('content-type:image/png');
echo($con);