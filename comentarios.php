<section id="comentarios" class="margin-top" ng-controller="ComentariosController">
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-12">
				<h1>Deixe o seu comentário</h1>
			</div>
			<div class="col-sm-12 container-coment">
				<div class="col-sm-10 col-sm-offset-1" ng-repeat="comentario in comentarios">
					<div class="panel panel-info margin-top"  role="panel">
						  	<button type="button" ng-click="removerComentario(comentario.id)" class="close pull-right" data-dismiss="panel"  aria-label="Close"  title="Fechar"><span aria-hidden="true">&times;</span></button>

						  	<div class="panel-body">
						  		<p class="text-center btn-block" ng-show="loading">
									
								</p>
						  		<div class="meu-bloco-inline">
							  		<img ng-src="{{ comentario.url }}" alt="User" class="img-responsive img-circle minha-img" style="width:50px;">
							  		<div class="margin-left">
									<strong class="bold">{{ comentario.nome }}</strong><br />
									<small>{{ comentario.data }}</small>
									</div>
								</div>
						  	</div>

						  	<div class="panel panel-default">
							 	<div class="panel-body">{{comentario.conteudo}}</div>
								<div class="panel-footer">
									<a href="#" class="btn-dicas"><i class="fa fa-thumbs-o-up fa-md"></i> Gostei</a> 
									<a href="#" class="btn-dicas"><i class="fa fa-thumbs-o-down fa-md"></i> Não Gostei</a>
								</div>
							</div>
						</div>
				</div>
				
				<div class="col-sm-8 col-sm-offset-2">
					<div class="meu-bloco-inline">
						<div class="bloco-block">
							  		<center><img ng-src="{{ usuario }}" alt="User" class="img-responsive img-circle minha-img"></center>
							  		<strong class="bold">Kauan Barros</strong>
						</div>
				
					<form class="" ng-submit="adicionarComentario(comentario)">
						<div class="form-group margin-left">
							<textarea class="form-control" rows="5" cols="80" name="comentario" placeholder="Escreva aqui o seu comentário..." ng-model="novoComentario.conteudo" required></textarea>
							<button type="submit" class="btn btn-primary pull-right">Postar &raquo</button>
						</div>
					</form>
					</div>
					
					</div>
			</div> -->
			<div class="fb-comments" data-href="http://hotelcalifornia.hol.es/" data-width="100%" data-numposts="100"></div>
		</div>
	</div>

	
</section>	