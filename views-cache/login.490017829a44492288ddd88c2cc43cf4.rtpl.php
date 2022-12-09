<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class="section row g-0">
		<div class="slideFive d-none d-lg-block col-6">
			<img src="views/resources/site/images/slideFive.jpg" class="d-block w-100" alt="slideFive" />
		</div>
		<div class="form col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-0 vh-100">
			<form action="/login" method="post">
				<div class="letter2 col-10 offset-1 col-md-8 offset-md-2 mt-5 mb-5">
					<small>Inicie uma sessão</small>
				</div>
				<div class="form-floating col-10 offset-1 col-md-8 offset-md-2 mb-4">
					<input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email" required />
					<label for="floatingInput">E-mail</label>
				</div>
				<div class="form-floating col-10 offset-1 col-md-8 offset-md-2 mt-4">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="password"
					required />
					<label for="floatingPassword">Senha</label>
				</div>
				<button type="submit" class="btn btn-danger offset-1 offset-md-2 mt-5 mb-5" name="btnLogin">
					Entrar
				</button>
				<div class="linkCadastro col-10 offset-1 col-md-8 offset-md-2">
					<small>Não possui uma conta?<a aria-current="page" href="/cadastro">
					Criar</a></small>
				</div>
				<div class="linkModal col-10 offset-1 col-md-8 offset-md-2">
					<small data-bs-toggle="modal" data-bs-target="#modalFPassword">Esqueci a senha</small>
				</div>
			</form>
		</div>
	</div>
	<div class="modal fade" id="modalFPassword" tabindex="-1" aria-labelledby="modalFPasswordLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h1 class="modal-title fs-5" id="modalFPasswordLabel">
				Recuperação de senha
			  </h1>
			</div>
			<div class="modal-body">
			  <div class="form-floating">
				<input type="email" class="form-control" id="floatingInput" placeholder="E-mail" required />
				<label for="floatingInput">E-mail</label>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-success">Recuperar</button>
			  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
				Fechar
			  </button>
			</div>
		  </div>
		</div>
	</div>
