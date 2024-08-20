<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $posts = [
        [
            'title' => 'O Futuro do Outlook: Novidades e Funcionalidades',
            'summary' => 'Descubra as últimas atualizações do Outlook, incluindo novas funcionalidades e melhorias no desempenho para uma experiência de usuário ainda mais eficiente.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostOutlook.png',
        ],
        [
            'title' => 'Autenticação do Google: Melhores Práticas',
            'summary' => 'Aprenda como garantir a segurança da sua conta com a autenticação de dois fatores do Google. Descubra as melhores práticas e configure a proteção adicional para sua conta.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostAuth.jpg',
        ],
        [
            'title' => 'Segurança de Dados: Protegendo Informações Críticas',
            'summary' => 'Entenda a importância da segurança de dados e conheça as melhores estratégias para proteger informações críticas em sua organização. Dicas e ferramentas para melhorar a segurança.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostSeg.jpg',
        ],
        [
            'title' => 'O Futuro do Outlook: Novidades e Funcionalidades',
            'summary' => 'Descubra as últimas atualizações do Outlook, incluindo novas funcionalidades e melhorias no desempenho para uma experiência de usuário ainda mais eficiente.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostOutlook.png',
        ],
        [
            'title' => 'Autenticação do Google: Melhores Práticas',
            'summary' => 'Aprenda como garantir a segurança da sua conta com a autenticação de dois fatores do Google. Descubra as melhores práticas e configure a proteção adicional para sua conta.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostAuth.jpg',
        ],
        [
            'title' => 'Segurança de Dados: Protegendo Informações Críticas',
            'summary' => 'Entenda a importância da segurança de dados e conheça as melhores estratégias para proteger informações críticas em sua organização. Dicas e ferramentas para melhorar a segurança.',
            'date' => '18 de Agosto, 2024',
            'image' => 'PostSeg.jpg',
        ],
    ];

    return view('pages.client.home', ['title'=>'Home', 'posts' => $posts]);

})->name('home');

Route::resource('articles', ArticlesController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('reports', ReportsController::class);