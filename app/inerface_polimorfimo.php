<?php


interface GatewayDePagamento
{
    public function processPayment(float $valor);
}

class PayPal implements GatewayDePagamento
{
    public function processPayment(float $valor)
    {
        // Lógica para processar o pagamento usando PayPal
        echo "Pagamento processado via PayPal: R$ {$valor}\n";
    }
}

class Stripe implements GatewayDePagamento
{
    public function processPayment(float $valor)
    {
        // Lógica para processar o pagamento usando Stripe
        echo "Pagamento processado via Stripe: R$ {$valor}\n";
    }
}

class PagSeguro implements GatewayDePagamento
{
    public function processPayment(float $valor)
    {
        // Lógica para processar o pagamento usando PagSeguro
        echo "Pagamento processado via PagSeguro: R$ {$valor}\n";
    }
}

// Criando objetos das classes PayPal, Stripe e PagSeguro
$paypal = new PayPal();
$stripe = new Stripe();
$pagseguro = new PagSeguro();

// Processando um pagamento usando PayPal
$paypal->processPayment(100);

// Processando um pagamento usando Stripe
$stripe->processPayment(50);

// Processando um pagamento usando PagSeguro
$pagseguro->processPayment(200);
