<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormularySeeder extends Seeder
{
    /**
     * Popula o formulário de perfil investidor: form, perguntas, respostas,
     * perfis de investidor e as faixas de pontuação usadas para classificar o teste.
     */
    public function run(): void
    {
        if (DB::table('forms')->where('id', 1)->exists()) {
            return;
        }

        DB::table('forms')->insert([
            'id' => 1,
            'form_name' => 'Perfil Investidor',
            'obs' => 'Questionário usado para classificar o usuário como conservador, moderado ou agressivo.',
        ]);

        DB::table('investors')->insert([
            ['id' => 1, 'profile' => 'Conservador', 'description' => 'Prioriza a segurança do capital e aceita retornos menores em troca de baixo risco.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'profile' => 'Moderado', 'description' => 'Busca equilíbrio entre segurança e rentabilidade, tolerando algum risco.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'profile' => 'Agressivo', 'description' => 'Prioriza a rentabilidade e tolera oscilações e riscos maiores para buscar retornos mais altos.', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Soma possível: 6 perguntas x (1 a 3 pontos) = 6 a 18 pontos.
        DB::table('rating')->insert([
            ['id' => 'conservador', 'inferior_limit' => 6, 'upper_limit' => 9],
            ['id' => 'moderado', 'inferior_limit' => 10, 'upper_limit' => 14],
            ['id' => 'agressivo', 'inferior_limit' => 15, 'upper_limit' => 18],
        ]);

        $questions = [
            [
                'text' => 'Qual é o seu principal objetivo ao investir?',
                'answers' => [
                    ['Preservar meu patrimônio, mesmo que o retorno seja baixo', 1],
                    ['Equilibrar segurança e rentabilidade', 2],
                    ['Maximizar meus ganhos, mesmo assumindo mais riscos', 3],
                ],
            ],
            [
                'text' => 'Por quanto tempo pretende manter seu dinheiro investido?',
                'answers' => [
                    ['Menos de 1 ano', 1],
                    ['De 1 a 3 anos', 2],
                    ['Mais de 3 anos', 3],
                ],
            ],
            [
                'text' => 'Como você reagiria se seus investimentos caíssem 20% em um mês?',
                'answers' => [
                    ['Venderia tudo imediatamente para evitar mais perdas', 1],
                    ['Ficaria preocupado(a), mas esperaria a recuperação', 2],
                    ['Veria como uma oportunidade para investir mais', 3],
                ],
            ],
            [
                'text' => 'Qual é a sua experiência com investimentos?',
                'answers' => [
                    ['Nenhuma, sou iniciante', 1],
                    ['Já invisto em renda fixa', 2],
                    ['Já invisto em ações ou outros ativos de risco', 3],
                ],
            ],
            [
                'text' => 'Que porcentagem da sua renda mensal pretende investir?',
                'answers' => [
                    ['Menos de 10%', 1],
                    ['Entre 10% e 30%', 2],
                    ['Mais de 30%', 3],
                ],
            ],
            [
                'text' => 'Se pudesse escolher agora, qual investimento prefere?',
                'answers' => [
                    ['Poupança ou Tesouro Selic (baixo risco)', 1],
                    ['CDB, LCI ou LCA (risco moderado)', 2],
                    ['Ações, fundos imobiliários ou criptomoedas (alto risco)', 3],
                ],
            ],
        ];

        $letters = ['A', 'B', 'C'];

        foreach ($questions as $index => $question) {
            $questionNumber = $index + 1;

            $questionId = DB::table('questions')->insertGetId([
                'number_question' => $questionNumber,
                'text_question' => $question['text'],
                'form_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($question['answers'] as $answerIndex => $answer) {
                [$text, $rating] = $answer;

                DB::table('answers')->insert([
                    'text_answer' => $text,
                    'letter' => $letters[$answerIndex],
                    'rating' => $rating,
                    'question_id' => $questionId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
