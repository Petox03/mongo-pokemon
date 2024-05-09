<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Genre;
use App\Models\Type;
use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MongoDB\Laravel\Eloquent\Model;


class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pokemon::create([
            'name' => 'Venasaur',
            'sprite' => 'https://images.wikidexcdn.net/mwuploads/wikidex/b/be/latest/20160309230456/Venusaur.png',
            'type_ids' => Type::whereIn('name', ['Planta', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Espesura', 'Clorofila'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Charizard',
            'sprite' => 'https://images.wikidexcdn.net/mwuploads/wikidex/9/95/latest/20160817212623/Charizard.png',
            'type_ids' => Type::whereIn('name', ['Fuego', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Mar llamas', 'Poder Solar'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Blastoise',
            'sprite' => 'https://images.wikidexcdn.net/mwuploads/wikidex/4/41/latest/20200411222955/Blastoise.png',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Torrente', 'Cura lluvia'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Butterfree',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/9/96/Butterfree.png/revision/latest?cb=20160703192952',
            'type_ids' => Type::whereIn('name', ['Bicho', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Ojo compuesto', 'Cromolente'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Beedrill',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/0d/Beedrill.png/revision/latest?cb=20141214194600',
            'type_ids' => Type::whereIn('name', ['Bicho', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Enjambre', 'Francotirador'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Pidgeot',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/a/a9/Pidgeot.png/revision/latest?cb=20141214190416',
            'type_ids' => Type::whereIn('name', ['Normal', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Vista lince', 'Tumbos', 'Sacapecho'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Raticate',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d6/Raticate.png/revision/latest?cb=20080723091809',
            'type_ids' => Type::whereIn('name', ['Normal',])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuga', 'Agallas', 'Entusiasmo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Fearow',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/4/41/Fearow.png/revision/latest?cb=20170617014432',
            'type_ids' => Type::whereIn('name', ['Normal', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Vista lince', 'Francotirador'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Arbok',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/4/4d/Arbok.png/revision/latest?cb=20170615172348',
            'type_ids' => Type::whereIn('name', ['Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Intimidación', 'Mudar', 'Nerviosismo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Pikachu',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/7/77/Pikachu.png/revision/latest?cb=20150621181250',
            'type_ids' => Type::whereIn('name', ['Eléctrico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Electricidad estática', 'Pararrayos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Raichu',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/3/34/Raichu.png/revision/latest?cb=20160815220038',
            'type_ids' => Type::whereIn('name', ['Eléctrico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Electricidad estática', 'Pararrayos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Sandslash',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/1/13/Sandslash.png/revision/latest?cb=20140809022452',
            'type_ids' => Type::whereIn('name', ['Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Velo arena', 'Ímpetu arena'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Nidoqueen',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/4/43/Nidoqueen.png/revision/latest?cb=20220608121708',
            'type_ids' => Type::whereIn('name', ['Veneno', 'Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Punto tóxico', 'Rivalidad', 'Potencia Bruta'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Nidoking',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/7/76/Nidoking.png/revision/latest?cb=20220608122421',
            'type_ids' => Type::whereIn('name', ['Veneno', 'Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Punto tóxico', 'Rivalidad', 'Potencia Bruta'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Clefable',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d5/Clefable.png/revision/latest?cb=20170615204722',
            'type_ids' => Type::whereIn('name', ['Hada'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Gran encanto', 'Muro mágico', 'Ignorante'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Ninetales',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/9/98/Ninetales.png/revision/latest?cb=20220528160446',
            'type_ids' => Type::whereIn('name', ['Fuego',])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe fuego', 'Sequía'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Wigglytuff',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/f/f1/Wigglytuff.png/revision/latest?cb=20220609144747',
            'type_ids' => Type::whereIn('name', ['Normal', 'Hada'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Gran encanto', 'Tenacidad', 'Cacheo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Golbat',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/2/2c/Golbat.png/revision/latest?cb=20170617042709',
            'type_ids' => Type::whereIn('name', ['Veneno', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuerza mental', 'Allanamiento'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Vileplume',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/3/32/Vileplume.png/revision/latest?cb=20080909115204',
            'type_ids' => Type::whereIn('name', ['Planta', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Clorofila', 'Efecto espora'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Parasect',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/6/62/Parasect.png/revision/latest?cb=20080909113938',
            'type_ids' => Type::whereIn('name', ['Bicho', 'Planta'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Efecto espora', 'Piel seca', 'Humedad'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Venomoth',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/c/c2/Venomoth.png/revision/latest?cb=20080909115136',
            'type_ids' => Type::whereIn('name', ['Bicho', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Polvo escudo', 'Cromolente', 'Piel milagro'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Dugtrio',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/8/8b/Dugtrio.png/revision/latest?cb=20220605160454',
            'type_ids' => Type::whereIn('name', ['Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Velo arena', 'Trampa arena', 'Poder arena'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Persian',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/b/b3/Persian.png/revision/latest?cb=20080909113950',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Flexibilidad', 'Experto', 'Nerviosismo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Golduck',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/c/cf/Golduck.png/revision/latest?cb=20080909112056',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Aclimatación', 'Humedad', 'Nado rápido'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Primeape',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/e/e0/Primeape.png/revision/latest?cb=20080909114651',
            'type_ids' => Type::whereIn('name', ['Lucha'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Espíritu vital', 'Irascible', 'Competitivo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Arcanine',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/5/50/Arcanine.png/revision/latest?cb=20150621185018',
            'type_ids' => Type::whereIn('name', ['Fuego'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Intimidación', 'Absorbe fuego', 'Justiciero'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Poliwrath',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/8/85/Poliwrath.png/revision/latest?cb=20100121081452',
            'type_ids' => Type::whereIn('name', ['Agua', 'Lucha'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe agua', 'Humedad', 'Nado rápido'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Alakazam',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/f/f5/Alakazam.png/revision/latest?cb=20170615171153',
            'type_ids' => Type::whereIn('name', ['Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuerza mental', 'Sincronía', 'Muro mágico'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Machamp',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/b/bf/Machamp.png/revision/latest?cb=20220605162112',
            'type_ids' => Type::whereIn('name', ['Lucha'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Agallas', 'Indefenso', 'Impasible'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Victreebel',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/5/55/Victreebel.png/revision/latest?cb=20080909115156',
            'type_ids' => Type::whereIn('name', ['Planta', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Clorofila', 'Gula'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Tentacruel',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/7/78/Tentacruel.png/revision/latest?cb=20080909115045',
            'type_ids' => Type::whereIn('name', ['Agua', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cuerpo puro', 'Lodo líquido', 'Cura lluvia'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Golem',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/c/ce/Golem.png/revision/latest?cb=20161018163156',
            'type_ids' => Type::whereIn('name', ['Roca', 'Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cabeza roca', 'Robustez', 'Velo arena'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Rapidash',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/01/Rapidash.png/revision/latest?cb=20220609180142',
            'type_ids' => Type::whereIn('name', ['Fuego'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuga', 'Absorbe fuego', 'Cuerpo llama'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Slowbro',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/e/e1/Slowbro.png/revision/latest?cb=20220608141059',
            'type_ids' => Type::whereIn('name', ['Agua', 'Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Despiste', 'Ritmo propio', 'Regeneración'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Magneton',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d1/Magneton.png/revision/latest?cb=20080715114639',
            'type_ids' => Type::whereIn('name', ['Eléctrico', 'Acero'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Imán', 'Robustez', 'Cálculo final'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => "Farfetch'd",
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/b/b5/Farfetch%27d.png/revision/latest?cb=20170617014300',
            'type_ids' => Type::whereIn('name', ['Normal', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Vista lince', 'Fuerza mental', 'Competitivo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Dodrio',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/1/1a/Dodrio.png/revision/latest?cb=20080908160508',
            'type_ids' => Type::whereIn('name', ['Normal', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuga', 'Madrugar', 'Tumbos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Dewgong',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/1/1d/Dewgong.png/revision/latest?cb=20170617010118',
            'type_ids' => Type::whereIn('name', ['Agua', 'Hielo'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Sebo', 'Hidratación', 'Gélido'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Gengar',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/f/f8/Gengar.png/revision/latest?cb=20220609203035',
            'type_ids' => Type::whereIn('name', ['Fantasma', 'Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Levitación', 'Cuerpo maldito'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Onix',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/b/b2/Onix.png/revision/latest?cb=20220605191615',
            'type_ids' => Type::whereIn('name', ['Roca', 'Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cabeza roca', 'Robustez', 'Armadura frágil'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Hypno',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/0e/Hypno.png/revision/latest?cb=20080909112306',
            'type_ids' => Type::whereIn('name', ['Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Insomnio', 'Alerta', 'Fuerza mental'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Kingler',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/a/a4/Kingler.png/revision/latest?cb=20220605192159',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Corte fuerte', 'Caparazón', 'Potencia bruta'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Electrode',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/5/52/Electrode.png/revision/latest?cb=20090916181157',
            'type_ids' => Type::whereIn('name', ['Eléctico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Insonorizar', 'Electricidad estática', 'Detonación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Exeggutor',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/e/e0/Exeggutor.png/revision/latest?cb=20220605192545',
            'type_ids' => Type::whereIn('name', ['Planta', 'Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Clorofila', 'Cosecha'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Marowak',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/c/c4/Marowak.png/revision/latest?cb=20161104013901',
            'type_ids' => Type::whereIn('name', ['Tierra'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cabeza roca', 'Pararrayos', 'Armadura batalla'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Hitmonlee',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/0f/Hitmonlee.png/revision/latest?cb=20220605205631',
            'type_ids' => Type::whereIn('name', ['Lucha'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Flexibilidad', 'Audaz', 'Liviano'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Hitmonchan',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/7/73/Hitmonchan.png/revision/latest?cb=20080909112211',
            'type_ids' => Type::whereIn('name', ['Lucha'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Vista lince', 'Puño ferreo', 'Fuerza mental'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Lickitung',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/a/ab/Lickitung.png/revision/latest?cb=20220605210254',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Despiste', 'Ritmo propio', 'Aclimatación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Weezing',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/8/88/Weezing.png/revision/latest?cb=20080909115313',
            'type_ids' => Type::whereIn('name', ['Veneno'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Levitación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Rhydon',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/01/Rhydon.png/revision/latest?cb=20220606073222',
            'type_ids' => Type::whereIn('name', ['Tierra', 'Roca'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Pararrayos', 'Cabeza Roca', 'Audaz'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Chansey',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/2/2b/Chansey.png/revision/latest?cb=20170615202929',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cura natural', 'Dicha', 'Alma cura'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Tangela',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/03/Tangela.png/revision/latest?cb=20080909115011',
            'type_ids' => Type::whereIn('name', ['Planta'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Clorofila', 'Defensa hoja', 'Regeneración'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Kangaskhan',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/3/39/Kangaskhan.png/revision/latest?cb=20080909112541',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Madrugar', 'Intrépido', 'Fuerza mental'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Seadra',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/2/2d/Seadra.png/revision/latest?cb=20080909114803',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Punto tóxico', 'Francotirador', 'Humedad'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Seaking',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/8/8b/Seaking.png/revision/latest?cb=20080909114857',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Nado rápido', 'Velo agua', 'Pararrayos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Starmie',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/5/56/Starmie.png/revision/latest?cb=20220609214745',
            'type_ids' => Type::whereIn('name', ['Agua', 'Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cura natural', 'Iluminación', 'Cálculo final'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Mr. Mime',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/4/4f/Mr._Mime.png/revision/latest?cb=20220609215647',
            'type_ids' => Type::whereIn('name', ['Psíquico', 'Hada'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Insonorizar', 'Filtro', 'Experto'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Scyther',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/c/c2/Scyther.png/revision/latest?cb=20080909114754',
            'type_ids' => Type::whereIn('name', ['Bicho', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Enjambre', 'Experto', 'Impasible'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Jynx',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/e/e2/Jynx.png/revision/latest?cb=20220610073650',
            'type_ids' => Type::whereIn('name', ['Hielo', 'Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Despiste', 'Alerta', 'Piel seca'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Electabuzz',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/3/3a/Electabuzz.png/revision/latest?cb=20080908162703',
            'type_ids' => Type::whereIn('name', ['Eléctrico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Electricidad estática', 'Espíritu vital'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Magmar',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/4/46/Magmar.png/revision/latest?cb=20080909112730',
            'type_ids' => Type::whereIn('name', ['Fuego'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cuerpo llama', 'Espíritu vital'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Pinsir',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/b/b4/Pinsir.png/revision/latest?cb=20080909114348',
            'type_ids' => Type::whereIn('name', ['Bicho'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Corte fuerte', 'Rompemoldes', 'Autoestima'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Tauros',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/9/98/Tauros.png/revision/latest?cb=20220606101905',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Intimidación', 'Irascible', 'Potencia bruta'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Gyarados',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d7/Gyarados.png/revision/latest?cb=20150621185114',
            'type_ids' => Type::whereIn('name', ['Agua', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Intimidación', 'Autoestima'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Lapras',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/3/30/Lapras.png/revision/latest?cb=20220608142446',
            'type_ids' => Type::whereIn('name', ['Agua', 'Hielo'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe agua', 'Caparazón', 'Hidratación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Ditto',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/03/Ditto.png/revision/latest?cb=20170617010358',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Flexibilidad', 'Impostor'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Eevee',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/f/f2/Eevee.png/revision/latest?cb=20150621181400',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuga', 'Adaptable', 'Anticipación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Vaporeon',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/f/fc/Vaporeon.png/revision/latest?cb=20220527104419',
            'type_ids' => Type::whereIn('name', ['Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe agua', 'Hidratación'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Jolteon',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/1/1e/Jolteon.png/revision/latest?cb=20220527102859',
            'type_ids' => Type::whereIn('name', ['Eléctrico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe electricidad', 'Pies rápidos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Flareon',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/1/17/Flareon.png/revision/latest?cb=20220527104026',
            'type_ids' => Type::whereIn('name', ['Fuego'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Absorbe fuego', 'Agallas'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Porygon',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/2/2d/Porygon.png/revision/latest?cb=20220610074426',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Calco', 'Descarga', 'Cálculo final'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Omastar',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/9/97/Omastar.png/revision/latest?cb=20080909113905',
            'type_ids' => Type::whereIn('name', ['Roca', 'Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Nado rápido', 'Caparazón', 'Armadura frágil'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Kabutops',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/7/72/Kabutops.png/revision/latest?cb=20080730095738',
            'type_ids' => Type::whereIn('name', ['Roca', 'Agua'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Armadura batalla', 'Nado rápido', 'Armadura frágil'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Aerodactyl',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/e/e6/Aerodactyl.png/revision/latest?cb=20170615170617',
            'type_ids' => Type::whereIn('name', ['Roca', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Cabeza roca', 'Presión', 'Nerviosismo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Snorlax',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/0b/Snorlax.png/revision/latest?cb=20160904204605',
            'type_ids' => Type::whereIn('name', ['Normal'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Sebo', 'Inmunidad', 'Gula'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Articuno',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/5/52/Articuno.png/revision/latest?cb=20160316192008',
            'type_ids' => Type::whereIn('name', ['Hielo', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Presión', 'Manto níveo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Zapdos',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d8/Zapdos.png/revision/latest?cb=20160316194916',
            'type_ids' => Type::whereIn('name', ['Eléctico', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Presión', 'Pararrayos'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Moltres',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/0/01/Moltres.png/revision/latest?cb=20160316201747',
            'type_ids' => Type::whereIn('name', ['Fuego', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Presión', 'Cuerpo llama'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Dragonite',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/a/a6/Dragonite.png/revision/latest?cb=20151017110809',
            'type_ids' => Type::whereIn('name', ['Dragón', 'Volador'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Fuerza mental', 'Multiescamas'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['Macho', 'Hembra'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Mewtwo',
            'sprite' => 'https://static.wikia.nocookie.net/espokemon/images/d/d3/Mewtwo.png/revision/latest?cb=20150621180327',
            'type_ids' => Type::whereIn('name', ['Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Presión', 'Nerviosismo'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
        Pokemon::create([
            'name' => 'Mew',
            'sprite' => '',
            'type_ids' => Type::whereIn('name', ['Psíquico'])->pluck('_id')->toArray(),
            'abilitie_ids' => Ability::whereIn('name', ['Sincronía'])->pluck('_id')->toArray(),
            'genre_ids' => Genre::whereIn('genre', ['No tiene género'])->pluck('_id')->toArray(),
        ]);
    }
}
