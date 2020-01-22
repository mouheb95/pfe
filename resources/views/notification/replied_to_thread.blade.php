<a href="{{route('conge.show',$notification->data['conge']['enseignant_id'])}}" onClick="markNotificationAsRead()">
	{{$notification->data['user']['name']}} Demande un conge
</a>