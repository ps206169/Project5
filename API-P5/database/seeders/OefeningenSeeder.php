<?php

namespace Database\Seeders;

use App\Models\oefeningen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oefeningen = [
            ['id' => 1, 'nameNL' => 'Squat', 'nameEN' => 'Squat',
            'instructionNL' => 'Sta in een positie waarbij je knieën op schouderbreedte zijn.
            Daarna zak je langzaam door je knieën totdat je knieën op een lijn staan met je tenen,
            ga dan weer omhoog en herhaal de oefening',
            'instructionEN' => '1. Take a position where your knees have them at shoulder width
            2. Bend your knees slightly.
            3. Push your buttocks back.
            4. then go deep through your knees and make sure your knees do not go past your toes.
            5. Then slowly come back up.
            6. Repeat from the fourth step desired amount is reached.'],
            ['id' => 2, 'nameNL' => 'Push-up', 'nameEN' => 'Push-up',
            'instructionNL' => '1. Ga met je buik op de grond liggen en met de handen op de grond.
            2. Zet je handen tenminste op schouderbreedte neer met de elle bogen licht naar binnen gebogen.
            3. Strek je armen waardoor je lichaam omhoog komt met maximale kracht van je borstspieren en triceps.
            4. Span goed je borstspieren aan als je boven bent.
            5. Laat je daarna weer langzaam terug zakken en houd gedurende de hele oefening je lichaam recht.
            6. Houd de onderste positie een seconde vast zodat je de spanning op de borstspieren voelt.
            7. Herhaal vanaf stap drie totdat de gewenste hoeveelheid push-ups is bereikt.
            ', 'instructionEN' => '1. Lie with your stomach on the floor and hands on the floor.
            2. Place your hands at least shoulder-width apart with the elbows slightly bent inward.
            3. Straighten your arms causing your body to rise with maximum strength from your pecs and triceps.
            4. Tighten your chest muscles when you are at the top.
            5. Then slowly lower yourself back down, keeping your body straight throughout the exercise.
            6. Hold the bottom position for a second so that you feel the tension in the chest muscles.
            7. Repeat from step three until desired amount of push-ups is reached.'],
            ['id' => 3, 'nameNL' => 'Dip', 'nameEN' => 'Dip', 'instructionNL' => '1. Steun met je armen op de handgrepen.
            2. Strek je armen en laat je benen recht of iets achter je je zweven.
            3. Span je buik- en bilspieren aan.
            4. Adem in en buig de armen tot je een hoek van 90 graden maakt bij je ellebooggewricht.
            5. Druk jezelf omhoog en kom terug in de uitgangspositie en adem uit.
            6. Herhaal vanaf stap twee, tot de gewenste hoeveelheid is gehaald.
            ', 'instructionEN' => '1. Support your arms on the handles/handlebars.
            2. Straighten your arms and let your legs float straight or slightly behind you.
            3. Tighten your abs and glutes.
            4. Inhale and bend the arms until you form a 90-degree angle at your elbow joint.
            5. Push yourself up and come back to the starting position and exhale.
            6. Repeat from step two until the desired amount is achieved.'],
            ['id' => 4, 'nameNL' => 'Plank', 'nameEN' => 'Plank', 'instructionNL' => '1. Ga op je buik liggen en plaats je voeten ongeveer 10 centimeter van elkaar.
            2. Plaats je elle bogen onder je schouders zorg dat je bovenarmen gestrekt zijn.
            3. Span je buik- en bilspieren aan en breng je heup omhoog.
            4. Houd je lichaam zo recht mogelijk.
            5. Houd dit vast tot je de gewenste tijd heb gehaald.
            ', 'instructionEN' => '1. Lie on your stomach and place your feet about 10 centimeters apart.
            2. Place your elbows under your shoulders and keep your upper arms straightend.
            3. Tighten your abs and glutes and raise your hip.
            4. Keep your body as straight as possible.
            5. Hold until you reach your desired time.'],
            ['id' => 5, 'nameNL' => 'Paardentrap', 'nameEN' => 'Horse kick', 'instructionNL' => '1. Ga op elle bogen en knieën op de grond liggen.
            2. Zorg dat je met je gezicht naar de grond gericht bent.
            3. Strek dan je rechterbeen naar achteren.( Pas op dat je de beweging niet overdrijft, want dan ga je te veel vanuit je onderrug bewegen.)
            4. Houd je been een paar tellen gestrekt en kom dan weer terug in de oorspronkelijke positie.
            5. Herhaal de beweging vervolgens met links.
            6. Herhaal daarna weer vanaf stap drie tot je je gewenste hoeveelheid bereikt hebt.
            ', 'instructionEN' => ' 1. Lie on the floor on your elbows and knees.
            2. Make sure you are facing the ground.
            3. Then extend your right leg back. (Be careful not to exaggerate the movement, because then you will move too much from your lower back.)
            4. Hold your leg straight for a few seconds, then return to the original position.
            5. Then repeat the movement with the left.
            6. Then repeat from step three again until you have reached your desired amount.'],
            ['id' => 6, 'nameNL' => 'Mountain climber', 'nameEN' => 'Mountain climber',
            'instructionNL' => '1. Plaats je handen en voeten op de grond (push-up positie).
            2. Span je buik- en bilspieren aan. Je rug is hierbij in een neutrale positie.
            3. Haal vervolgens om de beurt één been naar je handen toe.
            4. Herhaal vanaf stap drie tot de gewenste hoeveelheid is bereikt.
            (optioneel) Mocht je er snelheid in willen brengen dan kun je de oefening in een hoger tempo uitvoeren.
            ', 'instructionEN' => '1. Place your hands and feet on the ground (push-up position).
            2. Tighten your abs and glutes. Your back is in a neutral position.
            3. Then take turns bringing one leg towards your hands.
            4. Repeat from step three until desired amount is reached.
            (optional) If you want to speed it up, you can perform the exercise at a higher tempo.'],
            ['id' => 7, 'nameNL' => 'Burpee', 'nameEN' => 'Burpee', 'instructionNL' => 'Burpee
            1. Zet je voeten uit elkaar op schouder breedte.
            2.zet met je lichaamsgewicht wat druk op je hielen en laat je armen langs je lichaam hangen.
            3. Druk je heupen naar achteren, buig je knieën en zak met je lichaam langzaam in een squat.
            4. Plaats je handen op de vloer. Zet je handen zo neer dat ze in een rechte lijn met je voeten zijn. Verleg je gewicht op je handen.
            5. Probeer in een soepele beweging je voeten naar achter te schoppen, terwijl je op de bal van je voet landt. Nu zou je je in een plankpositie moeten bevinden. Het is de bedoeling dat je lichaam nu een rechte lijn vormt van je hoofd tot je hielen.
            6. Spring terug zodat je voeten net langs je handen landen.(Aan de buitenkant van je handen.)
            7. Reik met je handen boven je hoofd en spring met een explosieve sprong de lucht in.
            8. Land op je voeten en laat je meteen weer in een squatpositie afzakken. Hier begint namelijk de herhaling van deze oefening.
            9. Herhaal tot je de hoeveelheid die je als doel gesteld had.
            ', 'instructionEN' => ' 1. Place your feet shoulder width apart.
            2. Put some pressure on your heels with your body weight and let your arms hang by your side.
            3. Press your hips back, bend your knees and slowly lower your body into a squat.
            4. Place your hands on the floor. Place your hands so that they are in a straight line with your feet. Shift your weight onto your hands.
            5. Try to kick your feet back in one smooth motion, landing on the ball of your foot. You should now be in a plank position. Your body should now form a straight line from your head to your heels.
            6. Jump back so that your feet land just past your hands. (On the outside of your hands.)
            7. Reach your hands above your head and jump into the air with an explosive jump.
            8. Land on your feet and immediately lower back into a squat position. This is where the repetition of this exercise begins.
            9. Repeat until you reach your target amount.'],
            ['id' => 8, 'nameNL' => 'Lunge', 'nameEN' => 'Lunge', 'instructionNL' => 'Lunge
            1. Sta rechtop met je benen op heupwijdte uit elkaar. Leg beide handen op je heupen.
            2. Span je buikspieren aan zodat je je rug rechtop houdt.
            3. Doe met één voet een grote stap naar voren. Hoe langer je bent, hoe groter je stap is.
            4. Je achterste voet til je iets op, zodat je teen de vloer nog aanraakt maar je hiel niet meer.
            5. Buig beide knieën tegelijk. Het doel is om beide knieën te laten stoppen in een hoek van 90 graden.
            6. Zorg ervoor dat je voorste knie altijd in lijn blijft met je voet, nooit er overheen.
            7. De knie van je achterste been raakt nagenoeg de vloer.
            8. Blijf een paar seconden in deze houding staan en lift vervolgens jezelf weer op om weer in de beginpositie te komen.
            9.Herhaal de lunge met het andere been.
            10. Herhaal tot je de gewenste hoeveelheid lunges bereikt hebt.
            ', 'instructionEN' => ' 1.Stand upright with your legs hip-width apart. Place both hands on your hips.
            2. Tighten your abs so that you keep your back upright.
            3. Take a big step forward with one foot. The taller you are, the bigger your stride is.
            4. Lift your back foot slightly so that your toe is still touching the floor but not your heel.
            5. Bend both knees at the same time. The goal is to have both knees stop at a 90-degree angle.
            6. Always keep your front knee in line with your foot, never over it.
            7. The knee of your back leg almost touches the floor.
            8. Stay in this position for a few seconds, then lift yourself back up to the starting position.
            9.Repeat the lunge with the other leg.
            10. Repeat until you have reached the desired amount of lunges.'],
            ['id' => 9, 'nameNL' => 'Wall sit', 'nameEN' => 'Wall sit', 'instructionNL' => '1. Zoek een muur op en ga hier met je rug naar toe staan.
            2. Duw je rug tegen de muur, laat jezelf gecontroleerd naar beneden zakken en neem de squat positie aan.
            3. Houd spanning op je bovenbenen en buikspieren en houd je rug recht.
            4. Blijf in deze positie totdat de tijd voorbij is.
            Wall sit
            ', 'instructionEN' => '1. Find a wall and stand with your back to it.
            2. Push your back against the wall, lower yourself in a controlled manner and assume the squat position.
            3. Keep tension on your thighs and abs and keep your back straight.
            4. Stay in this position until the time is up.'],
            ['id' => 10, 'nameNL' => 'Crunch', 'nameEN' => 'Crunch', 'instructionNL' => '1. Ga op je rug liggen en houd je handen op je borst.
            2. Plaats je voeten op de grond voor je met je knieën op 90 graden.
            3.Adem in en til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt.
            4.Laat je hoofd rustig weer terugzakken en adem uit.
            ', 'instructionEN' => '1. Lie on your back and keep your hands on your chest, behind your head or next to your head.
            2. Place your feet on the floor in front of you with your knees at 90 degrees.
            3.Inhale and lift the shoulders off the floor and slowly roll up, keeping the lower back on the floor.
            4. Slowly lower your head back and exhale.'],
        ];

        foreach($oefeningen as $oefening){
            oefeningen::create($oefening);
        }
    }
}
