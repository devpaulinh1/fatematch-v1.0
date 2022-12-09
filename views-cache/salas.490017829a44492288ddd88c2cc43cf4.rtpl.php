<?php if(!class_exists('Rain\Tpl')){exit;}?>		<div class="section2 mb-3">
			<div class="boxOne row g-0 col-12">
				<?php $counter1=-1;  if( isset($allGroups) && ( is_array($allGroups) || $allGroups instanceof Traversable ) && sizeof($allGroups) ) foreach( $allGroups as $key1 => $value1 ){ $counter1++; ?>
				<div class="group col-12 col-lg-6 mt-3 position-relative" data-bs-toggle="modal"
				data-bs-target="#modalGroup_<?php echo htmlspecialchars( $value1["id_sala"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="group_<?php echo htmlspecialchars( $value1["id_sala"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
					<div class="title col-12 py-1"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
					<div class="banner col-12">
						<img src="<?php echo htmlspecialchars( $value1["banner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="d-block w-100" alt="banner_<?php echo htmlspecialchars( $value1["id_jogo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" />
					</div>
					<div class="details col-12 mb-4 py-1">Detalhes</div>
					<div class="sectionHour col-12 row g-0 mb-3">
						<div class="clock col-3">
							<img src="views/resources/site/icons/clock.png" alt="clock" width="25" height="19" />
						</div>
						<div class="hour col-9"><?php echo htmlspecialchars( $value1["hr_inicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["hr_fim"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
					</div>
					<div class="sectionDay col-12 row g-0 mb-3">
						<div class="calendar col-3">
							<img src="views/resources/site/icons/calendar.png" alt="calendar" width="25" height="19" />
						</div>
						<div class="day col-9"><?php echo htmlspecialchars( $value1["dia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
					</div>
					<div class="sectionClassification col-12 row g-0 mb-4">
						<div class="bars col-3">
							<img src="views/resources/site/icons/bars.png" alt="bars" width="25" height="19" />
						</div>
						<div class="stars col-9">
							<img src="views/resources/site/icons/star.png" alt="star" width="20" height="14" />
							<img src="views/resources/site/icons/star.png" alt="star" width="20" height="14" />
							<img src="views/resources/site/icons/star.png" alt="star" width="20" height="14" />
							<img src="views/resources/site/icons/star.png" alt="star" width="20" height="14" />
							<img src="views/resources/site/icons/star.png" alt="star" width="20" height="14" />
						</div>
					</div>
					<div class="comments col-12 mb-4 py-1">Comentário</div>
						<div class="sectionComments col-12 row g-0 mb-5 pb-5">
						<div class="comment col-3">
							<img src="views/resources/site/icons/comment.png" alt="comment" width="25" height="19" />
						</div>
						<div class="text col-9">
							<?php echo htmlspecialchars( $value1["comentario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
						</div>
					</div>
					<div class="sectionPlayers col-12 row g-0 py-1 position-absolute bottom-0 start-0">
						<div class="players col-3 offset-1">
							<img src="views/resources/site/icons/players.png" alt="players" width="25" height="19" />
						</div>
						<div class="number col-3"><?php echo htmlspecialchars( $value1["jogadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["max_jogadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
						<div class="view col-4 offset-1">
							<img src="views/resources/site/icons/eye.png" alt="eye" width="25" height="19" />
						</div>
					</div>
				</div>
				<div class="modal fade modal-xl" id="modalGroup_<?php echo htmlspecialchars( $value1["id_sala"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" tabindex="-1" aria-labelledby="modalGroup" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body row g-0">
								<div class="boxOne col-12 col-lg-7">
									<div class="title col-12 py-1"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
									<div class="banner col-12">
										<img src="<?php echo htmlspecialchars( $value1["banner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="d-block w-100" alt="banner_<?php echo htmlspecialchars( $value1["id_sala"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" />
									</div>
									<div class="sectionPlayers2 col-12 row g-0 py-1 mb-4">
										<div class="players col-3 offset-3">
											<img src="views/resources/site/icons/players.png" alt="players" width="25" height="19" />
										</div>
										<div class="number col-3"><?php echo htmlspecialchars( $value1["jogadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["max_jogadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
									</div>
									<div class="sectionUser col-12 row g-0">
										<div class="user col-3 col-sm-2 mb-3">
											<img src="views/resources/site/icons/user.png" alt="user" width="25" height="19" />
										</div>
										<div class="nickname col-9 col-sm-4 mb-3">Jogador 01</div>
										<div class="bars2 col-3 col-sm-2 mb-3">
											<img src="views/resources/site/icons/bars.png" alt="bars" width="25" height="19" />
										</div>
										<div class="stars2 col-9 col-sm-4 mb-3">
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
										</div>
									</div>
								</div>
								<div class="boxTwo col-12 col-lg-5">
									<div class="details col-12 mb-4 py-1">Detalhes</div>
									<div class="sectionHour col-12 row g-0 mb-3">
										<div class="clock col-3">
											<img src="views/resources/site/icons/clock.png" alt="clock" width="25" height="19" />
										</div>
										<div class="hour col-9"><?php echo htmlspecialchars( $value1["hr_inicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["hr_fim"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
									</div>
									<div class="sectionDay col-12 row g-0 mb-3">
										<div class="calendar col-3">
											<img src="views/resources/site/icons/calendar.png" alt="calendar" width="25" height="19" />
										</div>
										<div class="day col-9"><?php echo htmlspecialchars( $value1["dia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
									</div>
									<div class="sectionClassification col-12 row g-0 mb-3">
										<div class="bars col-3">
											<img src="views/resources/site/icons/bars.png" alt="bars" width="25" height="19" />
										</div>
										<div class="stars col-9">
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
											<img src="views/resources/site/icons/star.png" alt="star" width="18" height="12" />
										</div>
									</div>
									<div class="groupCode col-12 row g-0 mb-4">
										<div class="search col-3">
											<img src="views/resources/site/icons/search.png" alt="search" width="25" height="19" />
										</div>
										<div class="code col-9">#<?php echo htmlspecialchars( $value1["id_sala"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
									</div>
									<div class="comments col-12 mb-4 py-1">Comentário</div>
									<div class="sectionComments col-12 row g-0 mb-4">
										<div class="comment col-3">
											<img src="views/resources/site/icons/comment.png" alt="comment" width="25" height="19" />
										</div>
										<div class="text col-9">
											<?php echo htmlspecialchars( $value1["comentario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success" name="btnEntrar">
									Entrar na sala
								</button>
								<button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="btnSair">
									Sair da sala
								</button>
								<button type="submit" class="btn btn-info" data-bs-dismiss="modal" name="btnEditar">
									Editar da sala
								</button>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
