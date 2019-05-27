<li class="media @if ( ! $loop->last) border-bottom @endif">
    <div class="media-left">
        <a href="{{ route('user.show', $notification->data['user_id']) }}">
            <img class="media-object img-fluid rounded-circle mr-3 mt-2" alt="{{ $notification->data['user_name'] }}"
                 src="{{ $notification->data['user_avatar'] }}" style="width:48px;height:48px;"/>
        </a>
    </div>

    <div class="media-body">
        <div class="media-heading mt-1 mb-1 text-secondary">
            <a href="{{ route('user.show', $notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>
            在文章
            <a href="{{ $notification->data['link'] }}" target="_blank">{{ $notification->data['post_title'] }}</a>
            的评论中提及了您
            {{-- 回复删除按钮 --}}
            <span class="meta float-right" title="{{ $notification->created_at }}">
        <i class="far fa-clock"></i>
        {{ $notification->created_at->diffForHumans() }}
      </span>
        </div>
        <div class="reply-content">
            {!! $notification->data['comment_content'] !!}
        </div>
    </div>
</li>