<?php
require __DIR__ . '/classe1.php';




function getMonsters()
{
    return [
        [
            'name' => 'Domovoï',
            'strength' => 30,
            'life' => 300,
            'type' => 'water'
        ],
        [
            'name' => 'Wendigos',
            'strength' => 100,
            'life' => 450,
            'type' => 'earth'
        ],
        [
            'name' => 'Thunderbird',
            'strength' => 400,
            'life' => 500,
            'type' => 'air'
        ],
        [
            'name' => 'Sirrush',
            'strength' => 250,
            'life' => 1500,
            'type' => 'fire'
        ],
    ];
}

// fonction qui retourne un tableau d'objets de type Monstre 
function getMonsters2(){
    $monster1 = new Monster();
    $monster1->setName('Domovoï');
    $monster1->setStrength('30');
    $monster1->setLife('300');
    $monster1->setType('water');

    $monster2 = new Monster();
    $monster2->setName('Wendigos');
    $monster2->setStrength('1000');
    $monster2->setLife('450');
    $monster2->setType('earth');

    $monster3 = new Monster();
    $monster3->setName('Thunderbird');
    $monster3->setStrength('400');
    $monster3->setLife('500');
    $monster3->setType('air');

    $monster4 = new Monster();
    $monster4->setName('Sirrush');
    $monster4->setStrength('250');
    $monster4->setLife('1500');
    $monster4->setType('fire');

    $monstersTab = array($monster1, $monster2, $monster3, $monster4);

    return $monstersTab;
}

//Fonction qui retourne un tableau d'objets de type Monstre, les données
//provenant de la base de données Monsters
function getMonsters3(){
    try{
        $bdd = new PDO('mysql: host=localhost; dbname=monsters; charset=utf8', 'root', 'aurelie');
    }catch(Exception $e){
        die('Error: '.$e->getMessage());
    }

    $response = $bdd->query('select * from monstre2');
    $data=array();
    foreach($response->fetchAll() as $monster){
        $m = new Monster();
        $m->setName($monster['name']);
        $m->setStrength($monster['strength']);
        $m->setLife($monster['life']);
        $m->setType($monster['type']);
        $data[] = $m;
    }
    return $data;
    $response->closeCursor();
   
}


//fonction qui supprime un monstre de la base de données Monsters
function deleteMonster($name){
    
        try{
            $bdd = new PDO('mysql: host=localhost; dbname=monsters; charset=utf8', 'root', 'aurelie');
            $requete = $bdd->prepare('DELETE FROM monstre2 WHERE name = ?');
            $requete -> execute(array($name));
        }catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
    
        return;
        $requete->closeCursor();
}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}