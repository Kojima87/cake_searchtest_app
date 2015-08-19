<div class="section form_search">
	<h2>検索</h2>
	<?php echo $this->Form->create('Message',array('novalidate'=>true,'url'=>array_merge(array('action'=>'index'),$this->params['pass']))); ?>
	<?php echo $this->Form->input('word',array('placeholder'=>'名前と本文を検索します。','label'=>false)); ?>
	<?php echo $this->Form->submit('検索'); ?>
	<?php echo $this->Form->end(); ?>
</div>

<div class="section">
<h2>記事一覧</h2>
<table>

<?php foreach ($messages as $message) : ?>
	<tr>
		<td><?php echo h($message['Message']['id']); ?></td>
		<td><?php echo h($message['Message']['name']); ?></td>
		<td><?php echo h($message['Message']['body']); ?></td>
	</tr>
<?php endforeach; ?>
</table>

<div class="paginateLinks">
	<?php echo $this->Paginator->prev(); ?>&nbsp;
	<?php echo $this->Paginator->numbers(); ?>&nbsp;
	<?php echo $this->Paginator->next(); ?>
</div>
