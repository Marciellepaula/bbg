<?php

public function inserirDados(Request $request)
{
    $dados = new MeuModelo();
    $dados->campo1 = $request->input('campo1');
    $dados->campo2 = $request->input('campo2');
    $dados->save();

    return redirect('/')->with('status', 'Dados inseridos com sucesso!');
}
