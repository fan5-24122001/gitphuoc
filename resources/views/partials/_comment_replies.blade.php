
@foreach($comments as $comment)
    <div style="margin-left: 70px;">
       
        <strong>{{ $comment->user->email }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}" >
            @csrf
            <div class="form-group" >
                
                <input type="text" name="comment_body" class="form-control" required />
                <input type="hidden" name="post_id" value="{{ $post_id }}" required />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group" >
                <input type="submit" class="btn btn-success" value="Reply" />
            </div>
        </form>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach
