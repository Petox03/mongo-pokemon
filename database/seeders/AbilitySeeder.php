<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ability::factory()->create([
            'name' => 'Espesura',
            'effect' => 'Aumenta la potencia de los movimientos de tipo planta del poseedor en un 50% cuando su salud esté igual o por debajo de 1/3 de sus PS máximos.'
        ]);
        Ability::factory()->create([
            'name' => 'Clorofila',
            'effect' => 'Duplica la velocidad del poseedor en clima soleado.'
        ]);
        Ability::factory()->create([
            'name' => 'Mar llamas',
            'effect' => 'Aumenta la potencia de los movimientos de tipo fuego del poseedor en un 50% cuando su salud esté igual o por debajo de 1/3 de sus PS máximos.'
        ]);
        Ability::factory()->create([
            'name' => 'Poder Solar',
            'effect' => 'En clima soleado aumenta el ataque especial del Pokémon poseedor en un 50%, pero a cambio el Pokémon pierde 1/8 de sus PS máximos al final de cada turno.'
        ]);
        Ability::factory()->create([
            'name' => 'Torrente',
            'effect' => 'Aumenta la potencia de los movimientos de tipo agua del poseedor en un 50% cuando su salud esté igual o por debajo de 1/3 de sus PS máximos.'
        ]);
        Ability::factory()->create([
            'name' => 'Cura lluvia',
            'effect' => 'Restaura 1/16 (un 6,25%) de los PS totales del usuario al final de cada turno cuando llueve.'
        ]);
        Ability::factory()->create([
            'name' => 'Ojo compuesto',
            'effect' => 'Aumenta en un 30% la precisión de los movimientos.'
        ]);
        Ability::factory()->create([
            'name' => 'Cromolente',
            'effect' => 'Dobla la potencia de los movimientos que causan daño no muy efectivo contra los tipos del Pokémon oponente.'
        ]);
        Ability::factory()->create([
            'name' => 'Enjambre',
            'effect' => 'Aumenta la potencia de los movimientos de tipo bicho del poseedor en un 50% cuando su salud esté igual o por debajo de 1/3 de sus PS máximos.'
        ]);
        Ability::factory()->create([
            'name' => 'Francotirador',
            'effect' => 'Francotirador aumenta el daño de los golpes críticos haciendo que en vez de *2 de daño causen *3.'
        ]);
        Ability::factory()->create([
            'name' => 'Vista lince',
            'effect' => 'Evita que baje la precisión del poseedor.'
        ]);
        Ability::factory()->create([
            'name' => 'Tumbos',
            'effect' => 'Aumenta la evasión en un 20% cuando el Pokémon poseedor está confuso.'
        ]);
        Ability::factory()->create([
            'name' => 'Sacapecho',
            'effect' => 'Evita que los oponentes bajen la defensa del poseedor.'
        ]);
        Ability::factory()->create([
            'name' => 'Fuga',
            'effect' => 'Permite al poseedor escapar siempre de combates contra Pokémon salvajes.'
        ]);
        Ability::factory()->create([
            'name' => 'Agallas',
            'effect' => 'Aumenta la estadística de ataque del poseedor en un 50% si este está quemado, paralizado, envenenado o dormido.'
        ]);
        Ability::factory()->create([
            'name' => 'Entusiasmo',
            'effect' => 'Aumenta el ataque del poseedor en un 50%, pero reduce en un 20% la precisión de los movimientos de categoría físico.'
        ]);
        Ability::factory()->create([
            'name' => 'Intimidación',
            'effect' => 'Baja un nivel el ataque del oponente al entrar a combatir.'
        ]);
        Ability::factory()->create([
            'name' => 'Mudar',
            'effect' => 'Tiene una probabilidad del 30% de curar los problemas de estado persistentes al final de cada turno.'
        ]);
        Ability::factory()->create([
            'name' => 'Nerviosismo',
            'effect' => 'Impide a los Pokémon oponentes que hagan uso de cualquier baya que lleven equipada.'
        ]);
        Ability::factory()->create([
            'name' => 'Electricidad estática',
            'effect' => 'Todo Pokémon que golpee con un ataque de contacto a un Pokémon con esta habilidad tiene una probabilidad del 30% de resultar paralizado.'
        ]);
        Ability::factory()->create([
            'name' => 'Pararrayos',
            'effect' => 'Causa que todos los ataques eléctricos que afectan a un solo objetivo usados por los oponentes, se dirijan al Pokémon poseedor.'
        ]);
        Ability::factory()->create([
            'name' => 'Velo arena',
            'effect' => 'Disminuye en un 20% la precisión de los movimientos usados contra el poseedor en presencia de tormenta de arena.'
        ]);
        Ability::factory()->create([
            'name' => 'Ímpetu arena',
            'effect' => 'Duplica la velocidad del poseedor en tormenta de arena.'
        ]);
        Ability::factory()->create([
            'name' => 'Punto tóxico',
            'effect' => 'Si un Pokémon con punto tóxico es golpeado con un movimiento de contacto, el atacante tiene una probabilidad del 30% de ser envenenado.'
        ]);
        Ability::factory()->create([
            'name' => 'Rivalidad',
            'effect' => 'Aumenta la potencia de los movimientos en un 25% si el rival es del mismo género, pero la disminuye en un 25% si es del género opuesto. No tiene ningún efecto en caso de que uno de los dos Pokémon no tenga género.'
        ]);
        Ability::factory()->create([
            'name' => 'Potencia bruta',
            'effect' => 'Aumenta en un 30% la potencia de los movimientos que pueden desencadenar un efecto secundario. Sin embargo, anula el efecto secundario al usar dichos movimientos.'
        ]);
        Ability::factory()->create([
            'name' => 'Gran encanto',
            'effect' => 'Si un Pokémon golpea con un movimiento de contacto a otro con esta habilidad y es del género opuesto, tiene una probabilidad del 30% de quedarse enamorado.'
        ]);
        Ability::factory()->create([
            'name' => 'Muro mágico',
            'effect' => 'previene el daño indirecto al poseedor de la habilidad. El daño indirecto incluye el provocado por drenadoras, quemaduras, granizo, púas, envenenamiento, etc.'
        ]);
        Ability::factory()->create([
            'name' => 'Ignorante',
            'effect' => 'ignora los cambios negativos y positivos en las estadísticas de cualquier rival al que se enfrente el poseedor a la hora de calcular el daño.'
        ]);
        Ability::factory()->create([
            'name' => 'Absorbe fuego',
            'effect' => 'hace al poseedor inmune a los movimientos de tipo fuego, y potencia en un 50% sus ataques de tipo fuego al recibir el primer ataque de tipo fuego.'
        ]);
        Ability::factory()->create([
            'name' => 'Sequía',
            'effect' => 'induce clima soleado cuando el Pokémon entra en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Absorbe electricidad',
            'effect' => 'Hace al poseedor inmune a los movimientos de tipo eléctrico, y le hace recuperar hasta un 25% de sus PS máximos cada vez que sea alcanzado por un movimiento de este tipo que cause daño.'
        ]);
        Ability::factory()->create([
            'name' => 'Tenacidad',
            'effect' => 'aumenta el ataque especial del poseedor en dos niveles cuando un oponente reduce alguna de sus estadísticas.'
        ]);
        Ability::factory()->create([
            'name' => 'Cacheo',
            'effect' => 'permite ver el objeto equipado del contrincante.'
        ]);
        Ability::factory()->create([
            'name' => 'Fuerza mental',
            'effect' => 'evita que el poseedor pueda retroceder.'
        ]);
        Ability::factory()->create([
            'name' => 'Allanamiento',
            'effect' => 'permite al Pokémon que la posea realizar sus ataques sin tener en cuenta la presencia de reflejo, pantalla de luz, velo sagrado y/o neblina que el oponente haya usado.'
        ]);
        Ability::factory()->create([
            'name' => 'Efecto espora',
            'effect' => 'tiene una probabilidad del 30% de dormir, paralizar o envenenar a Pokémon que realicen un movimiento de contacto contra el poseedor de la habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Piel seca',
            'effect' => 'Durante el clima soleado, el Pokémon perderá un 12,5% de sus PS en cada turno, mientras que, con clima lluvioso, recuperará la misma cantidad de PS en cada turno.'
        ]);
        Ability::factory()->create([
            'name' => 'Humedad',
            'effect' => 'Humedad impide la ejecución de los movimientos autodestrucción , explosión y cabeza sorpresa a todos los Pokémon presentes en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Polvo escudo',
            'effect' => 'anula los efectos secundarios que pueden provocar los ataques de los oponentes al poseedor de la habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Piel milagro',
            'effect' => 'Reduce a un 50% la precisión de los movimientos de categoría estado dirigidos contra el poseedor de la habilidad. Si la precisión del movimiento ya es del 50% o inferior no se verá modificada.'
        ]);
        Ability::factory()->create([
            'name' => 'Trampa arena',
            'effect' => 'Un Pokémon con la habilidad trampa arena impide que los oponentes huyan del combate o puedan ser cambiados por otro Pokémon, dejándolos atrapados. No afecta a Pokémon de tipo volador o con la habilidad levitación.'
        ]);
        Ability::factory()->create([
            'name' => 'Poder arena',
            'effect' => 'aumenta la potencia de los movimientos de tipo tierra, tipo roca y tipo acero en un 30% cuando hay una tormenta de arena en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Flexibilidad',
            'effect' => 'evita que el poseedor de la habilidad pueda ser paralizado. Un Pokémon paralizado con esta habilidad se curará de la parálisis de inmediato.'
        ]);
        Ability::factory()->create([
            'name' => 'Experto',
            'effect' => 'multiplica la potencia de todos los movimientos del poseedor de potencia 60 o inferior por 1,5.'
        ]);
        Ability::factory()->create([
            'name' => 'Aclimatación',
            'effect' => 'anula todos los efectos del clima sobre el combate, mientras el poseedor de la habilidad esté en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Nado rápido',
            'effect' => 'duplica la velocidad del poseedor de la habilidad en clima lluvioso.'
        ]);
        Ability::factory()->create([
            'name' => 'Espíritu vital',
            'effect' => 'evita que el poseedor pueda dormirse.'
        ]);
        Ability::factory()->create([
            'name' => 'Irascible',
            'effect' => 'Cuando el Pokémon poseedor recibe un golpe crítico, irascible sube su ataque al máximo (+6).'
        ]);
        Ability::factory()->create([
            'name' => 'Justiciero',
            'effect' => 'aumenta en un nivel la estadística de ataque del poseedor al recibir un ataque de tipo siniestro.'
        ]);
        Ability::factory()->create([
            'name' => 'Competitivo',
            'effect' => 'aumenta el ataque del poseedor en dos niveles cuando un oponente reduce alguna de sus estadísticas. Si la reducción es llevada a cabo por movimientos usados por el mismo Pokémon o por un compañero, la habilidad no se activará.'
        ]);
        Ability::factory()->create([
            'name' => 'Absorbe agua',
            'effect' => 'hace al poseedor inmune a movimientos de tipo agua, y recupera un 25% de sus PS máximos,al recibir un movimiento de este tipo.'
        ]);
        Ability::factory()->create([
            'name' => 'Sincronía',
            'effect' => 'Si el poseedor de esta habilidad resulta envenenado, paralizado o quemado por el oponente, este pasará a tener el mismo problema de estado siempre que este no sea impedido por tipos, habilidades o velo sagrado y campo de niebla.'
        ]);
        Ability::factory()->create([
            'name' => 'Indefenso',
            'effect' => 'hace que todos los movimientos usados por o contra el poseedor de la habilidad nunca fallen.'
        ]);
        Ability::factory()->create([
            'name' => 'Impasible',
            'effect' => 'incrementa la velocidad del Pokémon poseedor en un nivel cada vez que este retrocede.            '
        ]);
        Ability::factory()->create([
            'name' => 'Gula',
            'effect' => 'hace que el Pokémon poseedor utilice las bayas equipadas que normalmente se consumen cuando queda un 25% o menos de sus PS máximos cuando le queden un 50% o menos de sus PS máximos.'
        ]);
        Ability::factory()->create([
            'name' => 'Cuerpo puro',
            'effect' => 'evita que bajen las estadísticas a causa de un movimiento del oponente.'
        ]);
        Ability::factory()->create([
            'name' => 'Lodo líquido',
            'effect' => 'hace que los ataques de absorción de PS hieran al rival al usarlos contra el poseedor de la habilidad, de forma que en vez de recuperar los PS quitados al oponente, perderá esa misma cantidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Cabeza roca',
            'effect' => 'evita el daño de retroceso al usar movimientos que los causen.'
        ]);
        Ability::factory()->create([
            'name' => 'Robustez',
            'effect' => 'hace al poseedor inmune a los movimientos que causan un golpe fulminante.'
        ]);
        Ability::factory()->create([
            'name' => 'Cuerpo llama',
            'effect' => 'Si un Pokémon con cuerpo llama es golpeado con un movimiento de contacto, el atacante tiene una probabilidad del 30% de ser quemado.'
        ]);
        Ability::factory()->create([
            'name' => 'Despiste',
            'effect' => 'evita que el poseedor sea afectado por atracción, seducción y gran encanto.'
        ]);
        Ability::factory()->create([
            'name' => 'Ritmo propio',
            'effect' => 'evita que el poseedor pueda quedarse confuso, incluyendo confusión causada por movimientos propios.'
        ]);
        Ability::factory()->create([
            'name' => 'Regeneración',
            'effect' => 'El poseedor de esta habilidad recupera 1/3 de sus PS máximos cuando el Pokémon vuelve a su Poké Ball en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Imán',
            'effect' => 'atrapa a Pokémon oponentes de tipo acero, impidiendo que este huya del combate o sea cambiado por su entrenador hasta que quien posee la habilidad sea cambiado o derrotado.'
        ]);
        Ability::factory()->create([
            'name' => 'Cálculo final',
            'effect' => 'Si el poseedor de la habilidad ataca a un objetivo que ya ha ejecutado un movimiento en ese turno, la potencia del movimiento aumenta en un 30%.'
        ]);
        Ability::factory()->create([
            'name' => 'Madrugar',
            'effect' => 'reduce a la mitad los turnos que el Pokémon está dormido.'
        ]);
        Ability::factory()->create([
            'name' => 'Sebo',
            'effect' => 'Los movimientos de tipo hielo o tipo fuego solo le producirán la mitad del daño normal a un Pokémon con esta habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Hidratación',
            'effect' => 'cura los problemas de estado del poseedor al final de cada turno si hay clima lluvioso.'
        ]);
        Ability::factory()->create([
            'name' => 'Gélido',
            'effect' => 'evita al poseedor el daño provocado por el granizo y hace que recupere el 6,25% de sus PS máximos al final de cada turno.'
        ]);
        Ability::factory()->create([
            'name' => 'Hedor',
            'effect' => 'hace que el oponente tenga una probabilidad del 10% de retroceder cuando reciba un movimiento de daño directo del poseedor de la habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Toque tóxico',
            'effect' => 'hace que los movimientos de contacto del poseedor tengan una probabilidad del 30% de envenenar al objetivo.'
        ]);
        Ability::factory()->create([
            'name' => 'Viscosidad',
            'effect' => 'evita el robo de objetos.'
        ]);
        Ability::factory()->create([
            'name' => 'Caparazón',
            'effect' => 'evita que el poseedor reciba golpes críticos.'
        ]);
        Ability::factory()->create([
            'name' => 'Encadenado',
            'effect' => 'permite al poseedor hacer que los movimientos que golpean al objetivo varias veces en un mismo turno, golpeen siempre el máximo número de veces posible.'
        ]);
        Ability::factory()->create([
            'name' => 'Funda',
            'effect' => 'protege al poseedor de la habilidad del daño ocasionado por tormenta arena y granizo, además hace al poseedor inmune a los movimientos basados en polvos y esporas.'
        ]);
        Ability::factory()->create([
            'name' => 'Cuerpo maldito',
            'effect' => 'Cuerpo maldito tiene una probabilidad del 30% de anular durante tres turnos el uso del movimiento que cause daño directo utilizado contra el poseedor de la habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Levitación',
            'effect' => 'proporciona al Pokémon poseedor inmunidad a todos los ataques de tipo tierra, excepto a ataque arena..'
        ]);
        Ability::factory()->create([
            'name' => 'Armadura frágil',
            'effect' => 'Cuando el Pokémon con esta habilidad es golpeado por movimientos de categoría física, su defensa se reduce un nivel y su velocidad aumenta un nivel.'
        ]);
        Ability::factory()->create([
            'name' => 'Insomnio',
            'effect' => 'evita que el poseedor pueda quedarse dormido.'
        ]);
        Ability::factory()->create([
            'name' => 'Alerta',
            'effect' => 'revela el movimiento más potente del oponente.'
        ]);
        Ability::factory()->create([
            'name' => 'Corte fuerte',
            'effect' => 'evita que los oponentes bajen el ataque del poseedor.'
        ]);
        Ability::factory()->create([
            'name' => 'Insonorizar',
            'effect' => 'hace inmune al Pokémon ante movimientos que basan su efecto en el sonido.'
        ]);
        Ability::factory()->create([
            'name' => 'Detonación',
            'effect' => 'daña al oponente restando un 25% de sus puntos de salud máximos si el Pokémon poseedor es debilitado por un ataque que haga contacto. Esta habilidad no funcionará si el rival tiene la habilidad humedad.'
        ]);
        Ability::factory()->create([
            'name' => 'Cosecha',
            'effect' => 'El Pokémon que posea cosecha tendrá al final de cada turno una probabilidad del 50% de recuperar una baya equipada que haya usado en combate. Si el clima es soleado la habilidad siempre se activará.'
        ]);
        Ability::factory()->create([
            'name' => 'Armadura batalla',
            'effect' => 'batalla impide al poseedor recibir golpes críticos.'
        ]);
        Ability::factory()->create([
            'name' => 'Audaz',
            'effect' => 'incrementa en un 20% la potencia de los movimientos que dañan al usuario.'
        ]);
        Ability::factory()->create([
            'name' => 'Liviano',
            'effect' => 'duplica la velocidad cuando el poseedor de la habilidad pierde o usa un objeto equipado.'
        ]);
        Ability::factory()->create([
            'name' => 'Puño férreo',
            'effect' => 'aumenta en un 20% la potencia de los movimientos basados en puños.'
        ]);
        Ability::factory()->create([
            'name' => 'Cura natural',
            'effect' => 'cura los problemas de estado del poseedor de la habilidad al cambiar de Pokémon o al finalizar un combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Dicha',
            'effect' => 'duplica la probabilidad de que se den efectos secundarios al utilizar distintos movimientos.'
        ]);
        Ability::factory()->create([
            'name' => 'Alma cura',
            'effect' => 'El poseedor de esta habilidad tiene una probabilidad del 30% de curar los problemas de estado de un compañero Pokémon adyacente en combates dobles o triples.'
        ]);
        Ability::factory()->create([
            'name' => 'Defensa hoja',
            'effect' => 'previene problemas de estado persistentes con clima soleado.'
        ]);
        Ability::factory()->create([
            'name' => 'Intrépido',
            'effect' => 'permite al poseedor golpear con movimientos de tipo normal y lucha a Pokémon de tipo fantasma.'
        ]);
        Ability::factory()->create([
            'name' => 'Velo agua',
            'effect' => 'evita que el poseedor pueda ser quemado.'
        ]);
        Ability::factory()->create([
            'name' => 'Iluminación',
            'effect' => 'no tiene ningún efecto en combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Filtro',
            'effect' => 'reduce en 1/4 el daño recibido de los movimientos supereficaces usados contra el Pokémon poseedor de la habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Rompemoldes',
            'effect' => 'ignora los efectos de habilidades del oponente que impidan algún daño o efecto de los movimientos del poseedor de esta habilidad.'
        ]);
        Ability::factory()->create([
            'name' => 'Autoestima',
            'effect' => 'sube el ataque del poseedor un nivel al debilitar a un Pokémon mediante daño directo.'
        ]);
        Ability::factory()->create([
            'name' => 'Impostor',
            'effect' => 'El Pokémon se transforma automáticamente en el Pokémon rival al salir al combate.'
        ]);
        Ability::factory()->create([
            'name' => 'Adaptable',
            'effect' => 'hace que aumente la bonificación de STAB de 1,5 a 2.'
        ]);
        Ability::factory()->create([
            'name' => 'Anticipación',
            'effect' => 'Cuando el Pokémon poseedor entra en combate permite detectar si el Pokémon rival tiene ataques muy efectivos, ataques de KO directo.'
        ]);
        Ability::factory()->create([
            'name' => 'Pies rápidos',
            'effect' => 'aumenta la velocidad del Pokémon que la posea en un 50% si el Pokémon sufre algún problema de estado.'
        ]);
        Ability::factory()->create([
            'name' => 'Calco',
            'effect' => 'copia la habilidad del oponente.'
        ]);
        Ability::factory()->create([
            'name' => 'Descarga',
            'effect' => 'aumenta el ataque o ataque especial del poseedor dependiendo de si el oponente tiene más o menos defensa o defensa especial en ese momento.'
        ]);
        Ability::factory()->create([
            'name' => 'Presión',
            'effect' => 'hace que se consuma un PP extra de los movimientos dirigidos al Pokémon poseedor de esta habilidad, de forma que cada vez que el adversario use un movimiento, este gastará 2 PP del movimiento en vez de 1.'
        ]);
        Ability::factory()->create([
            'name' => 'Inmunidad',
            'effect' => 'impide que el Pokémon poseedor sea envenenado.'
        ]);
        Ability::factory()->create([
            'name' => 'Manto níveo',
            'effect' => 'disminuye en un 20% la precisión de los movimientos usados contra el poseedor en presencia de granizo. También hace al poseedor inmune a recibir daño del granizo.'
        ]);
        Ability::factory()->create([
            'name' => 'Multiescamas',
            'effect' => 'Cuando el Pokémon tiene sus PS al máximo, esta habilidad reduce el daño recibido del ataque rival a la mitad. Sin embargo, no reduce el daño de movimientos que causan un daño fijo.'
        ]);
    }
}
