<?php

namespace Database\Seeders;

use App\Models\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *     
     * @return void
     */
    public function run()
    {
        $description = [
            ['id' => 1, 'description' => 'Een squat voert men uit door rechtop te staan met de voeten op schouderbreedte, of iets smaller of breder, naast elkaar, waarbij de voeten ongeveer 30 graden naar buiten wijzen.' , 'languageId' => 2],
            ['id' => 2, 'description' => 'De oefening gebruikt alleen het eigen lichaam als weerstand. Met handen en voeten op de grond, in opgerichte positie, laat men zich zakken tot de borst even de grond raakt , waarna men zichzelf weer omhoog "drukt".' , 'languageId' => 2],
            ['id' => 3, 'description' => 'Een dip is een krachtoefening voor het bovenlichaam. Smalle dips op schouderbreedte trainen voornamelijk de triceps, met als belangrijkste synergisten de voorste deltaspieren, de borstspieren en de ruitvormige spieren van de rug.' , 'languageId' => 2],
            ['id' => 4, 'description' => 'Planking of planken is een statische fitnessoefening om de rompstabiliteit te trainen. Hierbij gebruikt men de armen om het lichaam gestrekt van de grond af te houden, met de armen langs het lichaam steunend op de grond.' , 'languageId' => 2],
            ['id' => 5, 'description' => 'Ga op ellebogen en knieën op de grond liggen, met je gezicht naar de grond. Strek dan je rechterbeen naar achteren. Pas op dat je de beweging niet overdrijft, want dan ga je te veel vanuit je onderrug bewegen. Deze oefening moet je voelen in je billen. Houd je been een paar tellen gestrekt en kom dan weer terug in de oorspronkelijke positie. Herhaal de beweging vervolgens met links.' , 'languageId' => 2],
            ['id' => 6, 'description' => 'Plaats je handen en voeten op de grond (push-up positie). Span je buik- en bilspieren aan. Je rug is hierbij in een neutrale positie. Haal vervolgens om de beurt één been naar je handen toe. Mocht je er snelheid in willen brengen dan kun je de oefening in een hoger tempo uitvoeren.' , 'languageId' => 2],
            ['id' => 7, 'description' => 'De burpee, een squat-stoot met een extra stand tussen herhalingen, is een volledige lichaamsoefening die wordt gebruikt bij krachttraining. De beweging zelf is in de eerste plaats een anaërobe oefening, maar kan, wanneer ze achtereenvolgens over een langere periode worden uitgevoerd, worden gebruikt als een aerobe oefening.' , 'languageId' => 2],
            ['id' => 8, 'description' => 'Een lunge kan verwijzen naar elke positie van het menselijk lichaam waarbij één been naar voren is gepositioneerd met de knie gebogen en de voet plat op de grond, terwijl het andere been zich achter bevindt.' , 'languageId' => 2],
            ['id' => 9, 'description' => 'Een wall sit is een oefening om de quadricepsspieren te versterken. Een vergelijkbare fysieke activiteit staat bekend als de jetliner-positie. De oefening wordt gekenmerkt door de twee rechte hoeken die door het lichaam worden gevormd, één op de heupen en één op de knieën. De persoon die aan de muur zit, plaatst zijn rug tegen een muur met de voeten op schouderbreedte uit elkaar en een klein eindje van de muur af. Dan, met hun rug tegen de muur, laten ze hun heupen zakken totdat hun knieën een rechte hoek vormen.' , 'languageId' => 2],   
            ['id' => 10, 'description' => 'Een crunch begint met het gaan liggen op de vloer met de knieën gebogen. De beweging begint met het krullen van de schouders naar het bekken. De handen kunnen achter of naast de nek gehouden worden, of gekruist over de borst. Schade kan worden veroorzaakt door met de handen tegen het hoofd of de nek te duwen.' , 'languageId' => 2],
            ['id' => 11, 'description' => 'A squat is performed by standing upright with feet shoulder-width apart, or slightly narrower or wider, side by side, with feet pointing outward about 30 degrees.' , 'languageId' => 1],
            ['id' => 12, 'description' => 'The push-up is a common calisthenics exercise beginning from the prone position. By raising and lowering the body using the arms' , 'languageId' => 1],
            ['id' => 13, 'description' => 'A dip is an upper body strength exercise. Narrow shoulder-width dips primarily train the triceps, with the main synergists being the anterior deltoids, the pectorals, and the diamond-shaped muscles of the back.' , 'languageId' => 1],
            ['id' => 14, 'description' => 'Planking is a static fitness exercise to train core stability. The arms are used to keep the body stretched out from the ground, with the arms resting on the ground alongside the body.' , 'languageId' => 1],
            ['id' => 15, 'description' => 'Lie on your elbows and knees on the floor, facing the floor. Then stretch your right leg back. Be careful not to overdo the movement, because then you will move too much from your lower back. You should feel this exercise in your buttocks. Hold your leg straight for a few seconds, then return to the original position. Then repeat the movement with the left.' , 'languageId' => 1],
            ['id' => 16, 'description' => 'Place your hands and feet on the floor (push-up position). Tighten your abs and glutes. Your back is in a neutral position. Then take turns bringing one leg towards your hands. If you want to speed it up, you can perform the exercise at a higher pace.' , 'languageId' => 1],
            ['id' => 17, 'description' => 'The burpee, a squat punch with an extra stance between reps, is a full-body exercise used in strength training. The movement itself is primarily an anaerobic exercise, but when performed sequentially over an extended period of time, it can be used as an aerobic exercise.' , 'languageId' => 1],
            ['id' => 18, 'description' => 'A lunge can refer to any position of the human body where one leg is positioned forward with the knee bent and the foot flat on the floor, while the other leg is behind.' , 'languageId' => 1],
            ['id' => 19, 'description' => 'A wall sit is an exercise done to strengthen the quadriceps muscles. A similar physical activity is known as the jetliner position. The exercise is characterized by the two right angles formed by the body, one at the hips and one at the knees. The person wall sitting places their back against a wall with their feet shoulder-width apart and a little ways out from the wall. Then, keeping their back against the wall, they lower their hips until their knees form right angles.' , 'languageId' => 1],
            ['id' => 20, 'description' => 'A crunch begins by lying on the floor with the knees bent. The movement begins by curling the shoulders toward the pelvis. The hands can be held behind or next to the neck, or crossed over the chest. Damage can be caused by pushing against the head or neck with the hands.' , 'languageId' => 1],
        ];
        

        foreach($description as $description){
            Description::create($description);
        }
    }
}
