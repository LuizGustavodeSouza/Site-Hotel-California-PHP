angular.module("Comentarios").controller("ComentariosController", function($scope){
	
	$scope.usuario = "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/19366294_113138045963547_950440453755955947_n.jpg?oh=b107ea6f546fcc894b54049db6627116&oe=5A7CEF02"
	$scope.comentarios = [

	{
		id: "001",
		nome: "Kauan Barros",
		data: "02/09/2017",
		conteudo: "O site está ficando bom!",
		url: "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/19366294_113138045963547_950440453755955947_n.jpg?oh=b107ea6f546fcc894b54049db6627116&oe=5A7CEF02"
	},

	{
		id: "002",
		nome: "Kayo Henrique",
		data: "07/09/2017",
		conteudo: "Eu sou um bosta.",
		url: "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/12096432_826668754116285_7084005051596614591_n.jpg?oh=1d62f62f34c57490a3a00e7523b3dc89&oe=5A47B80D"
	},

	{
		id: "003",
		nome: "Emerson Pereira",
		data: "18/09/2017",
		conteudo: "Tá nice!",
		url: "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/19260420_1652963294745659_2403633417384404493_n.jpg?oh=47068130be0c426e7b6318db24b757e5&oe=5A3D09F5"
	},

	{
		id: "004",
		nome: "Willian Santos",
		data: "02/10/2017",
		conteudo: "Miss Mobilia.",
		url: "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/13627010_810407899096585_8047310457394874398_n.jpg?oh=93955d2b394e8cacc41e52625b53dfa1&oe=5A83ECF8"
	}

	];

	$scope.adicionarComentario = function(){

		var comentario = angular.copy($scope.novoComentario);

		$scope.comentarios.push(comentario);
		comentario.id = Date.now();
		comentario.nome = "Kauan Barros";
		comentario.data = Date.now();
		comentario.url = "https://scontent.fcgh4-1.fna.fbcdn.net/v/t1.0-9/19366294_113138045963547_950440453755955947_n.jpg?oh=b107ea6f546fcc894b54049db6627116&oe=5A7CEF02";

		$scope.novoComentario = {};


	};

	$scope.removerComentario = function(id){
		angular.forEach($scope.comentarios, function(comentario, i){

			if(comentario.id == id){
				$scope.comentarios.splice(i, 1);
			}
		});
	}

});
