<div class="container">
	<div class="musthead">
		<h3 class="muted">Congresso de Informática Biomédica </h3>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li><?= $this->Html->link('Principal',array( 'controller' => 'pages', 'action' => 'display','home')) ?></li>
						<li><?= $this->Html->link('Sobre',array( 'controller' => 'pages', 'action' => 'display','sobre')) ?></li>
						<li><a href="">Programação</a></li>
						<li><?= $this->Html->link('Como chegar',array( 'controller' => 'pages', 'action' => 'display','como_chegar')) ?></li>
						<li><?= $this->Html->link('Inscrições',array( 'controller' => 'inscricoes', 'action' => 'inscrever')) ?></li>
						<li><a href="">Contato</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>