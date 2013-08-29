function BiblioListCtrl($scope) {
    $scope.medias = [
    {"id" : "1",
	"name": "Kaamelott",
    "type": "Série",
	"status" : [{"name":"Possédé","type":"success"},{"name":"Visionné","type":"success"}],
	"informations" : [{"name":"Saison 4","type":"primary"},{"name":"720p","type":"info"}, {"name":"Complète","type":"info"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "2",
	"name": "Hero Corp",
    "type": "Série",
	"status" : [{"name":"Visionné","type":"success"},{"name":"Non possédé","type":"warning"}],
	"informations" : [{"name":"Saison 3","type":"primary"},{"name":"1080p","type":"info"}, {"name":"Incomplète","type":"danger"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "3",
	"name": "Avengers",
    "type": "Film",
	"status" : [{"name":"À voir","type":"danger"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "4",
	"name": "True Blood",
    "type": "Série",
	"status" : [{"name":"Visionné","type":"success"}],
	"informations" : [{"name":"Saison 5","type":"primary"},{"name":"DVD-Rip","type":"info"}, {"name":"Complet","type":"info"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "5",
	"name": "Matrix",
    "type": "Film",
	"status" : [{"name":"Visionné","type":"success"},{"name":"Possédé","type":"success"}],
	"informations" : [{"name":"720p","type":"info"}, {"name":"VOSTFR","type":"info"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "6",
	"name": "Ryse : Son of Rome",
    "type": "Jeux Vidéo",
	"status" : [{"name":"Pas fini","type":"danger"},{"name":"Prété","type":"warning"}],
	"informations" : [{"name":"Xbox One","type":"success"}, {"name":"Action","type":"primary"}],
	"image" : "http://localhost/noimage.jpg"	
	},
    {"id" : "7",
	"name": "Final Fantasy XV",
    "type": "Jeux Vidéo",
	"status" : [{"name":"Fini","type":"success"},{"name":"Possédé","type":"success"}],
	"informations" : [{"name":"Playstation 4","type":"primary"}, {"name":"RPG","type":"primary"}],
	"image" : "http://localhost/noimage.jpg"	
	}
	];
}