<div class="comment-element">
    <a href="{{route('user.profile', ['username'=>$comment->user->username])}}" class="pull-left">
        <img alt="{{$comment->user->username}}" class="img-rounded avatar" src="{{$comment->user->avatar}}">
    </a>
    <div class="media-body">
        <small class="pull-right dateforhumans">{{$comment->dateforHumans()}}</small>
        <a href="{{route('user.profile', ['username'=>$comment->user->username])}}"><strong>{{$comment->user->username}}</strong></a>
        <br>
        <small class="text-muted"></small>
        <div class="well mbn pbn">{!! nl2br(e($comment->comment)) !!}</div>
        <div class="ic-options">
            @if( Auth::user()->id == $comment->user_id )
                <a href="{{route('comments.edit', ['id' => $comment->id])}}" class="font-bold"
                    data-toggle="modal" data-target="#modalLarge">
                    <span data-toggle="tooltip" title="Edit Comment">
                    <i class="fa fa-pencil" aria-hidden="true"></i> {{trans('gitscrum.edit')}}</span></a>

                <a href="{{route('comments.destroy', ['id' => $comment->id, '#tab-comments'])}}" class="font-bold"
                    data-toggle="tooltip" title="Delete Comment">
                    <i class="fa fa-trash" aria-hidden="true"></i> {{trans('gitscrum.delete')}}</a>
            @endif
        </div>
    </div>
</div>


<div class="comment">
    <a class="avatar">
        <img src="/images/avatar/small/stevie.jpg">
    </a>
    <div class="content">
        <a class="author">Stevie Feliciano</a>
        <div class="metadata">
            <div class="date">2 days ago</div>
            <div class="rating">
                <i class="star icon"></i>
                5 Faves
            </div>
        </div>
        <div class="text">
            Hey guys, I hope this example comment is helping you read this documentation.
        </div>
    </div>
</div>