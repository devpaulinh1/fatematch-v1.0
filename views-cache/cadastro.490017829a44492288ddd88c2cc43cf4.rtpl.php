<?php if(!class_exists('Rain\Tpl')){exit;}?>		<div class="section row g-0">
			<div class="slideFive d-none d-lg-block col-6">
				<img src="views/resources/site/images/slideFive.jpg" class="d-block w-100" alt="slideFive" />
			</div>
			<div class="form col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-0 vh-100">
				<form action="/cadastro" method="post">
					<div class="letter2 col-10 offset-1 col-md-8 offset-md-2 mt-5 mb-5">
						<small>Crie uma conta</small>
					</div>
					<div class="form-floating col-10 offset-1 col-md-8 offset-md-2 mb-4">
						<input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email" required />
						<label for="floatingInput">E-mail</label>
					</div>
					<div class="form-floating col-10 offset-1 col-md-8 offset-md-2 mt-4">
						<input type="text" class="form-control" id="floatingInput" placeholder="Nome de usuário" name="username"
						required />
						<label for="floatingInput">Nome de usuário</label>
					</div>
					<div class="form-floating col-10 offset-1 col-md-8 offset-md-2 mt-4">
						<input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="password"
						required />
						<label for="floatingPassword">Senha</label>
					</div>
					<button type="submit" class="btn btn-primary offset-1 offset-md-2 mt-5 mb-5" name="btnCadastrar">
						Cadastrar
					</button>
					<div class="linkLogin col-10 offset-1 col-md-8 offset-md-2">
						<small>Já possui uma conta?<a aria-current="page" href="/login">
						Entrar</a></small>
					</div>
				</form>
			</div>
		</div>
