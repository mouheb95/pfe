<a href="<?php echo e(route('conge.show',$notification->data['conge']['enseignant_id'])); ?>" onClick="markNotificationAsRead()">
	<?php echo e($notification->data['user']['name']); ?> Demande un conge
</a>