<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medicine = [
            [
                'name' => 'Ibuprofeno',
                'description' => 'Analgésico, antipirético y antiinflamatorio no esteroideo.',
                'presentation' => 'Tabletas de 400 mg',
                'dosage' => 'Tomar 1 tableta cada 8 horas después de las comidas.'
            ],
            [
                'name' => 'Amoxicilina',
                'description' => 'Antibiótico de amplio espectro para el tratamiento de infecciones bacterianas.',
                'presentation' => 'Cápsulas de 500 mg',
                'dosage' => 'Tomar 1 cápsula cada 12 horas durante 7 a 10 días, según prescripción médica.'
            ],
            [
                'name' => 'Loratadina',
                'description' => 'Antihistamínico utilizado para aliviar los síntomas de alergias.',
                'presentation' => 'Tabletas de 10 mg',
                'dosage' => 'Tomar 1 tableta una vez al día, preferiblemente por la noche.'
            ],
            [
                'name' => 'Omeprazol',
                'description' => 'Inhibidor de la bomba de protones utilizado para reducir la producción de ácido estomacal.',
                'presentation' => 'Cápsulas de liberación retardada de 20 mg',
                'dosage' => 'Tomar 1 cápsula antes del desayuno todos los días durante el tratamiento.'
            ],
            [
                'name' => 'Salbutamol',
                'description' => 'Broncodilatador utilizado para aliviar el broncoespasmo en condiciones como el asma.',
                'presentation' => 'Inhalador de 100 mcg por inhalación',
                'dosage' => 'Inhalar 1 o 2 inhalaciones según sea necesario para aliviar los síntomas.'
            ],
            [
                'name' => 'Metformina',
                'description' => 'Antidiabético oral utilizado para el tratamiento de la diabetes mellitus tipo 2.',
                'presentation' => 'Tabletas de 850 mg',
                'dosage' => 'Tomar 1 tableta dos veces al día con las comidas principales.'
            ],
            [
                'name' => 'Diazepam',
                'description' => 'Ansiolítico y anticonvulsivante utilizado para el tratamiento de la ansiedad y convulsiones.',
                'presentation' => 'Tabletas de 5 mg',
                'dosage' => 'Tomar 1 tableta hasta tres veces al día según necesidad.'
            ],
            [
                'name' => 'Atorvastatina',
                'description' => 'Estatina utilizada para reducir los niveles elevados de colesterol y triglicéridos en sangre.',
                'presentation' => 'Tabletas de 20 mg',
                'dosage' => 'Tomar 1 tableta por la noche, sin importar la comida.'
            ],
            [
                'name' => 'Levotiroxina',
                'description' => 'Hormona tiroidea sintética utilizada para el tratamiento del hipotiroidismo.',
                'presentation' => 'Tabletas de 50 mcg',
                'dosage' => 'Tomar 1 tableta en ayunas al menos 30 minutos antes del desayuno.'
            ],
            [
                'name' => 'Warfarina',
                'description' => 'Anticoagulante oral utilizado para prevenir la formación de coágulos sanguíneos.',
                'presentation' => 'Tabletas de 5 mg',
                'dosage' => 'Tomar la dosis prescrita por el médico, generalmente una vez al día.'
            ],
            [
                'name' => 'Furosemida',
                'description' => 'Diurético de asa utilizado para tratar la retención de líquidos y la hipertensión.',
                'presentation' => 'Tabletas de 40 mg',
                'dosage' => 'Tomar 1 a 2 tabletas una o dos veces al día según indicación médica.'
            ],
            [
                'name' => 'Digoxina',
                'description' => 'Glicosido cardíaco utilizado para tratar la insuficiencia cardíaca y ciertos trastornos del ritmo cardíaco.',
                'presentation' => 'Tabletas de 0.25 mg',
                'dosage' => 'Tomar la dosis prescrita por el médico, generalmente una vez al día.'
            ],
            [
                'name' => 'Clonazepam',
                'description' => 'Benzodiazepina utilizada como anticonvulsivante y para el tratamiento de trastornos de ansiedad.',
                'presentation' => 'Tabletas de 2 mg',
                'dosage' => 'Tomar 1 tableta dos veces al día según la indicación médica.'
            ],
            [
                'name' => 'Metoprolol',
                'description' => 'Betabloqueante utilizado para tratar la hipertensión y la angina de pecho.',
                'presentation' => 'Tabletas de liberación prolongada de 50 mg',
                'dosage' => 'Tomar 1 tableta al día, preferiblemente por la mañana.'
            ],
            [
                'name' => 'Cetirizina',
                'description' => 'Antihistamínico utilizado para el alivio de los síntomas de las alergias estacionales.',
                'presentation' => 'Tabletas de 10 mg',
                'dosage' => 'Tomar 1 tableta una vez al día, preferiblemente por la noche.'
            ]
        ];
    }
}
