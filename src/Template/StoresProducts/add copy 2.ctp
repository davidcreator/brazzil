<nav class="large-2 medium-4 columns" id="actions-sidebar">

    <ul class="side-nav">

        <li class="heading"><?= __('Ações') ?></li>

        <li><?= $this->Html->link(__('Produtos'), ['action' => 'index']) ?></li>

        <li><?= $this->Html->link(__('Categorias'), ['controller' => 'StoresCategories', 'action' => 'index']) ?></li>

        <li><?= $this->Html->link(__('Nova Categoria'), ['controller' => 'StoresCategories', 'action' => 'add']) ?></li>

    </ul>

</nav>

<div class="storesProducts form large-10 medium-8 columns content">

    <?= $this->Form->create($storesProduct, ['type' => 'file']) ?>

    <fieldset>

        <legend><?= __('Adicionar Novo Produto') ?></legend>

        <label for="product">Código de Barras</label>

        <?php

            echo $this->Form->control('barcode', [
                'label' => false,
                'type' => 'text'
            ]);
        ?>

        <label for="product">QrCode</label>

        <?php

            echo $this->Form->control('qrcode', [
                'label' => false,
                'type' => 'text'
            ]);
        ?>

        <label for="product">Produto*</label>

        <?php

            echo $this->Form->control('product', [
                'label' => false
            ]);
        ?>

        <label for="description">Descrição*</label>

        <?php
            echo $this->Form->control('description', [
                'label' => false
            ]);
        ?>

        <label for="description">Preço*</label>

        <?php
            echo $this->Form->control('price', [
                'label' => false
            ]);
        ?>

        <input
            type="hidden"
            class="form-control"
            name="users_id"
            value="<?= $idUser ?>"/>

        <label for="description">Categorias*</label>

        <?php
            echo $this->Form->control('stores_categories_id', ['options' => $storesCategories, 'label' => false]);
        ?>

        <label for="description">Foto*</label>

        <?php
            echo $this->Form->control('photo[]', ['label' => false, 'type' => 'file', 'multiple' => false]);
        ?>

        <label for="description">Quantidade*</label>

        <?php
            echo $this->Form->control('quantity',
            [
                'label' => false
            ]);
        ?>

        <label for="description">Online</label>

        <?php
            echo $this->Form->control('online',
            [
                'label' => false
            ]);
        ?>

    </fieldset>

    <?= $this->Form->button(__('Adicionar')) ?>

    <?= $this->Form->end() ?>

</div>
