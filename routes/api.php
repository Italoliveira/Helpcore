<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tickets', function (Request $request) {

    $tickets = [
        ['id' => 1, 'name' => 'Ticket 1', 'priority' => 'Alta', 'responsible' => 'João', 'subject' => 'Desenvolvimento', 'status' => 'Em andamento'],
        ['id' => 2, 'name' => 'Ticket 2', 'priority' => 'Média', 'responsible' => 'Maria', 'subject' => 'Design', 'status' => 'Concluído'],
        ['id' => 3, 'name' => 'Ticket 3', 'priority' => 'Baixa', 'responsible' => 'Pedro', 'subject' => 'Marketing', 'status' => 'Pendente'],
        ['id' => 4, 'name' => 'Ticket 4', 'priority' => 'Alta', 'responsible' => 'Ana', 'subject' => 'Desenvolvimento', 'status' => 'Concluído'],
        ['id' => 5, 'name' => 'Ticket 5', 'priority' => 'Média', 'responsible' => 'José', 'subject' => 'Design', 'status' => 'Em andamento'],
    ];

    $filteredTickets = array_filter($tickets, function ($ticket) use ($request) {
        if ($request->priority !== 'Todos' && $ticket['priority'] !== $request->priority) {
            return false;
        }
        if ($request->responsible !== 'Todos' && $ticket['responsible'] !== $request->responsible) {
            return false;
        }
        if ($request->subject !== 'Todos' && $ticket['subject'] !== $request->subject) {
            return false;
        }
        if ($request->status !== 'Todos' && $ticket['status'] !== $request->status) {
            return false;
        }
        if (!empty($request->search) && stripos($ticket['name'], $request->search) === false) {
            return false;
        }
        return true;
    });

    return response()->json(array_values($filteredTickets));

});
