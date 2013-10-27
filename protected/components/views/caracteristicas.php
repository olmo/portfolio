<?php if($models != null): ?>
    <?php foreach($models as $model): ?>
        <li>
        <label class="checkbox">
            <input type="checkbox" onclick="this.form.submit();" name="chk_<?php echo $tipo ?>[]" value="<?php echo $model->id; ?>" ><?php echo $model->nombre; ?>
        </label>
        </li>
    <?php endforeach; ?>
<?php endif; ?>