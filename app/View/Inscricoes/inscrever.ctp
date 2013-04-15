<div class="container">
<h2>Faça sua Inscrição</h2>
<hr>
<?= $this->Form->create('Inscricao',array('controller' => 'inscricao', 'action' => 'inscrever')); ?>
<?= $this->Form->input('nome') ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('telefone') ?>
<?= $this->Form->input('endereco') ?>
<?= $this->Form->submit('Inscrever') ?>
<?= $this->Form->end() ?>
</div>
