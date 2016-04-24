
<div class="products form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Edit Product') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($product) ?>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('local_uri');
            echo $this->Form->input('price');
            echo $this->Form->input('discount');
            echo $this->Form->input('terms');
            echo $this->Form->input('status');
            echo $this->Form->input('customers._ids', ['options' => $customers]);
            echo $this->Form->input('zones._ids', ['options' => $zones]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
