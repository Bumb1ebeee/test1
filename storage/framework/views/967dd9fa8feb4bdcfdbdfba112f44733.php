<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['message']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['message']); ?>
<?php foreach (array_filter((['message']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<tr <?php if($message['complaint']==1): ?> style="background: #f46969" <?php endif; ?>>
    <td><?php echo e($message['id']); ?></td>
    <td><?php echo e($message['message']); ?></td>
    <td><?php echo e($message['created_at']); ?></td>
    <td>
        <form action="/complaint" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" name="id" value="<?php echo e($message['id']); ?>" hidden>
            <button>Пожаловаться</button>
        </form>
    </td>
</tr>
<?php /**PATH C:\OSPanel\domains\localhost\test1\resources\views/components/message.blade.php ENDPATH**/ ?>