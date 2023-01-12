// function Person(name, age){
//     this.name = name;
//     this.number = age;
//     this.roar = function(){
//         alert(`${this.number}!!!!`);
//     }
// }

// const shayne = new Person('Shayne',30);

// Person.prototype.whisper = function(){
//     console.log(`...Hello, my name is ${this.name}`);
// }
// shayne.whisper();

function GamesList(name){
    this.listName = name;
    this.games = [];
    this.gamesIDMaker = 0;

    this.add = function(content){
        const game = {
            id:`a${this.gamesIDMaker++}`,
            title: content
        };
        this.games.push(game);
        this.dump(`Added ${content}`);
    },
    this.udpate = function(id,property,value){
        this.games[id][property] = value;
        this.dump(`Updated the ${property} of ${this.games[id].title}`);
    },

    this.dump = function(note = "") {
        console.log(`-----------${note}`);
        console.log(`games`, this.games);
    }
}

const playStationGames = new GamesList('PlayStation Games');
const xBoxGames = new GamesList('XBox Games');

console.log(playStationGames.listName);
playStationGames.add('God of War'); 
// console.log(xBoxGames.listName);
// xBoxGames.add('Halo');

GamesList.prototype.complete = function(id){
    this.games[id].complete = true;
}
playStationGames.complete(0);
// console.log(playStationGames.games[0]);
// xBoxGames.complete(0);
// console.log(xBoxGames.games[0]);

GamesList.prototype.remove = function(id){
    this.dump(`Removed ${this.games[id].title}`);
    this.games.splice(id,1);
}

playStationGames.add('The Last of Us');
playStationGames.complete(1);
playStationGames.udpate(0,"complete",false);
















